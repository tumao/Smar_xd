<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('course_model');
	}
	
	public function index()
	{
		$result = $this->course_model->search('course',array('id <> ' => ''), 'id desc');
		$hot_company = $this->course_model->search('company',array('ishot'=>1),null,10);
		$data['hot_company'] = $hot_company;
		$data['result'] = $result;
		$this->load->view('index', $data);
	}
	public function less_info(){
		$id = $this->input->get_post('id');
		$result = $this->course_model->search('course',array( 'id' => $id ),null,1);
		$data['result'] = $result;
		$this->load->view('less_info',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */