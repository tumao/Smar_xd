<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends BaseController{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	function index(){
		echo 'user index';exit;
	}
	/*用户登陆*/
	function login(){
		$email 		= $this->input->get_post('email');
		$passwd 	= $this->input->get_post('passwd');
		$user_data 	= $this->user_model->_check_user( $email, $passwd);
		if( $user_data != false){
			$this->session->set_userdata( 'uid', $user_data['id']);
			$this->session->set_userdata( 'email', $user_data['email']);
			echo "success";exit;
			header('location:/');
		}
		$this->load->view('main/user/login.php');
	}
	/* 用户退出登陆*/
	function logout(){
		$this->_user_logout();
	}
}

/* End of file */
/* Location: ./application/controllers/welcome.php */