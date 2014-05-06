<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{

        $params = $this->deal_product_url_params();

        /*
        echo '<pre>';
        var_dump($params);
        var_dump(implode('-', $params));
        */
        //$str_params = implode('-', $params);

        $limit = 15;
        $condition = array(
            'isdel' => 0
        );

        $count_result = $this->products_model->search('products', $condition, 'id desc');
        $count = count($count_result);
        $pagenum = ceil($count/$limit);

        if(!intval($params[11]) || $params[11] > $pagenum)
            redirect('404_override');

        $result = $this->products_model->search('products', $condition,'id desc', $limit, '', $params[11]);
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
        $data['pagenum'] = $pagenum;
        $data['params'] = $params;
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

    /**
     * @return array
     */
    private function deal_product_url_params() {
        /**
         * $params index:
         * 1: 起始资金.
         * 2: 产品期限.
         * 3: 预期收益.
         * 4: 收益分配.
         * 5: 抵(质)押率.
         * 6: 投资方向.
         * 7: 留空
         * 8: 留空
         * 9: 留空
         * 10: 留空
         * 11： page.
         **/
        $params = explode('-', uri_string());
        if(!isset($params[1])) {
            $params[1] = 0;
        }
        if(!isset($params[2])) {
            $params[2] = 0;
        }
        if(!isset($params[3])) {
            $params[3] = 0;
        }
        if(!isset($params[4])) {
            $params[4] = 0;
        }
        if(!isset($params[5])) {
            $params[5] = 0;
        }
        if(!isset($params[6])) {
            $params[6] = 0;
        }
        if(!isset($params[7])) {
            $params[7] = 0;
        }
        if(!isset($params[8])) {
            $params[8] = 0;
        }
        if(!isset($params[9])) {
            $params[9] = 0;
        }
        if(!isset($params[10])) {
            $params[10] = 0;
        }
        if(!isset($params[11])) {
            $params[11] = 1;
        }

        return $params;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */