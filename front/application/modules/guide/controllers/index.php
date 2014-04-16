<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('daogou_model');
	}
	
	public function index()
	{
		$result = $this->daogou_model->search('daogou',array('id <> '	=> ''),'id desc');
		$data['result'] = $result;
		$this->load->view('index', $data);
	}
	public function daogou_info(){
		$id = $this->input->get_post("id");
		$data['result'] = $this->daogou_model->search('daogou',array('id'=> $id),null, 1);
		$this->load->view('daogou_info',$data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */