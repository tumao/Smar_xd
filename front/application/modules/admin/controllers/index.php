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
        $this->parser->parse('index', $data);
		//$this->load->view('index');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */