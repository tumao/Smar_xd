<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Store_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database ( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

// 	public function createUserInfo( $data){
		
// 		if (  !isset($data['id'])) {
// 			//this user is exist or not
// 			$result = $this->search('user', array('email'=> $data['email']),null,1);
// 			if( !empty( $result)){
// 				return $this->jsonResponse( array('message'=>'error','result'=>'this user already exist,please log in directly '),400);
// 			}
			
// 			//to add a new data to user
// 			$result = $this->upsert('user',$data);
// 		}elseif( $data['id']){
// 			$id = $data['id'];
// 			unset( $data['id']);
// 			//to edit the user where the id 
// 			$this->updateWhere('user',$data,array('id'=> $id));
// 			return $this->jsonResponse( array('message'=>'success'));
// 		}
// 		return $result;
// 	}

	


}