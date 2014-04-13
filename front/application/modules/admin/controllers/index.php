<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends AbaseController {
	public function __construct(){
		parent::__construct();
		// $this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));  
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        /*
        $this->load->library('parser');

        $data = $this->db->get('company')->result_array();
        $data = array(
            'blog_template' => $data,
        );

		$this->load->view('index', $data);
        */
        $this->load->view('index');
	}

    public function product() {
        $this->load->model("products_model");
        $condition = array(
                'isdel' => 0
            );
        $result = $this->products_model->search('products', $condition,'id desc');
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
        $data['result'] = $result;
        $this->load->view('product',$data);
    }

    public function upsert_product() {
        $this->load->model('products_model');
        $pid = $this->input->get_post('pid');
        // $product = array();
        if( $pid ){
            $product = $this->products_model->search('products',array('id' => $pid), null,1);
        }else{
            $product = array(
                    'id'  =>'',
                    'short_name' =>'',
                    'full_name'  =>'',
                    // 'sell_date'  =>'',
                    'tip'  =>'',
                    // // 'companyid'  =>'',
                    'circulation'  =>'',
                    'duration'  =>'',
                    'income_rate'  =>'',
                    'min_sub_amount'  =>'',
                    // // 'interest_' distribution_id,
                    // // 'invest_orientation_id'  =>'',
                    // // 'xintuo_type_id'  =>'',
                    'income_explain'  =>'',
                    'pledge_object'  =>'',
                    'pledge_rate'  =>'',
                    'productinfo'  =>'',
                    'purpose_info'  =>'',
                    'risk_control_info'  =>'',
                    'payment_info'  =>'',
                    'guarantor_info'  =>'',
                    'financingpart_info'  =>'',
                    'depositary_info'  =>'',
                    'more_info'  =>''
                );
        }
        

        $data['product'] = $product;
        $this->load->view("upsertproduct", $data);
    }
    public function save_product(){
        $this->load->model('products_model');
        // $data = $this->input->get_post('');
        if( $_REQUEST['id'] == ''){
            unset( $_REQUEST['id']);
        }
        $data = $_REQUEST;
        $id = $this->products_model->upsert('products',$data);
        return $id;
    }
    public function company() {
        $this->load->view('company');
    }
    public function course() {
        $this->load->view('course');
    }
    public function daogou() {
        $this->load->view('daogou');
    }
    public function zixun() {
        $this->load->view('zixun');
    }
    public function contactus() {
        $this->load->view('contactus');
    }
    public function editaccount() {
        $this->load->view('editaccount');
    }

    public function login(){
        $this->load->model('admin_model');
        if( $this->session->userdata('user_name')){
            // header("Location:/admin/index/index");
            redirect('/admin/index/index');
        }
        if( $user_name = $this->input->get_post('username')  ){
            $passwd = $this->input->get_post('password');
            $result = $this->admin_model->search('user',array('user_name'=>$user_name, 'passwd' => $passwd), null, 1);
            if( !empty( $result)){
               $this->session->set_userdata($result);
               echo 1;
               exit;
            }
         }
        $this->load->view('login');
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
    private function company_list(){
        $this->load->model('products_model');
        $company = $this->products_model->search('company', array('id <> ' => ''),'id desc');
        return $company;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */