<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lembaga extends CI_Controller {

    /**
     * @author : Hartanto Kurniawan,S.Kom
     * @web : http://www.risetkomputer.com
     * @keterangan : Controller untuk halaman Lembaga
     **/

    function __construct() {
        parent::__construct();
        $this->load->model('app_model');
        $this->load->library('csvimport');
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

	public function index()	{
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']               = $this->config->item('prg');
            $d['web_prg']           = $this->config->item('web_prg');

            $d['nama_program']      = $this->config->item('nama_program');
            $d['instansi']          = $this->config->item('instansi');
            $d['usaha']             = $this->config->item('usaha');
            $d['alamat_instansi']   = $this->config->item('alamat_instansi');

            $d['judul']             ='list_lembaga';
            $d['judul_halaman']     ='List Lembaga';

            $d['all_lembaga']	    = $this->app_model->get_all_lembaga();

            $d['content']           = $this->load->view('admin/lembaga/view',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }

    }


    public function new_lembaga(){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']= $this->config->item('prg');
            $d['web_prg']= $this->config->item('web_prg');

            $d['nama_program']= $this->config->item('nama_program');
            $d['instansi']= $this->config->item('instansi');
            $d['usaha']= $this->config->item('usaha');
            $d['alamat_instansi']= $this->config->item('alamat_instansi');

            $d['judul']='lembaga';
            $d['judul_halaman']='Add Lembaga';

            $d['code']      = '';
            $d['name']      = '';

            $d['content']= $this->load->view('admin/lembaga/form',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }
    }



    public function simpan (){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $up['lembaga_code']	        =$this->input->post('code');
            $up['lembaga_name']	        =$this->input->post('name');

            $id['lembaga_code']			=$this->input->post('code');

            $data = $this->app_model->getSelectedData("tbl_lembaga",$id);

            if($data->num_rows()>0){
               $this->app_model->updateData("tbl_lembaga",$up,$id);

            }else{
                $this->app_model->insertData("tbl_lembaga",$up);
            }
        }else{
            header('location:'.base_url());
        }
    }

    public function edit(){
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $d['prg']= $this->config->item('prg');
            $d['web_prg']= $this->config->item('web_prg');

            $d['nama_program']= $this->config->item('nama_program');
            $d['instansi']= $this->config->item('instansi');
            $d['usaha']= $this->config->item('usaha');
            $d['alamat_instansi']= $this->config->item('alamat_instansi');

            $d['judul']='edit_lembaga';
            $d['judul_halaman']='Edit Lembaga';

            $id = $this->uri->segment(3);
            $text = "SELECT * FROM tbl_lembaga WHERE lembaga_code='$id'";
            $data = $this->app_model->manualQuery($text);

            if($data->num_rows() > 0){
                foreach($data->result() as $db){
                    $d['code']		    =$id;
                    $d['name']		    =$db->lembaga_name;
                }
            }else{

                $d['code']		    =$id;
                $d['name']		    ='';
            }


            $d['content']= $this->load->view('admin/lembaga/form',$d,true);
            $this->load->view('admin/main',$d);
        }else{
            header('location:'.base_url());
        }
    }

    public function delete()  {
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
            $id = $this->uri->segment(3);
            $this->app_model->manualQuery("DELETE FROM tbl_lembaga WHERE lembaga_code='$id'");
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/lembaga'>";
        }else{
            header('location:'.base_url());
        }
    }

    /* ------------ Import CSV Controller -------------- */
    function importcsv() {
        $cek = $this->session->userdata('logged_in');
        if(!empty($cek)){
        $data['prg']               = $this->config->item('prg');
        $data['web_prg']           = $this->config->item('web_prg');

        $data['nama_program']      = $this->config->item('nama_program');
        $data['instansi']          = $this->config->item('instansi');
        $data['usaha']             = $this->config->item('usaha');
        $data['alamat_instansi']   = $this->config->item('alamat_instansi');

        $data['judul']             ='list_lembaga';
        $data['judul_halaman']     ='List Lembaga';

        $data['all_lembaga']	    = $this->app_model->get_all_lembaga();

        $data['tbl_lembaga'] = $this->app_model->get_lembaga_csv();
        $data['error'] = '';    //initialize image upload error array to empty

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);


        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();

            $data['content']           = $this->load->view('lembaga/view',$data,true);
            $this->load->view('main', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];

            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'lembaga_code'=>$row['code'],
                        'lembaga_name'=>$row['name'],

                    );
                    $this->app_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url()."index.php/lembaga/list_lembaga");
                //echo "<pre>"; print_r($insert_data);
            } else
                $data['error'] = "Error occured";
            $data['content']           = $this->load->view('lembaga/view',$data,true);
            $this->load->view('main', $data);
        }

        }else{
            header('location:'.base_url());
        }

    }
}

/* End of file lembaga.php */
/* Location: ./application/controllers/lembaga.php */