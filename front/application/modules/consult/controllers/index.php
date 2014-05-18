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
	public function info(){
		$id = $this->input->get_post('id');
		$info = $this->consult_model->search('zixun',array('id'=>$id),null,1);
		$data['info'] = $info;
		$this->load->view('consult_info', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */