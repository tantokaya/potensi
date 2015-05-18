<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Pengguna
     **/
	
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		if(!empty($cek)){

			$d['prg']           = $this->config->item('prg');
			$d['web_prg']       = $this->config->item('web_prg');
			
			$d['nama_program']  = $this->config->item('nama_program');
			$d['instansi']      = $this->config->item('instansi');
			$d['usaha']         = $this->config->item('usaha');
			$d['alamat_instansi']= $this->config->item('alamat_instansi');

			
			$d['judul']        ="list_pengguna";
            $d['judul_halaman']= "List Pengguna";


            $d['all_pengguna']	    = $this->app_model->get_all_pengguna();

            $d['content'] = $this->load->view('pengguna/view', $d, true);
			$this->load->view('main',$d);
		}else{
			header('location:'.base_url());
		}
	}
	
	public function new_pengguna()
	{
		$cek = $this->session->userdata('logged_in');
		if(!empty($cek)){
			$d['prg']= $this->config->item('prg');
			$d['web_prg']= $this->config->item('web_prg');
			
			$d['nama_program']= $this->config->item('nama_program');
			$d['instansi']= $this->config->item('instansi');
			$d['usaha']= $this->config->item('usaha');
			$d['alamat_instansi']= $this->config->item('alamat_instansi');

			$d['judul']="Pengguna";
			
			$d['username']		='';
			$d['nama_lengkap']	='';
			$d['pwd']			='';
			$d['level']			='';
			
			$text = "SELECT * FROM tbl_level";
			$d['l_level'] = $this->app_model->manualQuery($text);
			
			$d['content'] = $this->load->view('pengguna/form', $d, true);		
			$this->load->view('main',$d);
		}else{
			header('location:'.base_url());
		}
	}
	
	public function edit()
	{
		$cek = $this->session->userdata('logged_in');
		if(!empty($cek)){
			
			$d['prg']= $this->config->item('prg');
			$d['web_prg']= $this->config->item('web_prg');
			
			$d['nama_program']= $this->config->item('nama_program');
			$d['instansi']= $this->config->item('instansi');
			$d['usaha']= $this->config->item('usaha');
			$d['alamat_instansi']= $this->config->item('alamat_instansi');
			
			$d['judul'] = "Pengguna";
			
			$id = $this->uri->segment(3);
			$text = "SELECT * FROM admins WHERE username='$id'";
			$data = $this->app_model->manualQuery($text);
			if($data->num_rows() > 0){
				foreach($data->result() as $db){
					$d['username']		=$id;
					$d['nama_lengkap']	=$db->nama_lengkap;
					$d['pwd']	='';
					$d['level']			=$db->level;
				}
			}else{
					$d['username']		=$id;
					$d['nama_lengkap']	='';
					$d['pwd']	='';
					$d['level']			='';
			}
			
			$text = "SELECT * FROM level";
			$d['l_level'] = $this->app_model->manualQuery($text);
									
			$d['content'] = $this->load->view('pengguna/form', $d, true);		
			$this->load->view('main',$d);
		}else{
			header('location:'.base_url());
		}
	}
	
	public function hapus()
	{
		$cek = $this->session->userdata('logged_in');
		if(!empty($cek)){			
			$id = $this->uri->segment(3);
			$this->app_model->manualQuery("DELETE FROM admins WHERE username='$id'");
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/pengguna'>";			
		}else{
			header('location:'.base_url());
		}
	}
	
	public function simpan()
	{
		
		$cek = $this->session->userdata('logged_in');
		if(!empty($cek)){
				
				$pwd 	= $this->input->post('pwd');
				$nama 	= $this->input->post('nama_lengkap');
				$level	= $this->input->post('level');
				$user	= mysql_real_escape_string($this->input->post('username'));
				
				$up['username']		= $user;
				$up['nama_lengkap']	= $nama;
				$up['password']		= md5($pwd);
				$up['level']	= $level;
				
				$id['username']=$this->input->post('username');
				
				$data = $this->app_model->getSelectedData("tbl_admin",$id);
				if($data->num_rows()>0){
					if(empty($pwd)){
						$this->app_model->manualQuery("UPDATE tbl_admin SET nama_lengkap='$nama',level='$level' WHERE username='$user'");
					}else{
						$this->app_model->updateData("tbl_admin",$up,$id);
					}
					echo 'Update data Sukses';
				}else{
					$this->app_model->insertData("tbl_admin",$up);
					echo 'Simpan data Sukses';		
				}
		}else{
				header('location:'.base_url());
		}
	
	}
	
}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */