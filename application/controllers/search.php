<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Bidang Fokus
     **/


    public function __construct()  {
        parent::__construct();
    }

    public function index()	{

        $d['judul']='beranda';
        $d['judul_halaman']='Beranda';
		
		$d['top_penelitian']  = $this->app_model->get_top_penelitian();
		$d['jml_penelitian_per_section'] = $this->app_model->get_count_penelitian_by_section();
		$d['berita_terkini']  = $this->app_model->get_berita_terkini();
		
		$d['cari'] = 0;

        $d['content']= $this->load->view('depan',$d,true);
        $this->load->view('cari',$d);

    }
	
	public function detail($offset=0){

		$d['judul']='detail_pencarian';
		$d['judul_halaman']='Detail';

		$id = $this->uri->segment(3);		
		
		$d['top_penelitian']  = $this->app_model->get_top_penelitian();
		$d['jml_penelitian_per_section'] = $this->app_model->get_count_penelitian_by_section();
		$d['berita_terkini']  = $this->app_model->get_berita_terkini();
			
		if($id != "section"){
		
			/* Detail Penelitian */
		
			$d['cari'] = 1;
			$d['detail_penelitian'] = $this->app_model->get_detail_penelitian($id);
			$d['hits'] = $this->app_model->update_hits($id);
		
		}else{
		
			/* Penelitian Per Bidang Fokus */
			$key = $this->uri->segment(4);
			$d['cari'] = 2;
			$d['section'] = $key;
			$d['lembaga'] = '';			
			
			$this->form_validation->set_rules('kategori', 'kategori', 'required');
			if($this->input->post('kategori')){
				$kat = $this->input->post('kategori');
			}else{
				$kat = $this->uri->segment(5);
			}
			
			echo $kat;
			$d['kategori'] = $kat;
				
			// config pagination
			$offset = $this->uri->segment(6,0);
			$per_page = 10;
			$config = array();
			$config["base_url"] = base_url() . "index.php/search/detail/section/$key/$kat";
			$config["total_rows"] = $this->app_model->get_total_penelitian_per_section($key,$kat);
			$config["per_page"] = $per_page;
			$config['use_page_numbers'] = TRUE;
			$config['uri_segment'] = 6;
			$config['num_links'] = 10;
			
			$d['penelitian_per_section'] = $this->app_model->get_penelitian_per_section($key,$kat,$offset,$per_page);			
			$d['jml'] = $this->app_model->get_total_penelitian_per_section($key,$kat);
			$d['lembaga_terkait'] = $this->app_model->get_lembaga_terkait($key);
			
			
			//print_r($d['kategori']); 
			//echo $key;
			//print_r($d['lembaga']);
			//print_r($d['penelitian_per_section'] );
			
			$this->pagination->initialize($config);
			$d['links'] = $this->pagination->create_links();
		}	
		
		$d['content']= $this->load->view('depan',$d,true);
		$this->load->view('cari',$d);
 
    }
	
	public function cari($offset=0){

		$d['judul']='hasil_pencarian';
		$d['judul_halaman']='Hasil Pencarian';
		$d['key'] = '';
		$d['kategori'] = '';

		$this->form_validation->set_rules('key', 'Key', 'required');	
		if($this->input->post('key')){
			$key = $this->input->post('key');
		}else{
			$key = $this->uri->segment(4);	
		}	
			
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		if($this->input->post('kategori')){
			$kategori = $this->input->post('kategori');
		}else{
			$kategori = $this->uri->segment(3);;
		}
		
		$d['jml_penelitian_per_section'] = $this->app_model->get_count_penelitian_by_section();
		$d['berita_terkini']  = $this->app_model->get_berita_terkini();			
			
		$d['cari'] 			= 3;
		$d['key'] 			= $key;
		$d['kategori'] 		= $kategori;
		$d['lembaga'] 		= '';			

		// config pagination
		$offset = $this->uri->segment(5,0);
		$per_page = 10;
		$config = array();
		$config["base_url"] = base_url() . "index.php/search/cari/$kategori/$key";
		$config["total_rows"] = $this->app_model->get_total_hasil_pencarian($key,$kategori);
		$config["per_page"] = $per_page;
		$config['use_page_numbers'] = TRUE;
		$config['uri_segment'] = 5;
		$config['num_links'] = 10;
		
		$d['hasil_pencarian'] = $this->app_model->get_hasil_pencarian($key,$kategori,$offset,$per_page);			
		$d['jml'] = $this->app_model->get_total_hasil_pencarian($key,$kategori);
		$d['lembaga_terkait'] = $this->app_model->get_lembaga_terkait($key);
		
		
		//print_r($d['kategori']); 
		//echo $key;
		//print_r($d['lembaga']);
		//print_r($d['hasil_pencarian']);
		//print_r($d['jml']);
		
		$this->pagination->initialize($config);
		$d['links'] = $this->pagination->create_links();	
		
		$d['content']= $this->load->view('depan',$d,true);
		$this->load->view('cari',$d);
 
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */