<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
		$this->load->library('upload');
		$this->load->helper(array('form','url'));
        $this->load->database();
    }

	public function index()	{
        
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='form_upload';
            $d['judul_halaman']     ='Form Upload Penelitian';
					
			$d['email']		= '';
            $d['lembaga']	= '';
            $d['judul']		= '';
            $d['abstrak']	= '';
            $d['isi']       = '';
            $d['section']   = '';
            $d['pengarang'] = '';
            $d['lembaga']   = '';
            $d['tahun']     = '';
			$d['kategori']  = '';

            $d['dropdown_bidang_fokus'] = $this->app_model->get_dropdown_bidang_fokus();
			$d['dropdown_lembaga'] = $this->app_model->get_dropdown_lembaga();
            

            $d['content']           = $this->load->view('upload',$d,true);
            $this->load->view('cari',$d);
        
    }

    public function simpan (){
			
			$section			= $this->input->post('section');
			$klasifikasi		= 'penelitian';				
            $abstrak			= $this->input->post('abstrak');
			$judul			= $this->input->post('judul');
			$isi				= $this->input->post('isi');			
			$pengarang		= $this->input->post('pengarang');
			$lembaga			= $this->input->post('lembaga');
			$tahun			= $this->input->post('tahun');
			$kategori		= $this->input->post('kategori');
			
			//section, klasifikasi, abstrak, judul, isiteks, pengarang, domain, tahun
			
			$dp=array(
				'section'=>$section,
				'klasifikasi'=>$kategori,
				'abstrak'=>$abstrak,
				'judul'=>$judul,
				'isiteks'=>$isi,
				'pengarang'=>$pengarang,
				'domain'=>$lembaga,
				'tahun'=>$tahun
				);
			
			$id_penelitian = $this->app_model->insert_penelitian($dp);
			
			$tgl = date("Y-m-d");
			$email   			= $this->input->post('email');
            $lembaga_kontributor	= $this->input->post('lembaga_kontributor');
			
			$this->db->query("INSERT INTO tblkontributor (email_kontributor, lembaga_kontributor, tgl_upload, id_penelitian) VALUES ('$email','$lembaga_kontributor','$tgl','$id_penelitian')");
			
			$pesan = 'Data penelitian berhasil disimpan.';	
			redirect('upload',$pesan);
			
			//$this->load->view('upload',true);
            //$this->load->view('cari',$d);
				
    }

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */