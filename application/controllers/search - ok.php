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
			$d['kategori']     = '';
			$d['lembaga'] = '';			
			
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			if($this->input->post('kategori')){
				$kategori = $this->input->post('kategori');
			}else if($this->uri->segment(5)){
				$kategori = $this->uri->segment(5);
			}else{
				$kategori = 'penelitian';
			}
				
			// config pagination
			$offset = $this->uri->segment(6,0);
			$per_page = 10;
			$config = array();
			$config["base_url"] = base_url() . "index.php/search/detail/section/$key/$kategori";
			$config["total_rows"] = $this->app_model->get_total_penelitian_per_section($key,$kategori);
			$config["per_page"] = $per_page;
			$config['use_page_numbers'] = TRUE;
			$config['uri_segment'] = 6;
			$config['num_links'] = 10;
			
			$d['penelitian_per_section'] = $this->app_model->get_penelitian_per_section($key,$kategori,$offset,$per_page);			
			$d['jml'] = $this->app_model->get_total_penelitian_per_section($key,$kategori);
			$d['lembaga_terkait'] = $this->app_model->get_lembaga_terkait($key);
			$d['kategori'] = $kategori;
			
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


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */