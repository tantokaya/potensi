<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman awal ketika aplikasi admin diakses
     **/

	public function index()	{
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){

        $d['prg']= $this->config->item('prg');
        $d['web_prg']= $this->config->item('web_prg');

        $d['nama_aplikasi']= $this->config->item('nama_aplikasi');
        $d['instansi']= $this->config->item('instansi');
        $d['usaha']= $this->config->item('usaha');
        $d['alamat_instansi']= $this->config->item('alamat_instansi');

        $d['judul']='dashboard';
        $d['judul_halaman']='Dashboard';

        $d['content']= $this->load->view('admin/dashboard',$d,true);
        $this->load->view('admin/main',$d);

        }else{
            header('location:'.base_url().'index.php/login');
        }
	}


}

/* End of file main.php */
/* Location: ./application/controllers/main.php */