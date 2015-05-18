<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Datatable_master extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->library('Datatables');
        $this->load->library('table');
		

	}
	
	/***Default function, redirects to login page if no admin logged in yet***/
	public function index()
	{
		if (!$this->session->userdata('logged_in') == true)
			redirect('login');	
	}

    function fokus()
    {
        $this->datatables->select('fokus_code,fokus_name')
            ->add_column('Aksi', '
				<a href="'.base_url().'index.php/fokus/ubah/$1" class="blue"><i class="icon-zoom-in bigger-130"></i> Edit</a>  |  <a href="'.base_url().'index.php/fokus/hapus/$1" class="red" onClick="return confirm(\'Anda yakin ingin menghapus data ini?\')"><i class="icon-pencil bigger-130"></i> Hapus</a>
			','kat_code')
            ->from('tbl_fokus');

        echo $this->datatables->generate();
    }
	
}