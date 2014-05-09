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
		$hot_company = $this->products_model->search('company',array('ishot'=>1),'id asc','10');
		foreach ($hot_company as & $hcp) {
			$hcp['products'] = $this->fetch_prod_by_cid( $hcp['id']);
			$hcp['count'] = $this->count_product( $hcp['id']);
		}
		$prod['hot_company'] = $hot_company;
		$data['prod'] = $prod;
		$this->load->view('index',$data);
	}
	
	public function more_city(){
		$this->load->view('more_citys');
	}

	// public function data(){
	// 	$sort = $this->input->get_post('sort');
	// 	//精选
	// 	$prod = array();
	// 	// $prod_elite = $this->products_model->search('products',array('elite'=>1),'id asc');
	// 	// $prod['prod_elite'] = $prod_elite;
	// 	// //产品收益排行，待修改
	// 	// $prod_sort	= $this->products_model->search('products',array(),'id asc','5');
	// 	// $prod['prod_sort'] = $prod_sort;
	// 	//热门机构，待修改
	// 	$hot_company = $this->products_model->search('company',array(),'id asc','5');
	// 	$prod['hot_company'] = $hot_company;
	// 	exit(json_encode( $hot_company));

	// }
	public function data(){
		if( $this->input->get_post('sort')=='year'){
			$products = $this->products_model->search('products',array(),'duration desc',5);
		}else if( $this->input->get_post('sort')=='zx'){
			$products = $this->products_model->search('products',array('xintuo_type_id'=>1),'id desc',5);
		}else if($this->input->get_post('sort')=='bzjx'){
			$products = $this->products_model->search('products',array(),' desc',5);
		}else if($this->input->get_post('sort')=='fifty'){
			$products = $this->products_model->search('products',array(),'min_sub_amount desc',5);
		}

		foreach ($products as $key => &$val) {
			$company = $this->products_model->search('company',array('id'=>$val['companyid']),null,1);
			$val['company_name'] = isset($company['name']) ? $company['name'] : '';
		}
		exit(json_encode( $products));
		
	}
	public function hot_company(){
		$sort = $this->input->get_post('sort');

		$company = array();
		$hot_company = $this->products_model->search('company',array('id'=>$sort),'id asc',1);
		$hot_company['products'] = $this->fetch_prod_by_cid( $hot_company['id']);
		$hot_company['p_count'] = $this->count_product( $hot_company['id']);
		exit( json_encode( $hot_company));
	}

	public function fetch_prod_by_cid( $cid){
		$products = $this->products_model->search('products',array('companyid'=>$cid),'id asc');
		return $products;
	}
	public function count_product( $cid){
		$products = $this->products_model->search('products',array('companyid'=>$cid),null);
		$count = count( $products);
		return $count;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */