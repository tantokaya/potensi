<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

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
       
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='reporting inovasi';
            $d['judul_halaman']     ='Reporting Inovasi';

            //$d['all_trend']	    = $this->app_model->get_all_trend();

            $d['content']           = $this->load->view('report',$d,true);
            $this->load->view('cari',$d);

    }

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */