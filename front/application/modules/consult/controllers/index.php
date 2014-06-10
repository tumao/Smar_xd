<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('consult_model');
	}
	
	public function index()
	{
		$page = $this->input->get_post('page');
		$page = $page ? $page : 1;
		$limit = '20';
		$offset = ( $page - 1 ) * $limit;
		$offset = $offset >= 0 ? $offset : 0;
		$zixun = $this->consult_model->search('zixun',array(),'id asc',$limit,$offset);
		$count = $this->consult_model->search('zixun',array(),null);
		$count = count( $count);
		$mainpg = ceil( $count/20);
		$data['pages'] = $mainpg;
		$data['page_now'] = $page;
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