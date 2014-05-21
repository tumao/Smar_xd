<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends BaseController {
	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
        $this->load->model("company_model");
        $condition = array(
            'isdel' => 0
        );
        $companylist = $this->company_model->search('company', $condition,'first_character asc');
        $formatted_companylist = array();
        $letter_array = array();

        foreach($companylist as $key => $company) {
            //if(array_key_exists( $company['first_character'], $formatted_companylist)) {
            $formatted_companylist[$company['first_character']][] = $company;
        }

        /*
        foreach($companylist as $key => $company) {
            if(!array_search($company['first_character'], $letter_array)) {
                array_push($letter_array, $company['first_character']);
            }
        }
        echo '<pre>';
        var_dump($formatted_companylist);exit;
        */
        $data['formatted_companylist'] = $formatted_companylist;
		$this->load->view('index', $data);
	}

    public function detail() {
        $company_id = $_GET['cid'];
        $this->load->model("company_model");
        $condition = array(
            'isdel' => 0,
            'id' => $company_id
        );

        $company = $this->company_model->search('company', $condition);

        if(count($company) == 0) {
            redirect('404_override');
        } else {
            $data['company'] = $company[0];
            $this->load->view('detail', $data);
        }

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */