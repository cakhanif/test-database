<?php 

if(! defined('BASEPATH')) exit('No direct access allowed');

class Lib_auth {
    // SET SUPER GLOBAL
    var $auth = NULL;
    public function __construct() {
    $this->auth =& get_instance();
}

// Fungsi login
public function login($username, $password) {
    $query = $this->auth->db->get_where('auth_admin', array('admin_username'=>$username,'admin_password'=>md5($password)));
    if($query->num_rows() == 1) {
        $row = $this->auth->db->query('SELECT * FROM auth_admin where admin_username = "'.$username.'"');
        $admin = $row->row();
        $this->auth->session->set_userdata('username', $username);
        $this->auth->session->set_userdata('id_login', uniqid(rand()));
        redirect(base_url('cpanel/dashboard'));
    }else{
        $this->auth->session->set_flashdata('sukses','Username / Password yang anda masukkan salah');
        redirect(base_url('cpanel/auth'));
    }
    return false;
}

// Proteksi halaman
public function cek_login() {
    if($this->auth->session->userdata('username') == '') {
        $this->auth->session->set_flashdata('sukses','Anda belum login. Silahkan login terlebih dahulu');
        redirect(base_url('cpanel/auth'));
    }
}

// Fungsi logout
public function logout() {
    $this->auth->session->unset_userdata('username');
    $this->auth->session->unset_userdata('id_login');
    $this->auth->session->set_flashdata('sukses','Anda Telah Logout');
    redirect(base_url('cpanel/auth'));
    }
}
