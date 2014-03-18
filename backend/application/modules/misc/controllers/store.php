<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Store extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('store_model');
	}

	public function index(){
		
	}
	//this function used to add and edit store data
	public function addStore(){
		
		//if id ,then edit the data
		$id = $this->input->post('id');
		if( !$id){
			// $this->input_require('editor');//there are three type 1.user 2.saler 3.storeHost
			$this->input_require('storeName');
			$this->input_require('address');
			$this->input_require(array('or'=>array('tel1','tel2','tel3')));
		}
		$this->input_require('editByUid');
		// $editor = $this->input->post('editor');
		$editByUid = $this->input->post('editByUid');
		$storeName = $this->input->post('storeName');
		$address = $this->input->post('address');

		$mainItem = $this->input->post('mainItem');	
		$lon = $this->input->post('lon');
		$lat = $this->input->post('lat');
		$tel1 = $this->input->post('tel1');
		$tel2 = $this->input->post('tel2');
		$tel3 = $this->input->post('tel3');
		$workers = $this->input->post('workers'); //how many peoples are there in the store
		$area = $this->input->post('area');
		$equipment = $this->input->post('equipment');
		$workStations = $this->input->post('workStations');  //gong wei
		$mainParts = $this->input->post('mainParts');
		$selfImg = $this->input->post('selfImg');
		$selfContents = $this->input->post('selfContents');
		$openTime = $this->input->post('openTime');
		$createTime = date('Y-m-d H:i:s',time());
		$status = 'pending';
		$array = array(
				// 'editor'		=> $editor,
				'editByUid'		=> $editByUid,
				'storeName'		=> $storeName,
				'address'		=> $address,
				'createTime'	=> $createTime
			);
		if( $mainItem != false){
			$array['mainItem'] = $mainItem;
		}
		if( $lon != false){
			$array['lon'] = $lon;
		}
		if( $lat != false){
			$array['lat'] = $lat;
		}
		if( $tel1 != false){
			$array['tel1'] = $tel1;
		}
		if( $tel2 != false){
			$array['tel2'] = $tel2;
		}
		if( $tel3 != false){
			$array['tel3'] = $tel3;
		}
		if( $workers != false){
			$array['workers'] = $workers;
		}
		if( $area != false){
			$array['area'] = $area;
		}
		if( $equipment != false){
			$array['equipment'] = $equipment;
		}
		if( $workStations != false){
			$array['workStations'] = $workStations;
		}
		if( $mainParts != false){
			$array['mainParts'] = $mainParts;
		}
		if( $selfImg != false){
			$array['selfImg'] = $selfImg;
		}
		if( $selfContents != false){
			$array['selfContents'] = $selfContents;
		}
		if( $openTime != false){
			$array['openTime'] = $openTime;
		}
		if( $status != false){
			$array['status'] = $status;
		}


		if( !$id){
			//add a new data
			$result = $this->store_model->upsert('store',$array);
		}else{
			//edit the old data
			$userStore = $this->store_model->search('store',array('id'=>$id,'editByUid'=>$editByUid),null,1);
			if( empty( $userStore)){
				return $this->jsonResponse( array('message'=>'error','result'=>'this user can not edit this store'),400);
			}
			foreach ( $array as $key => $val){
				if( $val == null){
					unset( $array[$key]);
				}
			}
			$this->store_model->updateWhere('store',$array,array('id'=>$id,'editByUid'=>$editByUid));
			return $this->jsonResponse( array('message'=>'success'));
		}
		
		if( $result ){
			$this->jsonResponse(array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse(array('message'=>'error'),400);
		}

	}

	public function createUserInfo(){
		$id = $this->input->post('id');
		if( !$id){
			$this->input_require('userName');
			$this->input_require('password');
			$this->input_require('email');
		}
		
		$userName = $this->input->post('userName');
		$tel = $this->input->post('tel');
		$carModel = $this->input->post('carModel');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$createTime = date('Y-m-d H:i:s',time());
		$type = $this->input->post('type'); 					//1.admin 2.saler 3.user

		$array = array(
				'userName' 	=> $userName,
				'tel'		=> $tel,
				'email'		=> $email,
				'password'	=> md5( $password),
				'createTime'=> $createTime,
			);
		if( $carModel ){
			$array['carModel'] = $carModel;
		}
		if( !$type){
			$type = 'user';
			$array['type'] = $type;
		}else{
			$array['type'] = $type;
		}

		if (  !$id) {
			//this user is exist or not
			$result = $this->store_model->search('user', array('email'=> $array['email']),null,1);
			if( !empty( $result)){
				return $this->jsonResponse( array('message'=>'error','result'=>'this user already exist,please log in directly'),400);
			}
				
			//to add a new data to user
			$result = $this->store_model->upsert('user',$array);
		}elseif( $id){
			unset( $array['email']);
			foreach ( $array as $key=>$val){
				if( $val == null){
					unset( $array[$key]);
				}
			}
			//to edit the user where the id 
			 $this->store_model->updateWhere('user',$array,array('id'=> $id));
			return $this->jsonResponse( array('message'=>'success'));
		}
		

		if( $result){
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
	}


}