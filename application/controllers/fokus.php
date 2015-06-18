<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fokus extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Bidang Fokus
     **/


    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

	public function index()	{
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='list_fokus';
            $d['judul_halaman']     ='List Fokus';

            $d['all_fokus']	    = $this->app_model->get_all_fokus();

            $d['content']           = $this->load->view('admin/fokus/view',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }
    }

    public function new_fokus(){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']= $this->config->item('prg');
            $d['web_prg']= $this->config->item('web_prg');

            $d['nama_program']= $this->config->item('nama_program');
            $d['instansi']= $this->config->item('instansi');
            $d['usaha']= $this->config->item('usaha');
            $d['alamat_instansi']= $this->config->item('alamat_instansi');

            $d['judul']='Bidang Fokus';
            $d['judul_halaman']='Add Bidang Fokus';

            $kode	= $this->app_model->MaxKodeFokus();

            $d['code']      = $kode;
            $d['name']      = '';

            $d['content']= $this->load->view('admin/fokus/form',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }
    }



    public function simpan (){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $up['fokus_code']   = $this->input->post('code');
            $up['fokus_name']	= $this->input->post('name');

            $id['fokus_code']	= $this->input->post('code');

            $data = $this->app_model->getSelectedData("tbl_fokus",$id);

            if($data->num_rows()>0){
                $this->app_model->updateData("tbl_fokus",$up,$id);

            }else{
                $this->app_model->insertData("tbl_fokus",$up);
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

            $d['judul']='edit_fokus';
            $d['judul_halaman']='Edit Fokus';

            $id = $this->uri->segment(3);
            $text = "SELECT * FROM tbl_fokus WHERE fokus_code='$id'";
            $data = $this->app_model->manualQuery($text);

            if($data->num_rows() > 0){
                foreach($data->result() as $db){
                    $d['code']		    =$id;
                    $d['name']		    =$db->fokus_name;
                }
            }else{

                $d['code']		    =$id;
                $d['name']		    ='';
            }


            $d['content']= $this->load->view('admin/fokus/form',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }
    }

    public function delete()  {
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $id = $this->uri->segment(3);
            $this->app_model->manualQuery("DELETE FROM tbl_fokus WHERE fokus_code='$id'");
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/fokus'>";
        }else{
        header('location:'.base_url());
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */