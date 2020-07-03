<?php 
/**
* 
*/
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
		$this->load->library('form_validation');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
	function aksiLogin(){
		$this->load->model("user_model");
		$this->user_model->cek();
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
 ?>