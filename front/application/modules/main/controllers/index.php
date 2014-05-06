<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}
	
	public function index()
	{
		$prod = array();
		$prod_elite = $this->products_model->search('products',array('elite'=>1),'id asc','4');
		$prod['prod_elite'] = $prod_elite;
		//产品收益排行，待修改
		$prod_sort	= $this->products_model->search('products',array(),'id asc','6');
		$prod['prod_sort'] = $prod_sort;
		//热门机构，待修改
		$hot_company = $this->products_model->search('company',array(),'id asc','5');
		$prod['hot_company'] = $hot_company;
		$data['prod'] = $prod;
		$this->load->view('index',$data);
	}
	
	public function more_city(){
		$this->load->view('more_citys');
	}

	public function data(){
		$sort = $this->input->get_post('sort');
		//精选
		$prod = array();
		$prod_elite = $this->products_model->search('products',array('elite'=>1),'id asc');
		$prod['prod_elite'] = $prod_elite;
		//产品收益排行，待修改
		$prod_sort	= $this->products_model->search('products',array(),'id asc','5');
		$prod['prod_sort'] = $prod_sort;
		//热门机构，待修改
		$hot_company = $this->products_model->search('company',array(),'id asc','5');
		$prod['hot_company'] = $hot_company;
		exit(json_encode( $hot_company));

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */