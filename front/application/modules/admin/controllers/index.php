<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends AbaseController {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
        $this->load->helper(array('form', 'url'));  
        $this->load->library('form_validation');
	}
	
	public function index()
	{
        //$this->load->model('Company');
        $this->load->library('parser');

        $data = $this->db->get('company')->result_array();
        $data = array(
            'blog_template' => $data,
        );
        /*
        echo '<pre>';
        var_dump($query);
        echo '</pre>';
        foreach($query->result() as $row) {
            var_dump($row->name);
        }
        */

		$this->load->view('index', $data);
	}

    public function product() {
        $this->load->view('product');
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
        
         if( $user_name = $this->input->get_post('username')  ){
            // $passwd = $this->input->get_post('password');
            $result = $this->admin_model->search('user',array('user_name'=>$user_name),null,1);
            header("Location:/admin/index/product"); 
            if( !empty( $result)){
                // $this->_user_logout();exit;
               $this->session->set_userdata($result);
               // redirect('/redbud_admin','refresh');
               header("Location:/admin/index/product");
               return;
            }
         }
        $this->load->view('login');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */