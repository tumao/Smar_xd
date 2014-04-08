<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends BaseController{
	
	public function __construct(){
		parent::__construct();
//		$this->load->model('user_model');
	}
	
	function index(){
		echo 'user index';exit;
	}
	
	function login(){
		echo 'user login ';exit;
	}
}

/* End of file */
/* Location: ./application/controllers/welcome.php */
