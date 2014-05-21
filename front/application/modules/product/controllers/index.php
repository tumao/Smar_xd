<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{

        $params = $this->deal_product_url_params();

        $limit = 15;
        $condition = array(
            'products.isdel' => 0
        );

        switch($params[1]) {
            case 1:
                $condition['products.min_sub_amount <']=500000;
                break;
            case 2:
                $condition['products.min_sub_amount <'] = 1000000;
                $condition['products.min_sub_amount >='] = 500000;
                break;
            case 3:
                $condition['products.min_sub_amount <'] = 3000000;
                $condition['products.min_sub_amount >='] = 1000000;
                break;
            case 4:
                $condition['products.min_sub_amount >='] = 3000000;
                break;
            default:
                break;
        }

        switch($params[2]) {
            case 1:
                $condition['products.duration <'] = 12;
                break;
            case 2:
                $condition['products.duration <'] = 24;
                $condition['products.duration >='] = 12;
                break;
            case 3:
                $condition['products.duration <'] = 36;
                $condition['products.duration >='] = 24;
                break;
            case 4:
                $condition['products.duration >='] = 36;
                break;
            default:
                break;
        }

        switch($params[3]) {
            case 1:
                $condition['products.income_rate <'] = 6;
                break;
            case 2:
                $condition['products.income_rate <'] = 8;
                $condition['products.income_rate >='] = 6;
                break;
            case 3:
                $condition['products.income_rate <'] = 10;
                $condition['products.income_rate >='] = 8;
                break;
            case 4:
                $condition['products.income_rate >='] = 10;
                break;
            default:
                break;
        }

        switch($params[4]) {
            case 1:
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            case 5:
                break;
            default:
                break;
        }

        switch($params[5]) {
            case 1:
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            default:
                break;
        }

        switch($params[6]) {
            case 1:
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                break;
            default:
                break;
        }

        $count_result = $this->products_model->search('products', $condition, 'id desc');
        $count = count($count_result);
        $pagenum = ceil($count/$limit);

        $this->db->select('products.*, iint.name as iint_name, company.name as company_name'.
         ', investorientation.name as investorientation_name'.
        ', xintuo_type.name as xintuo_type_name');
        $this->db->from('products');
        $this->db->join('iint', 'iint.id = products.interest_distribution_id', 'left');
        $this->db->join('company', 'company.id = products.companyid', 'left');
        $this->db->join('investorientation', 'investorientation.id = products.invest_orientation_id', 'left');
        $this->db->join('xintuo_type', 'xintuo_type.id = products.xintuo_type_id', 'left');

        $this->db->order_by('products.id', 'desc');
        $this->db->where($condition);
        $query = $this->db->get('', $limit, $limit * ($params[11]-1));
        $result = $query->result_array();


        $data['products'] = $result;
        $data['count'] = $count;
        $data['pagenum'] = $pagenum;
        $data['params'] = $params;
        $data['limit'] = $limit;
		$this->load->view('index', $data);
	}
	public function main(){
		$this->load->view('index');
	}

    public function productdetail() {
        $params = explode('/', uri_string());
        if(is_numeric($params[1])) {
            $condition = array(
                'products.id' => $params[1]
            );
        } else {
            redirect('404_override');
        }


        $this->db->select('products.*, iint.name as iint_name, company.name as company_name'.
            ', investorientation.name as investorientation_name'.
            ', xintuo_type.name as xintuo_type_name');
        $this->db->from('products');
        $this->db->join('iint', 'iint.id = products.interest_distribution_id', 'left');
        $this->db->join('company', 'company.id = products.companyid', 'left');
        $this->db->join('investorientation', 'investorientation.id = products.invest_orientation_id', 'left');
        $this->db->join('xintuo_type', 'xintuo_type.id = products.xintuo_type_id', 'left');

        $this->db->where($condition);
        $query = $this->db->get();
        $result = $query->row_array();

    	$data['product'] = $result;
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