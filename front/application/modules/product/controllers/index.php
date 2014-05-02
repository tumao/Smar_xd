<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}
	
	public function index()
	{	
		$limit = $this->input->get_post('limit');
		// $page = $this->input->get_post('page');
		// $offset = (　$page - 1 )*$rows;
		// $condition = array();
		// $condition['id <> '] = '';
		// exit;
		// $result = $this->products_model->search('products', $condition, ' `id` asc', $offset, $limit);
		// $data['result'] = $result;
		$this->load->view('index');
	}
	public function main(){
		$this->load->view('index');
	}

    public function productdetail() {
        $this->load->view('productdetail');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */