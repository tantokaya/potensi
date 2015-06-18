<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ref_json extends CI_Controller {

	/**
	 * @author : Hartanto Kurniawan,S.Kom
	 * @keterangan : Controller untuk halaman profil
	 **/


    function get_all_lembaga(){
        $d['prg']= $this->config->item('prg');
        $d['web_prg']= $this->config->item('web_prg');

        $d['nama_program']= $this->config->item('nama_program');
        $d['instansi']= $this->config->item('instansi');
        $d['usaha']= $this->config->item('usaha');
        $d['alamat_instansi']= $this->config->item('alamat_instansi');

        // mengambil data lembaga dari database
        $lbg = $this->app_model->select();
        // menjadikan objek menjadi JSON
        $d = json_encode($lbg);
        // mengeluarkan JSON ke browser
        header('HTTP/1.1: 200');
        header('Status: 200');
        header('Content-Length: '.strlen($d));
        exit($d);

        $this->load->view('lembaga/view', $d);
    }

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */