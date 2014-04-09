<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends AbaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	
	public function index()
	{
		$this->load->view('index');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */