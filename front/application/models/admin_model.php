<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

	/*用户登陆通过邮箱进行登陆*/
class Admin_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	/*验证，用户名，密码是否匹配*/
	public function _check_user( $user_name, $passwd){
		//md5(密码+密码的第三位到最后)
		$user_data = $this->search('user',array('user_name'=>$user_name, 'passwd' => md5($passwd.substr($passwd, 3))),	null,1);
		unset( $user_data['passwd']);
		if( !empty( $user_data)){
			return $user_data;
		}
		return false;
	}

	/*修改密码*/
	public function chg_passwd( $uid, $npasswd, $opasswd){
		$r = $this->search('user',array('passwd'=>md5($opasswd.substr($opasswd, 3))),null,1);
		if( empty( $r)){
			return false;
		}
		//md5(密码+密码的第三位到最后)
		$this->updateWhere('user',
				array( 'passwd' => md5($npasswd.substr($npasswd, 3)) ), 
				array('id' => $uid));
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

	public function user_list(){
		$condition = array();
		$users = $this->search('user',array(),null);
		return $users;
	}

}