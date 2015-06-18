<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		include(APPPATH."libraries/FusionCharts.php");
		$this->load->database();		
		$this->load->model('m_laporan');
	}	

	public function index()
	{
		$d['judul']             ='laporan';
        $d['judul_halaman']     ='Laporan';
      
		$tahun = date("Y");
		$dataXML1 = $this->get_jumlah_berita();
		$d['caption_berita'] 	= "Jumlah Berita Per Bidang Fokus Tahun " . $tahun;
		$d['graph_berita'] 		= renderChart(base_url()."assets/plugin/FusionCharts/Column3D.swf ", "", $dataXML1, "StatistikBerita", '100%', 400, 0,1);  
		
		$dataXML2 = $this->get_jumlah_artikel();
		$d['caption_artikel'] = "Jumlah Artikel berdasarkan Klasifikasi Tahun " . $tahun;
		$d['graph_artikel'] 	= renderChart(base_url()."assets/plugin/FusionCharts/Column3D.swf ", "", $dataXML2, "StatistikArtikelKlasifikasi", '100%', 400, 0,1);  

      $d['content']           = $this->load->view('v_laporan',$d,true); 
      $this->load->view('cari',$d);
	}
	
	public function get_jumlah_berita() {
		$jumlah = $this->m_laporan->get_jumlah_berita();
		//echo print_r($jumlah); 
		$data1 = "<chart labelDisplay='auto' useEllipsesWhenOverflow='1' caption='' subcaption='' exportEnabled='1' exportAtClient='0' exportHandler='http://107.21.74.91/' html5ExportHandler='http://107.21.74.91/'  xAxisName='Bidang Fokus' yAxisName='Jumlah Berita' numberPrefix='' numberSuffix=' berita' formatNumberScale='0' showValues='0' pieRadius='150' paletteColors='F9690E'> ";
		$data2 = "";
		
		foreach($jumlah as $k):
				$data2 .= "<set label='$k->bidang' value='$k->jumlah' />";
		endforeach;

		$dataXML = $data1 . $data2 . "</chart>";
		
		return $dataXML;	
			
	}
	
	public function get_jumlah_artikel() {
		$jumlah = $this->m_laporan->get_jumlah_artikel();
		//echo print_r($jumlah); 
		$data1 = "<chart labelDisplay='auto' useEllipsesWhenOverflow='1' caption='' subcaption='' exportEnabled='1' exportAtClient='0' exportHandler='http://107.21.74.91/' html5ExportHandler='http://107.21.74.91/'  xAxisName='Klasifikasi' yAxisName='Jumlah artikel' numberPrefix='' numberSuffix=' artikel' formatNumberScale='0' showValues='0' pieRadius='150' paletteColors='F9690E'> ";
		$data2 = "";
		
		foreach($jumlah as $k):
				$data2 .= "<set label='$k->klasifikasi' value='$k->jumlah' />";
		endforeach;

		$dataXML = $data1 . $data2 . "</chart>";
		
		return $dataXML;	
			
	}
}

/* End of file laporan.php */
/* Location: ./application/controllers/laporan.php */
