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
}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */