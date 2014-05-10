<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}
	
	public function index()
	{
		$zixun = $this->consult_model->search('zixun',array(),'id asc');
		$data['zixun'] = $zixun;
		$this->load->view('index', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */