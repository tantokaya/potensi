<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Bidang Fokus
     **/


    public function __construct()
    {
        parent::__construct();

    }

    public function index()	{
        $this->load->view('cari');

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */