<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_Model extends CI_Model {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @keterangan : Controller untuk halaman biodata
     **/


    public function getAllData($table)
    {
        return $this->db->get($table);
    }

    public function getAllDataLimited($table,$limit,$offset)
    {
        return $this->db->get($table, $limit, $offset);
    }

    public function getSelectedDataLimited($table,$data,$limit,$offset)
    {
        return $this->db->get_where($table, $data, $limit, $offset);
    }
    function getImage($username){
        $query = $this->db->query("select foto from admins where username = '$username'");
        foreach ($query->result() as $row){
            return $row->foto;
        }
    }
    //select table
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    //update table
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }

    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }

    //Query manual
    function manualQuery($q)
    {
        return $this->db->query($q);
    }


/* -----  Automatic Number Code --------*/

    public function MaxKodeFokus(){
        $text = "SELECT max(fokus_code) as no FROM tbl_fokus";
        $data = $this->app_model->manualQuery($text);
        if($data->num_rows() > 0 ){
            foreach($data->result() as $t){
                $no = $t->no;
                $tmp = ((int) substr($no,3,7))+1;
                $hasil = 'FOK'.sprintf("%07s", $tmp);
            }
        }else{
            $hasil = 'FOK'.'0000001';
        }
        return $hasil;
    }

    public function MaxKodeSite(){
        $text = "SELECT max(site_code) as no FROM tbl_site";
        $data = $this->app_model->manualQuery($text);
        if($data->num_rows() > 0 ){
            foreach($data->result() as $t){
                $no = $t->no;
                $tmp = ((int) substr($no,3,7))+1;
                $hasil = 'SIT'.sprintf("%07s", $tmp);
            }
        }else{
            $hasil = 'SIT'.'0000001';
        }
        return $hasil;
    }



    /*-------  All of Trasaction -----------*/

    function get_all_fokus() {
        $this->db->select('*');
        $this->db->from('tbl_fokus');
        $this->db->order_by('fokus_code', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_all_site() {
        $this->db->select('*');
        $this->db->from('tbl_site');
        $this->db->order_by('site_code', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_all_lembaga() {
        $this->db->select('*');
        $this->db->from('tbl_lembaga');
        $this->db->order_by('lembaga_code', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_all_pengguna() {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by('username', 'desc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /* -------------  Import CSV File ---------------- */

    function get_lembaga_csv() {
        $query = $this->db->get('tbl_lembaga');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }

    function insert_csv($data) {
        $this->db->insert('tbl_lembaga', $data);
    }

    function select($select=NULL,$awal=0,$akhir=100){
        if(! is_null($select))$this->db->like($select);
        $query = $this->db->get('tbl_lembaga',$akhir,$awal);
        return $query->result();
    }

    //query login
    public function getLoginData($usr,$psw)
    {
        $u = mysql_real_escape_string($usr);
        $p = md5(mysql_real_escape_string($psw));
        $q_cek_login = $this->db->get_where('tbl_admin', array('username' => $u, 'password' => $p));
        if(count($q_cek_login->result())>0)
        {
            foreach($q_cek_login->result() as $qck)
            {
                foreach($q_cek_login->result() as $qad)
                {
                    $sess_data['logged_in'] = 'aingLoginYeuh';
                    $sess_data['username'] = $qad->username;
                    $sess_data['nama_lengkap'] = $qad->nama_lengkap;
                    $sess_data['foto'] = $qad->foto;
                    $sess_data['id_level'] = $qad->id_level;
                    $this->session->set_userdata($sess_data);
                }
                header('location:'.base_url().'index.php/main');
            }
        }
        else
        {
            $this->session->set_flashdata('result_login', '<div class="alert alert-info"> Rajin Belajarlah Tentu Kau bisa ...! :P</div><br/>');
            header('location:'.base_url().'index.php/login');
        }
    }

    public function CariNamaPengguna(){
        $id = $this->session->userdata('username');
        $t = "SELECT * FROM tbl_admin WHERE username='$id'";
        $d = $this->app_model->manualQuery($t);
        $r = $d->num_rows();
        if($r>0){
            foreach($d->result() as $h){
                $hasil = $h->nama_lengkap;
            }
        }else{
            $hasil = '';
        }
        return $hasil;
    }

    public function CariLevel($id){
        $t = "SELECT * FROM tbl_level WHERE id_level='$id'";
        $d = $this->app_model->manualQuery($t);
        $r = $d->num_rows();
        if($r>0){
            foreach($d->result() as $h){
                $hasil = $h->level;
            }
        }else{
            $hasil = '';
        }
        return $hasil;
    }
	
	/* QUERY UNTUK FRONT END */
	
	public function get_all_tahun(){
		/*
		$this->db->distinct();
		$this->db->select('tahun');
        $this->db->from('v_trendkuadratik');
        $this->db->order_by('tahun', 'asc');
        $query = $this->db->get();
        return $query->result_array();
		*/
        
		$this->db->distinct();
		$this->db->select('tahun');
        $this->db->from('tblcrawling');
        $this->db->order_by('tahun', 'asc');
        $query = $this->db->get();
        return $query->result_array();
		
	}
	

	public function get_all_kategori(){
	
		$this->db->distinct();
		$this->db->select('kategori');
        $this->db->from('tblkategori');
        $this->db->order_by('kategori', 'asc');
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	/*
	public function tree_perangkat_daerah($depth=0)
    {
        	$result='';
        	$temp= $this->get_perangkat_daerah_by_parent_id($depth);
        	if(!empty($temp)){                     
                	$result="<ul>";
                	foreach($temp as $row){
                    	$result.='<li value="'.$row->ID.'" id="'.$row->ID.'">';                               
                    	$result.="<span>".$row->ID."-".$row->Nama."</span>"; //your data to display
                    	$result.= $this->tree_perangkat_daerah($row->ID);
                    	$result.="</li>";
                }
                $result.="</ul>";
        }
        return $result;
    }
	
	public function get_perangkat_daerah_by_parent_id($parent){
		$this->db->select("*");
		$this->db->where('Parent',$parent);
		$records=$this->db->get('perangkatdaerah')->result();
		return $records;
	}
	*/
	
	/*
	public function get_all_kategori()   {
	
		$this->db->distinct();
		$this->db->select('kategori');
        $this->db->from('tblkategori');
        $this->db->order_by('kategori', 'asc');
        $query = $this->db->get();
        $temp  = $query->result_array();	
		
        	$result='';
			
        	//$temp= $this->get_subkategori($depth);
        	//if(!empty($temp)){                     
                	$result="<ul>";
                	foreach($temp as $row){
                    	$result.="<li value='".$row->kategori."' id='".$row->kategori."'>";                               
                    	$result.="<span>'".$row->kategori."'</span>"; 
                    	//$result.= $this->get_all_kategori($row->kategori);
                    	$result.="</li>";
					}
					$result.="</ul>";
       // }
        return $result;
    }
	
	public function get_subkategori($kategori){
		
		$this->db->distinct();
		$this->db->select('subkategori1');
		$this->db->where('kategori',$parent);
        $this->db->order_by('kategori', 'asc');
		$records=$this->db->get('tblkategori')->result();
		return $records;
		
	}
	*/
	

	function get_subkategori()	{
	
		$this->db->select('subkategori1');
		$this->db->from('tblkategori');
		$this->db->order_by('subkategori1', 'asc');
		$query = $this->db->get();

		if($query->num_rows() == 0)	{
			return false;
		}
		return $query->result_array();
	}
	
	
	
	
	public function get_trend_penelitian(){
	
		/* $q = "select a.id, tahun, y, b.subkategori1, subkategori2 as sub from v_trendkuadratik a, tblkategori b 
											where a.id = b.id and b.subkategori1 = '$key' and tahun = '$dthn[tahun]' order by y desc";*/
		$this->db->select('a.id, tahun, y, b.subkategori1, subkategori2 as sub');
        $this->db->from('v_trendkuadratik a');
		$this->db->join('tblkategori b ','a.id = b.id');
		$this->db->where('b.subkategori1','Infrastruktur');
		$this->db->where('tahun','2011');
        $this->db->order_by('y', 'desc');
        $query = $this->db->get();
        return $query->result_array();									
	
	}
	
	public function get_dropdown_bidang_fokus(){
		$this->db->select('nama_bidang_fokus');
        $this->db->from('tblsection');
        $this->db->order_by('nama_bidang_fokus', 'asc');
        $query = $this->db->get();
        return $query->result_array();	
							
	}
	
	public function get_dropdown_lembaga(){
		$this->db->select('lembaga_name');
        $this->db->from('tbl_lembaga');
        $this->db->order_by('lembaga_name', 'asc');
        $query = $this->db->get();
        return $query->result_array();	
							
	}
	
	public function insert_penelitian($data){
	/*
		foreach($data as $d){
			$section = $d['section'];
			$klasifikasi = $d['klasifikasi'];
			$abstrak  = $d['abstrak'];
			$judul = $d['judul'];
			$isi = $d['isi'];
			$pengarang = $d['pengarang'];
			$lembaga  = $d['lembaga'];
			$tahun  = $d['tahun'];
		}
		$this->db->query("INSERT INTO tblcrawling (section, klasifikasi, abstrak, judul, isiteks, pengarang, domain, tahun) 
							VALUES ('$section', '$klasifikasi', '$abstrak', '$judul', '$isiteks', '$pengarang', '$lembaga', '$tahun')");
	*/
		$this->db->insert('tblcrawling', $data);
		return $this->db->insert_id();
	}
	
	public function get_count_penelitian_by_section(){
	
		$kondisi = "judul !='' ";
		$this->db->select('a.section, COUNT(a.id) AS jml');
        $this->db->from('tblcrawling a');
		$this->db->join('tblsection b','a.section = b.nama_bidang_fokus');
		$this->db->where($kondisi);
		$this->db->group_by('a.section');
        $this->db->order_by('a.section', 'asc');
        $query = $this->db->get();
        return $query->result_array();
	
	}
	
	public function get_berita_terkini(){
		$kondisi = 'klasifikasi = "berita" and (judul != "" and url != "")';
		$this->db->select('judul, url');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $this->db->order_by('id', 'desc');
		$this->db->limit('10', '0');
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	public function get_top_penelitian(){

		$kondisi = 'klasifikasi in ("lab","penelitian","paten")';
		$this->db->select('id, judul, hits, isiteks');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $this->db->order_by('hits', 'desc');
		$this->db->limit('10', '0');
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	public function get_penelitian_per_section($key,$kat,$offset,$per_page){
		if($offset!=0){ 
			$offset = ($offset-1) * $per_page;
		}
		
		$kondisi = "section = '$key' and (judul !='' and judul != '(no title)') and klasifikasi = '$kat' ";
		
		//if($lembaga){ $kondisi .= "and domain like '%$lembaga%'";}		
		$this->db->select('id, judul, hits');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $this->db->order_by('id', 'desc');
		$this->db->limit($per_page, $offset);
        $query = $this->db->get();
        return $query->result_array();	
	
	}	
	
	public function get_total_penelitian_per_section($key,$kat){

		$kondisi = "section = '$key' and (judul !='' and judul != '(no title)') and klasifikasi = '$kat' ";
		$this->db->select('id, judul, hits');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $this->db->order_by('id', 'desc');
		//$this->db->limit('10', '0');
        $query = $this->db->get();
        return $query->num_rows();
	
	}
	
	
	/* Lembaga Terkait */
	
	public function get_lembaga_terkait($key){

		$kondisi = "section = '$key' and ( domain NOT LIKE '%.com%' and domain NOT LIKE '%.co.id%' and domain != '' )";
		$this->db->select('count(id) as jml, domain');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
		$this->db->group_by('domain');
        $this->db->order_by('jml', 'desc');
		$this->db->limit('10', '0');
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	/* Hasil Pencarian */
	
	public function get_hasil_pencarian($key,$kat,$offset,$per_page){
		if($offset!=0){ 
			$offset = ($offset-1) * $per_page;
		}
		
		$kondisi = "(judul like '%$key%' or abstrak like '%$key%' or isiteks like '%$key%') and (judul !='' and judul != '(no title)') and klasifikasi = '$kat' ";
	
		$this->db->select('id, judul, abstrak, isiteks, hits');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $this->db->order_by('id', 'desc');
		$this->db->limit($per_page, $offset);
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	
	public function get_total_hasil_pencarian($key,$kat){

		$kondisi = "(judul like '%$key%' or abstrak like '%$key%' or isiteks like '%$key%') and (judul !='' and judul != '(no title)') and klasifikasi = '$kat' ";
		
		$this->db->select('id');
        $this->db->from('tblcrawling');
		$this->db->where($kondisi);
        $query = $this->db->get();
        return $query->num_rows();
	
	}
	
	public function get_detail_penelitian($id){

		$this->db->select('id, judul, abstrak, isiteks, section, klasifikasi, pengarang, domain, tahun, url, skor, kota');
        $this->db->from('tblcrawling');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result_array();	
	
	}
	
	public function update_hits($id){
	
		//$this->db->query('update tblcrawling set hits = hits+1 where id = "$id"');
		
		$this->db->where('id', $id);
		$this->db->set('hits', 'hits+1', FALSE);
		$this->db->update('tblcrawling');
	
	}
	
	/* Fungsi untuk trend */
	public function get_tahun_trend() {
		
		$sql = "SELECT DISTINCT(tahun) as tahun FROM tblcrawling 
				WHERE section IN (SELECT nama_bidang_fokus FROM tblsection) 
				AND klasifikasi IN ('lab','penelitian','paten')
				ORDER BY tahun asc ";
		$hasil = $this->db->query($sql);

		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}	
	}
	
	public function get_kategori_trend() {
		
		// $sql = "SELECT nama_bidang_fokus as kategori FROM tblsection	ORDER BY nama_bidang_fokus asc";
		$sql = "SELECT DISTINCT(section) as kategori FROM tblcrawling WHERE section IN (SELECT nama_bidang_fokus FROM tblsection) ";
		$hasil = $this->db->query($sql);

		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}	
	}
	
	public function get_trend_per_section($kat) {
		
		$sql = "SELECT section, tahun, COUNT(ID) as jumlah FROM `tblcrawling` 
				WHERE section = '$kat' AND klasifikasi IN ('lab','penelitian','paten')
				GROUP BY section, tahun
				ORDER BY section asc";
		$hasil = $this->db->query($sql);

		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}	
	}
	
	public function get_top_keyword($t){

		$kondisi = "keyword != '' AND YEAR(tanggal) = '$t' ";
		$this->db->select('COUNT(id) as jumlah, keyword, YEAR(tanggal) as tahun');
        $this->db->from('tblkeyword');
		$this->db->where($kondisi);
		$this->db->group_by('keyword','tahun');
        $this->db->order_by('jumlah', 'desc');
		$this->db->limit('5');
        $query = $this->db->get();
        return $query->result_array();	
		
	}

	
}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */