<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

	/*用户登陆通过邮箱进行登陆*/
class Daogou_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	

}