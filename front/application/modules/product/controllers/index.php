<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{
        $this->load->model("products_model");
        $condition = array(
            'isdel' => 0
        );
        $result = $this->products_model->search('products', $condition,'id desc');
        $count = count($result);
        foreach ($result as & $val) {
            if( $val['xintuo_type_id']){
                $val['xintuo_type_name'] = $this->xt_type($val['xintuo_type_id']);
            }else{
                $val['xintuo_type_name'] = '';
            }
            if( $val['companyid']){
                $val['company_name'] = $this->get_company_name($val['companyid']);
            }else{
                $val['company_name'] = '';
            }
        }
        $data['products'] = $result;
        $data['count'] = $count;
		$this->load->view('index', $data);
	}
	public function main(){
		$this->load->view('index');
	}

    public function productdetail() {
    	$pid = $this->input->get_post('pid');
    	$prod_detail = $this->products_model->search('products',array('id'=> $pid),null,1);
    	$data['prod_detail'] = $prod_detail;
        $this->load->view('productdetail',$data);
    }

    //信托类型Id获取信托类型名字
    private function xt_type( $id){
        $this->load->model('products_model');
        $type = $this->products_model->search('xintuo_type',array( 'id' => $id),null, 1);
        return $type['name'];
    }

    private function get_company_name( $id){
        $this->load->model('products_model');
        $company = $this->products_model->search('company',array('id'=>$id),null,1);
        return $company['name'];
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */