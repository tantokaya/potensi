<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trend extends CI_Controller {

    /**
     * @author : Intan Permatasari, S.Kom
     * @keterangan : Controller untuk halaman trend
     **/


    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

	public function index()	{
        
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='trend inovasi';
            $d['judul_halaman']     ='Trend Inovasi';

            $d['all_tahun']	    = $this->app_model_front->getAllTahun();

            $d['content']           = $this->load->view('trend',$d,true);
            $this->load->view('cari',$d);

    }

    
}

/* End of file trend.php */
/* Location: ./application/controllers/trend.php */