<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

	/*用户登陆通过邮箱进行登陆*/
class Products_model extends BaseModel {
	public function __construct() {
		parent::__construct ();
		$this->db = $this->load->database ( 'default', TRUE );
		$this->load->helper ( 'date' );
	}

	/*产品列表*/
	public function products_list( $id = null , $order = 'id asc'){
		$condition = array();
		$condition['isdel'] = 0;
		if(　$id ){
			$condition['id'] = $id;
		}
		$result = $this->search('products', $condition, $order);
		return $result;
	}

	/*删除产品*/
	public function del_produ( $id ){
		$this->delete('products', array('id' => $id));
		return true;
	}

	/*修改产品*/
	public function edit_produ( $id, $data ){
		$this->updateWhere( 'products', $data, array('id' => $id) );
		return true;
	}

	/*添加产品*/
	public function add_produ( $data){
		$id = $this->upsert('products', $data);
		return $id;

	}
}