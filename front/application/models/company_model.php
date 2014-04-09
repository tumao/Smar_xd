<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Company_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database ( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	/*公司列表*/
	public function comp_list(){

	}

	/*添加*/
	public function add_comp(){

	}

	/*修改公司*/
	public function edit_comp(){

	}

	/*删除公司*/
	public function del_comp(){

	}


}