<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Sidebar {
	protected $CI;
	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->model('company_model');
	}
    // public function list()
    // {
    	// $result = $this->CI->company_model->search('company',array('ishot'=>1),null);
    	// var_dump( $result);
    // }

    public function output(){
    	$result = $this->CI->company_model->search('company',array('ishot'=>'1'),null );
    	return $result;
    }
}