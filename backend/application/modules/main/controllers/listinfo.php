<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Listinfo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('list_model');
	}

	public function index(){
		
	}
	//select name of main menu
	public function getMainMenuNameById(){
		$mainMenuId = $this->input->get('mainMenuId');
		if(  $mainMenuId){
			$array = array( 'id' =>$mainMenuId);
		}else{
			//select all of the main menu name
			$array = array('id <> '=> '');
		}

		$result = $this->list_model->search('main_menu',$array,null);
		if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
		
	}
	public function mainMenuList(){
		$result = $this->list_model->search('main_menu',array());
		$this->jsonResponse( array('message'=>'success','result'=>$result));
	}
	//select the sub menu name  main menu id
	public function getSubMenuNameByMainId(){
		$this->input_require('mainMenuId');
		$mainMenuId = (int)$this->input->get('mainMenuId');
		$result = $this->list_model->search('sub_menu',array('mainMenuId'=>$mainMenuId),null);
		if( !empty( $result)){
			$this->jsonResponse(array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse(array('messge'=>'error'),400);
		}
		
	}
	//select the menu list by the sub id
	public function getMenuListBySubId(){
		$this->input_require('subMenuId');
		$subMenuId 	= (int)$this->input->get('subMenuId');
		$result 	= $this->list_model->search('menu_list',array('subMenuId'=>$subMenuId),null);
		if( !empty($result)){
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
		
	}
	//select the renzheng of the store
	public function getStoreMarkByStoreId(){
		$this->input_require('storeId');
		$storeId 	= $this->input->get('storeId');
		$result 	= $this->list_model->search('store_mark',array('storeId'=>$storeId),null,1);
		if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success','result'=> $result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
	}
	public function stroeInfoByStoreId(){
		$this->input_require('storeId');
		$storeId 	= $this->input->get('storeId');
		$result 	= $this->list_model->search('store',array('id'=>$storeId),null,1);
		$result['score'] 	= $this->getAverageScore( $result['id']);
		$result['mark'] 	= $this->getStoreMark( $result['id']);
		if( !empty( $result)){
			$this->jsonResponse(array('message'=>'success','result'=> $result));
		}else{
			$this->jsonResponse( array('message'=>'error'),400);
		}
	}
	
	//user collect store
	// public function addCollect(){
	// 	$this->input_require('userId');
	// 	$this->input_require('storeId');
	// 	$userId = $this->input->get('userId');
	// 	// $storeId = $this->input->get('storeId');
	// 	$array = array(
	// 		'userId'	=> $userId,
	// 		'storeId'	=> $storeId,
	// 		'date'		=> date('Y-m-d H:i:s',time());
	// 		);
	// 	$collectId = $this->list_model->upsert('collect',$array);
	// 	$this->jsonResponse( array('message'=>'success','result'=>$collectId));
	// }

	// //list user's store
	// public function getUserCollect(){
	// 	$this->input_require('userId');
	// 	$userId = $this->input->get('userId')
	// 	$sql = 'SELECT * FROM `store` LEFT JOIN `collect` ON `store`.`id`=`colect`.`storeId` where `collect`.`userId`='.$userId;
	// 	$result = $this->db->query( $sql);
	// 	if( !empty( $result)){
	// 		$this->jsonResponse( array('message' => 'success','result'=>$result));
	// 	}else{
	// 		$this->jsonResponse( array('message' => 'error'),400);
	// 	}

	// }

	// add user log
	public function addUserLog(){
		$id = $this->input->get('id');
		if( !isset( $id)){
			$this->input_require('storeName');
			$this->input_require('userId');
		}

		$userId = $this->input->get('userId');
		$storeName = $this->input->get('storeName');
		$miles = $this->input->get('miles');
		$projectName = $this->input->get('projectName');
		$subProName = $this->input->get('subProName');
		$fee = $this->input->get('fee');
		$notes = $this->input->get('notes');

		$array = array(
				'storeName'		=> $storeName,
				'userId'		=> $userId,
				'createTime'	=> date('Y-m-d H:i:s',time())
			);

		if( isset( $miles)){
			$array['miles'] = $miles;
		}
		if( isset( $projectName)){
			$array['projectName'] = $projectName;
		}
		if( isset( $subProName)){
			$array['subProName'] = $subProName;
		}
		if( isset( $fee)){
			$array['fee'] = $fee;
		}
		if( isset( $notes)){
			$array['notes'] = $notes;
		}

		if( !isset( $id)){
			$result = $this->list_model->upsert('user_log',$array);
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->list_model->updateWhere('user_log',$array,array('id'=>$id));
			$this->jsonResponse( array('message'=>'success'));
		}
		
	}
	public function getUserLogByUserId(){
		$this->input_require('userId');
		$userId = $this->input->get('userId');
		$result = $this->list_model->search('user_log',array('userId'=> $userId),null);
        foreach( $result as &$val){
            $val['item'] = $this->getLogMetaById( $val['id']);
            unset($val['projectName']);
            unset($val['subProName']);
            unset($val['fee']);
        }
		if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success','result' => $result));
		}else{
			$this->jsonResponse( array('message'=>'error','result'=>'no user log'),400);
		}
		
	}
    private function getLogMetaById( $logId){
        $result = $this->list_model->search('user_log_meta',array('logId'=>$logId));
        foreach ($result as & $value) {
        	unset($value['logId']);
        }
        return $result;
    }
	// jingying fanwei
	public function getManage(){
		$this->input_require('storeId');
		$storeId = $this->input->get('storeId');

		$result = $this->list_model->search('manage',array('storeId'=>$storeId),null);
		// if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success','result'=>$result));	
		// }else{
		// 	$this->jsonResponse( array('message'=>'error','result'=>'result null'),400);
		// }
		
	}
	public function getCommentsList(){
		$this->input_require('storeId');
		
		$storeId = $this->input->get('storeId');
		
		$totalTecScore = '';
		$totalPartScore = '';
		$totalServerScore = '';
		$totalDeviceScore = '';
		$result = $this->list_model->search('comments',array('storeId'=>$storeId));
		
		
		if( !empty( $result)){
			$total = count( $result);
			foreach ($result as $val){
				$totalTecScore =  $totalTecScore+ $val['tecScore'];
				$totalPartScore = $totalPartScore + $val['partScore'];
				$totalServerScore = $totalServerScore + $val['serverScore'];
				$totalDeviceScore = $totalDeviceScore + $val['deviceScore'];
				$averageScore = ( $totalDeviceScore + $totalPartScore + $totalServerScore + $totalTecScore )/($total * 4);
				$comments = $val['comments'];
			}
			$average = array(
					'aveTecScore'		=> intval($totalTecScore/$total),
					'avePartScore'		=> $totalPartScore/$total,
					'aveServerScore'	=> $totalServerScore/$total,
					'aveDeviceScore'		=> $totalDeviceScore/$total,
					'averageScore'		=> intval( $averageScore),
					'total'				=> $total,
//					'comments'			=> $comments
			);
			$this->jsonResponse( array('message'=>'success','averageList'=>$average,'list'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error','result' => 'no result'),400);
		}
	}
	
	
	private function getAverageScore($storeId){
		$result = $this->list_model->search('comments',array('storeId'=>$storeId),null);
		
		$totalTecScore ='';
		$totalPartScore = '';
		$totalServerScore = '';
		$totalDeviceScore = '';
		$averageScore = '';
		$total = 1;
		
		if( !empty( $result)){
			$total = count( $result);
			foreach( $result as $val){
				$totalTecScore =  $totalTecScore+ $val['tecScore'];
				$totalPartScore = $totalPartScore + $val['partScore'];
				$totalServerScore = $totalServerScore + $val['serverScore'];
				$totalDeviceScore = $totalDeviceScore + $val['deviceScore'];
			}
			$averageScore = ( $totalDeviceScore + $totalPartScore + $totalServerScore + $totalTecScore )/($total * 4);
		}
		$average = array(
				'aveTecScore'		=> intval($totalTecScore/$total),
				'avePartScore'		=> intval($totalPartScore/$total),
				'aveServerScore'	=> intval($totalServerScore/$total),
				'aveDeviceScore'	=> intval($totalDeviceScore/$total),
				'averageScore'		=> intval( $averageScore),
				'total'				=> $total,
		);
		return $average;
	}
	
	public function getCollectList(){
		$this->input_require('userId');
		$limit = $this->input->get("limit");
		
		$userId = $this->input->get('userId');
		
		if (empty($limit)) {
			$limit = 20;
		}
		$start = $this->input->get("start");
		$page = $this->input->get("page");
		if (!empty($page)) {
			$start = $page * $limit;
		}
		
		$result = $this->list_model->search('collect',array('userId'=>$userId),null);
		if( !empty( $result)){
			foreach( $result as $key => $val){
				$sql = "SELECT * FROM `store` LEFT JOIN `collect` ON `store`.`id`= `collect`.`storeId` WHERE `collect`.`status`='1' AND `store`.`id` = ? limit ?,?";
				$store = $this->list_model->query( $sql,array( $val['storeId'],$start,$limit));
				$result[$key]['store'] = $store['0'];
				$average = $this->getAverageScore( $val['storeId']);
				$result[$key]['score'] = $average['averageScore'] ? $average['aveDeviceScore']:'5';//if no coments then 5 full score
				unset( $result[$key]['editor']);
				unset( $result['status']);
			}
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array( 'message'=>'error','result'=>'no collect'),400);
		}
	}
	public function getRecommendsList(){
		$this->input_require('userId');
		
		$userId = $this->input->get('userId');
		
		$start = $this->input->get('start');
		$limit = $this->input->get('limit');
		$page = $this->input->get('page');
		
		if( empty( $limit)){
			$limit = 20;
		}
		
		if( !empty( $page)){
			$start = $limit * $page;
		}
		
		$result = $this->list_model->search('recommends',array('userId'=>$userId),'desc',$limit,$start,$page);
		if( !empty( $result)){
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error','result'=>'no recommends'),400);
		}
		
	}
	/*
	 * store list 
	 */
	public function getStoreList(){
		$this->input_require('title');
		$start 	= $this->input->get('start');
		$limit 	= $this->input->get('limit');
		$page 	= $this->input->get('page');		
		$title 	= $this->input->get('title');
		$lon	= $this->input->get('lon');
		$lat	= $this->input->get('lat');
		$order 	= $this->input->get('order');
		$distance	= $this->input->get('distance');
		$distance	= intval( $distance);
		if( empty($limit)){
			$limit = 20;
		}
		if( !empty( $page)){
			$start = $limit * $page;
		}
		if( !empty($order)){
			if( $order == 'distance'){
				$order = ' ORDER BY distance ASC ';	
			}else if( $order = 'score' ){
				$order = ' ORDER BY `avgScore` DESC ';
			}else{
				$order = '';
			}
		}else{
			$order = ' ';
		}
		$area = ' `store`.`id`,`store`.`storeName`,`store`.`mainItem`,`store`.`address`,`store`.`lon`,`store`.`lat`,`store`.`selfImg`,`storeAvgScor`.`avgScore` ';
		$sql = 'SELECT '.$area.' , CASE WHEN `mainItem` LIKE \''."$title".'%\' THEN 1 '.
							'WHEN `mainItem` LIKE \'%'."$title".'%\' THEN 2 '.
							'END AS likey,'.
							' ROUND( 6378.138 * 2 * ASIN( SQRT( POW( SIN( ('.$lat.' * PI()/180 - lat * PI()/180 )/2 ),2 ) + COS( '.$lat.'*PI()/180 ) * COS( lat*PI()/180 ) * POW( SIN( ( '.$lon.' * PI()/180- lon * PI()/180 )/2 ),2 ) ) )*1000) AS distance '.
							'FROM `store` left join `storeAvgScor` on `store`.`id` = `storeAvgScor`.`storeId` '.
							'WHERE `mainItem` LIKE \''."%$title%".
							'\' HAVING distance <='.$distance.
							$order.
							'LIMIT ?,?';
		// echo $sql; exit;
		// $sql = "SELECT * FROM `store` WHERE `mainItem` LIKE ? LIMIT ?,?";
		$result = $this->list_model->query($sql, array(intval($start),intval( $limit)));
		if( !empty( $result)){
			foreach ( $result as &$val){
				//店铺无人评价则给予满分
				if( $val['avgScore'] == ''){
					$val['avgScore'] = 5;
				}
				$val['mark'] = $this->getStoreMark( $val['id']);
				unset($val['comments']);
				unset($val['userId']);
				unset($val['miles']);
				unset($val['keepFee']);
				unset($val['meirongFee']);
				unset($val['editByUid']);
				unset($val['editor']);
				unset($val['status']);
			}
		}
		
		if( !empty($result)){
			$this->jsonResponse( array('message'=>'success','result'=>$result));
		}else{
			$this->jsonResponse( array('message'=>'error','result'=>'no store list'),400);
		}
	}
	public function carDoctor(){
		$this->input_require('userId');
		
		$userId = $this->input->get('userId');
		$status = 'pending';
		$content = $this->input->get('content');
		
		$array = array(
				'userId'		=> $userId,
				'createDate'	=> date('Y-m-d H:i:s',time()),
				'status'		=> $status,
				'content'		=> $content
		);
		
	}
	public function getStoreMark( $storeId){
		$mark = $this->list_model->search('store_mark',array('storeId' => $storeId),null,1);
		// var_dump( $mark);exit;
		unset($mark['id']);
		unset( $mark['storeId']);
		foreach ($mark as $key => &$val) {
			if( $mark[$key] == '' || $val == 0 ){
				unset($mark[$key]);
			}
		}
		return $mark;
	}

}