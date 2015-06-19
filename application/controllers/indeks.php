<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indeks extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @keterangan : Controller untuk halaman lembaga
     **/

	public function index()	{
        $d['prg']= $this->config->item('prg');
        $d['web_prg']= $this->config->item('web_prg');

        $d['nama_program']= $this->config->item('nama_program');
        $d['instansi']= $this->config->item('instansi');
        $d['usaha']= $this->config->item('usaha');
        $d['alamat_instansi']= $this->config->item('alamat_instansi');


    }

    public function new_indeks(){
        $d['prg']= $this->config->item('prg');
        $d['web_prg']= $this->config->item('web_prg');

        $d['nama_program']= $this->config->item('nama_program');
        $d['instansi']= $this->config->item('instansi');
        $d['usaha']= $this->config->item('usaha');
        $d['alamat_instansi']= $this->config->item('alamat_instansi');

        $d['judul']='indeks';
        $d['judul_halaman']='Add Indeks';

        $d['name']      = '';
        $d['depth']     = '';

        $text = "SELECT * FROM tbl_fokus";
        $d['l_fokus'] = $this->app_model->manualQuery($text);

        $d['content']= $this->load->view('admin/indeks/form',$d,true);
        $this->load->view('admin/main',$d);
    }

    public function start(){
        $d['prg']= $this->config->item('prg');
        $d['web_prg']= $this->config->item('web_prg');

        $d['nama_program']= $this->config->item('nama_program');
        $d['instansi']= $this->config->item('instansi');
        $d['usaha']= $this->config->item('usaha');
        $d['alamat_instansi']= $this->config->item('alamat_instansi');

        $d['judul']='start_indeks';
        $d['judul_halaman']='Start Indeks';

        $id = $this->uri->segment(3);
        $text = "SELECT * FROM tbl_site WHERE site_code='$id'";
        $data = $this->app_model->manualQuery($text);

        if($data->num_rows() > 0){
            foreach($data->result() as $db){
                $d['name']		    =$db->site_url;
                $d['depth']         =$db->site_depth;
            }
        }else{
                $d['name']		    ='';
                $d['depth']         ='';
        }


        $d['content']= $this->load->view('admin/indeks/form',$d,true);
        $this->load->view('admin/main',$d);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */