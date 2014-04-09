<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */