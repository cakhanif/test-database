<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function index() {

		//Fungsi Login
		$valid = $this->form_validation;
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $valid->set_rules('username', 'username', 'trim|required|max_length[10]|alpha_numeric|xss_clean');
        $valid->set_rules('password', 'password', 'trim|required|max_length[8]|xss_clean');

        if($valid->run()) {

        	$date = date('Y-m-d h:i:s');
            $change_date = ['admin_last_access'=>$date];
            $this->db->update('auth_admin', $change_date);

            $this->lib_auth->login($username,$password,base_url('cpanel/dashboard'), base_url('cpanel/auth'));
        }
        //End Fungsi Login

		$this->load->view('cpanel/auth_view');
	}

	//logout
    public function logout() {
        $this->lib_auth->logout();
    }
}