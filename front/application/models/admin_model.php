<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

	/*用户登陆通过邮箱进行登陆*/
class Admin_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database ( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	/*验证，用户名，密码是否匹配*/
	public function _check_user( $email, $passwd){
		//md5(密码+密码的第三位到最后)
		$user_data = $this->db->search('user',
			array('email'=>$email, 'passwd' => md5($passwd.substr($passwd, 3))),
			null,1);

		unset( $user_data['passwd']);
		if( !empty( $user_data)){
			return $user_data;
		}
		return false;
	}

	/*修改密码*/
	public function chg_passwd( $email, $npasswd){
		//md5(密码+密码的第三位到最后)
		$id = $this->db->updataWhere('user',
				array( 'passwd' => md5($npasswd.substr($npasswd, 3)) ), 
				array('email' => $email));

		return true;
	}
	
	// 创建用户
	public function create_user( $email, $passwd, $user_name, $privi = 'user'){
		if( $privi == 'user'){
			$privi = USER;
		}else if( $privi == 'admin' ){
			$privi = ADMIN;
		}else if ( $privi == 'super_admin') {
			$privi = SUP_ADMIN;
		}
		$data = array(
			'email'		=> $email,
			'passwd'	=> md5($passwd.substr($passwd, 3)),
			'user_name'	=> $user_name,
			'privilege'	=> $privi
			);
		$result = $this->search('user', $data, null, 1);
		if( !empty( $result)){
			return false;
		}
		$userId = $this->upsert('user', $data);
		return true;
	}

}