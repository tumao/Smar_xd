<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

class User_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database ( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	public function _check_user( $email, $passwd){
		$user_data = $this->search('user',array('email'=>$email, 'passwd' => $passwd),null,1);
		unset( $user_data['passwd']);
		if( !empty( $user_data)){
			return $user_data;
		}
		return false;
	}
	


}