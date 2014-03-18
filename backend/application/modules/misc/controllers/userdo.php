<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Userdo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('list_model');
	}

	public function index(){
		
	}
	public function doComments(){
		$this->input_require('storeId');	
		$this->input_require('tecScore');
		$this->input_require('partScore');
		$this->input_require('serverScore');
		$this->input_require('deviceScore');
		$this->input_require('comments');
		$this->input_require('userId');

		$storeId 		= $this->input->post('storeId');
		$tecScore 		=$this->input->post('tecScore');
		$partScore 		= $this->input->post('partScore');
		$serverScore 	= $this->input->post('serverScore');
		$deviceScore	= $this->input->post('deviceScore');
		$comments 		= $this->input->post('comments');
		$userId 		= $this->input->post('userId');
        $service        = $this->input->post('service');

//		$keepFee 		= $this->input->post('keepFee');
//		$repairFee 		= $this->input->post('repairFee');
//		$meirongFee 	= $this->input->post('meirongFee');
		$miles 			= $this->input->post('miles');

		$createTime = date('Y-md H:i:s',time());

		$array = array(
				'storeId' 	=> $storeId,
				'tecScore'	=> $tecScore,
				'partScore'	=> $partScore,
				'serverScore'	=> $serverScore,
				'deviceScore'	=> $deviceScore,
				'comments'		=> $comments,
				'createTime'	=> $createTime,
				'userId'		=> $userId
			);
//		if( $keepFee){
//			$array['keepFee'] = $keepFee;
//		}
//		if( $repairFee){
//			$array['repairFee'] = $repairFee;
//		}
//		if( $meirongFee ){
//			$array['meirongFee'] = $meirongFee;
//		}
		if( $miles ){
			$array['miles'] = $miles;
		}
        $result = $this->list_model->upsert('comments',$array);
        foreach( $service as $val){
            $this->list_model->upsert('comments_meta',array('commentId'=> $result,'mainItem'=>$val['mainItem'],'subItem'=>$val['subItem'],'pay'=> $val['pay']));
        }
		if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success', 'result'=> $result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}

	}

	public function userLogin(){
		$this->input_require( array( 'or' => array('userName','email')));
		$this->input_require('password');
		$userName 	= $this->input->post('userName');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		$array 		= array(
			'password' => md5($password)
			);
		if( !empty( $email) || $email != false){
			$array['email'] = $email;
		}
		if( !empty($userName) || $userName != false){
			$array['userName'] = $userName;
		}
		$result 	= $this->list_model->search('user',$array,null,1);
		unset($result['weiboUserId']);
		unset($result['weiboUserInfo']);
		unset($result['type']);
		unset($result['password']);
		if ( !empty( $result)) {
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}

	}
	public function recommends(){
		$this->input_require('userId');
		$this->input_require('storeName');
		$this->input_require('address');
		$this->input_require('tel');
		$userId 	= $this->input->post('userId');
		$storeName 	= $this->input->post('storeName');
		$address 	= $this->input->post('address');
		$tel 		= $this->input->post('tel');
		$tecScore 	= $this->input->post('tecScore');
		$partScore 	= $this->input->post('partScore');
		$serverScore = $this->input->post('serverScore');
		$faScore 	= $this->input->post('faScore');
		$reason 	= $this->input->post('reason');
		$array 		= array(
				'userId' 		=> $userId,
				'storeName'		=> $storeName,
				'address'		=> $address,
				'tel'			=> $tel,
				'tecScore'		=> $tecScore,
				'partScore'		=> $partScore,
				'serverScore'	=> $serverScore,
				'faScore'		=> $faScore
				);
		if( isset( $reason)){
			$array['reason'] = $reason;
		}
		$recommendsId = $this->list_model->upsert('recommends',$array);
		if( isset( $recommendsId)){
			$this->jsonResponse( array('message' => 'success','result'=>$recommendsId));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}


	}
	public function addUserLog(){
		$id = $this->input->post('id');
		if( !isset( $id)){
			$this->input_require('date');
			$this->input_require('storeName');
//			$this->input_require('projectName');
//			$this->input_require('subProName');
			$this->input_require('userId');
		}
		

		$createTime 	= $this->input->post('date');
		$storeName 		= $this->input->post('storeName');
//		$projectName 	= $this->input->post('projectName');
//		$subProName 	= $this->input->post('subProName');
		$userId 		= $this->input->post('userId');
		$miles 			= $this->input->post('miles');
//		$fee 			= $this->input->post('fee');
		$note 			= $this->input->post('note');
        $service        = $this->input->post('service');

		$array = array(
				'createTime'		=> $createTime,
				'storeName'			=> $storeName,
//				'projectName'		=> $projectName,
//				'subProName'		=> $subProName,
				'userId'			=> $userId
			);
		if( isset( $miles)){
			$array['miles'] = $miles;
		}
//		if( isset( $fee)){
//			$array['fee'] 	= $fee;
//		}
		if( isset( $note)){
			$array['notes'] = $note;
		}
		if( !$id){
			$userLogId 		= $this->list_model->upsert('user_log',$array);
            foreach( $service as $val){
                $this->list_model->upsert('user_log_meta',array('logId'=>$userLogId,'mainItem'=>$val['mainItem'],'subItem'=>$val['subItem'],'fee'=>$val['fee']));
            }
		}else{
			foreach ( $array as $key=>$val){
				if( $val == null){
					unset( $array[$key]);
				}
			}
			$this->list_model->updateWhere('user_log',$array,array('id'=>$id));
            $this->list_model->delete('user_log_meta',array('logId'=>$id));
            foreach( $service as $val){
                $this->list_model->upsert('user_log_meta',array('logId'=>$id,'mainItem'=>$val['mainItem'],'subItem'=>$val['subItem'],'fee'=>$val['fee']));
            }

			return $this->jsonResponse( array('message'=>'success'));
		}
		if( isset( $userLogId)){
			$this->jsonResponse( array('message'=>'success','result'=>$userLogId));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
	}

}