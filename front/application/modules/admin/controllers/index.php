<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends AbaseController {
	public function __construct(){
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
	}
	
	public function index()
	{
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
        $company_group = $this->company_list();
        if( $pid ){
            $product = $this->products_model->search('products',array('id' => $pid), null,1);
            $company = $this->company_list( $product['companyid']);
            $product['company_name'] = $company[0]['name'];
            $product['company_group'] = $company_group;
            if( $product['interest_distribution_id'] != ''){
                $product['interest_distribution_name'] = $this->get_iint_name($product['interest_distribution_id']);
            }else{
                $product['interest_distribution_name'] = '';
            }
            if( $product['invest_orientation_id']){
                $product['invest_name'] = $this->get_invest_name( $product['invest_orientation_id']);
            }else{
                $product['invest_name'] = '';
            }
            if( $product['xintuo_type_id']){
                $product['xintuo_name'] = $this->get_xt_name( $product['xintuo_type_id']);
            }else{
                $product['xintuo_name'] = '';
            }
        }else{
            $product = array(
                    'id'  =>'',
                    'short_name' =>'',
                    'full_name'  =>'',
                    'sell_date'  =>'',
                    'tip'  =>'',
                    'company_name'  => '',
                    'company_group'  => $company_group,
                    'circulation'  =>'',
                    'duration'  =>'',
                    'income_rate'  =>'',
                    'min_sub_amount'  =>'',
                    // // 'interest_distribution_id,
                    'interest_distribution_name' =>'',
                    // // 'invest_orientation_id'  =>'',
                    'invest_name'=>'',
                    // // 'xintuo_type_id'  =>'',
                    'xintuo_name'=>'',
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
        if( $data['company_name']){
            $data['companyid'] = $this->get_company_id( $data['company_name']);
            unset( $data['company_name']);
        }
        //???????
        if( $data['interest_distribution_name']){
            $data['interest_distribution_id'] = $this->get_iint_id( $data['interest_distribution_name']);
            unset( $data['interest_distribution_name']);
        }
        if( $data['invest_name']){
            $data['invest_orientation_id'] = $this->get_invest_id( $data['invest_name']);
            unset( $data['invest_name']);
        }
        if( $data['xintuo_name']){
            $data['xintuo_type_id'] =  $this->get_xt_id( $data['xintuo_name']);
            unset( $data['xintuo_name']);
        }
        $id = $this->products_model->upsert('products',$data);
        return $id;
    }
    public function company() {
        $this->output->cache(1/60);
        $this->load->model("company_model");
        $condition = array(
            'isdel' => 0
        );
        $result = $this->company_model->search('company', $condition,'id desc');
        $data['result'] = $result;

        // echo '<pre>';
        // var_dump($result);
        // echo '</pre>';
        $this->load->view('company', $data);
    }
    public function upsertcompany() {
        $pid = $this->input->get_post('pid');
        if( $pid ){
            $this->load->model('company_model');
            $company = $this->company_model->search('company',array('id' => $pid), null,1);
            $company['register_time'] = date('Y-m-d', strtotime($company['register_time']));
        }else{
            $company = array(
                'id'  =>'',
                'name' =>'',
                'introduce' => '',
                'register_capital' => '',
                'full_name'  =>'',
                'en_name'  =>'',
                'chairman'  =>'',
                'manage_director'  =>'',
                'is_listed'  =>'',
                'register_time'  =>'',
                'area'  =>'',
                'major_stockholder'  =>'',
                'address'  =>'',
                'isdel'  =>''
            );
        }


        $data['company'] = $company;
        $this->load->view('upsertcompany', $data);
    }

    public function save_company() {
        $this->load->model('company_model');
        $this->load->library('pinyin_mini');

        $company = $_REQUEST['company'];
        if($company['id'] == '') {
            unset($company['id']);
        }
        $first_character = $this->pinyin_mini->to_first($company['name']);
        if($first_character != false) {
            $company['first_character'] = $first_character;
        }
        $id = $this->company_model->upsert('company',$company);
        redirect("/redbud_admin/company");
    }

    public function del_company() {
        $this->load->model('company_model');
        $id = $_POST['id'];
        if($id == '') {
            return;
        } else {
            $this->company_model->delete('company', array('id' => $id));
        }
    }

    public function course() {
        $this->load->model('course_model');
        $result = $this->course_model->search('course',array('id <> ' => ''),'id asc');
        $data['result'] = $result;
        $this->load->view('course',$data);
    }
    //cid 获得文章详情
    public function upsert_course(){
        $this->load->model('course_model');
        $id = $this->input->get_post('cid');
        if( $id){
            $result = $this->course_model->search('course',array('id' => $id),null,1);
        }else{
            $result = array(
                    'title' => '',
                    'id'    => '',
                    'content'   => ''
                );
        }
        
        $data['result'] = $result;
        $this->load->view('upsertcourse', $data);
    }
    public function save_course(){
        $data = $_REQUEST;
        if( !$_REQUEST['id']){
            unset( $_REQUEST['id']);
        }
        $data = $_REQUEST;
        $data['ctime'] = date('Y-m-d H:i:s',time());
        $this->load->model('course_model');
        $id = $this->course_model->upsert('course',$data);
        return $id;
    }
    public function daogou() {
        $this->load->model('daogou_model');
        $result = $this->daogou_model->search('daogou',array('id <>'=> ''),'id asc');

        $data['result'] = $result;
        $this->load->view('daogou',$data);
    }
    public function upsert_daogou(){
        $this->load->model('daogou_model');
        $id = $this->input->get_post('cid');
        if( $id){
            $result = $this->daogou_model->search('daogou',array('id' => $id),null,1);
        }else{
            $result = array(
                    'title' => '',
                    'id'    => '',
                    'content'   => ''
                );
        }
        $data['result'] = $result;
        $this->load->view('upsertdaogou', $data);
    }
    public function save_daogou(){
        $this->load->model('daogou_model');
        $data = $_REQUEST;
        if( !$data['id']){
            unset( $data['id']);
        }
        // var_dump( $data);
        $data['ctime'] = date('Y-m-d H:i:s',time());
        $id = $this->daogou_model->upsert('daogou',$data);
        return $id;
    }
    public function zixun() {
        $this->load->model('daogou_model');
        $result = $this->daogou_model->search('zixun',array( 'id <> '=>''),'id asc');

        $data['result'] = $result;
        $this->load->view('zixun',$data);
    }
    public function upsert_zixun(){

        $this->load->model('daogou_model');
        $id = $this->input->get_post('cid');
        if( $id ){
            $result = $this->daogou_model->search('zixun',array('id'=>$id),null,1);
        }else{
            $result = array(
                    'title'     => '',
                    'content'   => '',
                    'id'        => '',
                    'ctime'     =>  ''
                );
        }
        $data['result'] = $result;
        $this->load->view('upsertzixun',$data);
    }
    public function save_zixun(){
        $this->load->model('daogou_model');
        $data = $_REQUEST;
        if( !$data['id']){
            unset( $data['id']);
        }
        $data['ctime'] = date('Y-m-d H:i:s',time());
        $id = $this->daogou_model->upsert('zixun',$data);
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
    private function company_list( $id = null){
        $this->load->model('products_model');
        if( $id ){                              //获取某个公司的信息
            $condition = array( 'id' => $id);
        }else{                                  //获取所有公司的信息
            $condition = array('id <> ' => '');
        }
        $company = $this->products_model->search('company', array('id <> ' => ''),'id desc');
        return $company;
    }
    private function get_company_id( $company_name){
        $this->load->model('products_model');
        $company = $this->products_model->search('commpany',array('name'=>$company_name),null,1);
        return $company['id'];
    }
    private function get_iint_name( $iint_id ){
        $this->load->model('products_model');
        $condition = array(
                'id' => $iint_id
            );
        $iint = $this->products_model->search('iint',$condition,null,1);
        if( empty($iint)){
            $iint['name'] = '';
        }
        return $iint['name'];
    }
    private function get_iint_id( $iint_name){
        $this->load->model('products_model');
        $iint = $this->products_model->search('iint',array('name'=> $iint_name),null,1);
        if( empty( $iint)){     //如果搜索的没有则添加
            $id = $this->products_model->upsert('iint',array('name'=>$iint_name));
            $iint['id'] = $id;
        }
        return $iint['id'];
    }
    private function get_invest_name( $inv_id){
        $this->load->model('products_model');
        $inv = $this->products_model->search('investorientation',array('id' => $inv_id),null,1);
        return $inv['name'];
    }
    private function get_invest_id( $inv_name){
        $this->load->model('products_model');
        $inv = $this->products_model->search('investorientation',array('name'=> $inv_name),null,1);
        if( empty( $inv)){          //如果搜索的没有则添加
            $id = $this->products_model->upsert('investorientation',array('name'=>$inv_name));
            $inv['id'] = $id;
        }
        return $inv['id'];
    }
    private function get_xt_name( $xt_id){
        $this->load->model('products_model');
        $xt = $this->products_model->search('xintuo_type',array('id'=>$xt_id),null,1);
        return $xt['name'];
    }
    private function get_xt_id( $xt_name){
        $this->load->model('products_model');
        $xt = $this->products_model->search('xintuo_type',array('name'=>$xt_name),null,1);
        if( empty( $xt)){
            $id = $this->products_model->upsert('xintuo_type',array('name'=> $xt_name));
            $xt['id'] = $id;
        }
        return $xt['id'];
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */