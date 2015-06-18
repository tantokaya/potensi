<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_laporan extends CI_Model {
	public function get_jumlah_berita() {
		$sql = "SELECT section AS bidang, count(id) AS jumlah FROM `tblcrawling` WHERE klasifikasi ='berita' GROUP BY section";
		$hasil = $this->db->query($sql);
		//print_r ($this->db->last_query());

		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}	
	}
	
	public function get_jumlah_artikel() {
		$sql = "SELECT klasifikasi, count(id) AS jumlah FROM `tblcrawling` WHERE klasifikasi !='' GROUP BY klasifikasi";
		$hasil = $this->db->query($sql);
		//print_r ($this->db->last_query());

		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}	
	}

}

/* End of file m_laporan.php */
/* Location: ./application/controllers/m_laporan.php */
