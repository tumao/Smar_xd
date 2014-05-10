<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('daogou_model');
	}
	
	public function index()
	{
		$result = $this->daogou_model->search('daogou',array('id <> '	=> ''),'id desc',1);
		$data['result'] = $result;
		$this->load->view('index', $data);
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */