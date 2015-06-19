<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trend extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		include(APPPATH."libraries/FusionCharts.php");
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

	public function index()	{

			$d['judul']             ='trend';
            $d['judul_halaman']     ='Trend';

            $d['all_tahun']	    = $this->app_model->get_all_tahun();
			$d['all_kategori']  = $this->app_model->get_all_kategori();

			$data['main_content'] = 'books_view';
			
			$d['data_trend']	= $this->app_model->get_trend_penelitian();
			
			$tahun = date("Y");
			
			/* Chart Trend Inovasi Per Bidang Fokus */
			
			$dataXML1 = $this->get_trend_per_section();
			$d['caption_berita'] 	= "Trend Inovasi Per Bidang Fokus Tahun " . $tahun;
			$d['graph_berita'] 		= renderChart(base_url()."assets/plugin/FusionCharts/MSLine.swf ", "", $dataXML1, "TrendPerSection", '100%', 300, 0,1); 
			
			/* Top Keyword */
			$t = '2011';
			$d['top_keyword'] 		= $this->app_model->get_top_keyword($t); print_r($d['top_keyword']);
			
            $d['content']           = $this->load->view('trend',$d,true);
            $this->load->view('cari',$d);
       
    }
	
	public function get_trend_per_section() {

		$data1 = "<chart labelDisplay='auto' useEllipsesWhenOverflow='1' caption='' subcaption='' exportEnabled='1' xAxisName='Tahun' yAxisName='Jumlah Inovasi' numberPrefix='' numberSuffix=' inovasi' formatNumberScale='0' showValues='0' pieRadius='150' paletteColors='F9690E'> ";	
		$data2 = "";
		$data3 = "";
		/*
		$kat = "";
		$color = "";
		$kategori = "";	
		*/
		$tahun = $this->app_model->get_tahun_trend(); //print_r($tahun);
		$data2 .= "<categories>";
		foreach($tahun as $t):
			$data2 .= "<category label='$t->tahun'/>";
		endforeach;
		$data2 .= "</categories>";
				
		$kategori = $this->app_model->get_kategori_trend();  //print_r($kategori);
		foreach($kategori as $k):
			$kat = $k->kategori;
			
			if($kat=='energi'){$color='0080C0';}
			if($kat=='informasi'){$color='008040';}
			if($kat=='keamanan'){$color='f8bd19';}
			if($kat=='kesehatan'){$color='800080';}
			if($kat=='makanan'){$color='FF8040';}
			if($kat=='material'){$color='FFFF00';}
			if($kat=='sains'){$color='FF0080';}
			if($kat=='sosial'){$color='008ee4';}
			if($kat=='transportasi'){$color='33bdda';}
			
			$data3 .= "<dataset seriesname='$k->kategori' color='$color' anchorbordercolor='$color' anchorbgcolor='$color'>";
			$jumlah = $this->app_model->get_trend_per_section($kat); //print_r($jumlah);
				
			foreach($jumlah as $j):
				$data3 .= "<set value='$j->jumlah'/>";
			endforeach;
				
			$data3 .= "</dataset>";
		endforeach;

		$dataXML = $data1 . $data2 . $data3 ."</chart>";
		
		return $dataXML;	
			
	}

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */