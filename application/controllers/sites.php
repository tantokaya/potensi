<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Situs
     **/

	public function index()	{
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='list_site';
            $d['judul_halaman']     ='List Site';

            $d['all_site']	    = $this->app_model->get_all_site();

            $d['content']           = $this->load->view('sites/view',$d,true);
            $this->load->view('main',$d);
        }else{
            header('location:'.base_url());
        }
    }

    public function new_site(){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']= $this->config->item('prg');
            $d['web_prg']= $this->config->item('web_prg');

            $d['nama_program']= $this->config->item('nama_program');
            $d['instansi']= $this->config->item('instansi');
            $d['usaha']= $this->config->item('usaha');
            $d['alamat_instansi']= $this->config->item('alamat_instansi');

            $d['judul']='site';
            $d['judul_halaman']='Add Sites';

            $kode	= $this->app_model->MaxKodeSite();

            $d['code']      = $kode;
            $d['name']      = '';
            $d['title']     = '';
            $d['desc']      = '';
            $d['fokus']      = '';

            $text = "SELECT * FROM tbl_fokus";
            $d['l_fokus'] = $this->app_model->manualQuery($text);

            $d['content']= $this->load->view('sites/form',$d,true);
            $this->load->view('main',$d);
        }else{
            header('location:'.base_url());
        }
    }



    public function simpan (){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $up['site_code']	    =$this->input->post('code');
            $up['site_url']	        =$this->input->post('name');
            $up['site_title']	    =$this->input->post('title');
            $up['site_short_desc']	=$this->input->post('desc');
            $up['site_depth']	    =$this->input->post('depth');

            $ud['site_code']        =$this->input->post('code');
            $ud['fokus_code']       =$this->input->post('fokus');

            $id['site_code']	    =$this->input->post('code');

            $id_d['site_code']      =$this->input->post('code');
            $id_d['fokus_code']     =$this->input->post('fokus');

            $data = $this->app_model->getSelectedData("tbl_site",$id);

            if($data->num_rows()>0){
               $this->app_model->updateData("tbl_site",$up,$id);
                $data = $this->app_model->getSelectedData("tbl_site_fokus",$id_d);
                if($data->num_rows()>0){
                    $this->app_model->updateData("tbl_site_fokus",$ud,$id_d);
                }else{
                    $this->app_model->insertData("tbl_site_fokus",$ud);
                }
            }else{
                $this->app_model->insertData("tbl_site",$up);
                $this->app_model->insertData("tbl_site_fokus",$ud);
            }
        }else{
            header('location:'.base_url());
        }
    }

    public function edit(){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']= $this->config->item('prg');
            $d['web_prg']= $this->config->item('web_prg');

            $d['nama_program']= $this->config->item('nama_program');
            $d['instansi']= $this->config->item('instansi');
            $d['usaha']= $this->config->item('usaha');
            $d['alamat_instansi']= $this->config->item('alamat_instansi');

            $d['judul']='edit_site';
            $d['judul_halaman']='Edit Site';

            $id = $this->uri->segment(3);
            $text = "SELECT
            tbl_site.site_id,
            tbl_site.site_code,
            tbl_site.site_url,
            tbl_site.site_title,
            tbl_site.site_short_desc,
            tbl_site.site_indexdate,
            tbl_site.site_depth,
            tbl_site.site_required,
            tbl_site.disallowed,
            tbl_site.can_leave_domain,
            tbl_site_fokus.fokus_code,
            tbl_site_fokus.site_code
            FROM tbl_site INNER JOIN tbl_site_fokus ON tbl_site.site_code = tbl_site_fokus.site_code
            WHERE tbl_site.site_code='$id'";
            $data = $this->app_model->manualQuery($text);

            if($data->num_rows() > 0){
                foreach($data->result() as $db){
                    $d['code']		    =$id;
                    $d['name']		    =$db->site_url;
                    $d['title']		    =$db->site_title;
                    $d['desc']		    =$db->site_short_desc;
                    $d['fokus']         =$db->fokus_code;
                    $d['depth']		    =$db->site_depth;

                }
            }else{

                $d['code']		    =$id;
                $d['name']		    ='';
                $d['title']		    ='';
                $d['desc']		    ='';
                $d['fokus']         ='';
                $d['depth']		    ='';
            }

            $text = "SELECT * FROM tbl_fokus";
            $d['l_fokus'] = $this->app_model->manualQuery($text);

            $d['content']= $this->load->view('sites/form',$d,true);
            $this->load->view('main',$d);

        }else{
            header('location:'.base_url());
        }
    }

    public function delete()  {
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $id = $this->uri->segment(3);
            $this->app_model->manualQuery("DELETE FROM tbl_site WHERE site_code='$id'");
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/sites'>";
        }else{
            header('location:'.base_url());
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */