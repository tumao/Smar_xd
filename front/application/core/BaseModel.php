<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseModel extends CI_Model
{

	public function __construct()
	{
		//$this->db = $this->load->database ( 'default', TRUE );
	}
	function load_other_model($model_name)
	{
		$CI =& get_instance();
		$CI->load->model($model_name);
         //get last string of $model_name
		$path = explode('/', $model_name);
		$last_model_name = $path[count($path)-1];
		return $CI->$last_model_name;
	}

	public function query($sql,$data)
	{
		$query = $this->db->query($sql,$data);
		if ($query->num_rows()>0) {
			return $query->result_array();
		} else {
			return null;
		}
	}

	// public function justQuery($sql,$data)
	// {
		
	// }

	public function updateWhere($table,$data,$condition=NULL)
	{
		if (!empty($condition)) {
			foreach ($condition as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		$this->db->update($table,$data);
		// echo $this->db->last_query();exit;
	}

	public function upsert($table,$data)
	{
		if (isset($data['id'])) {
			//update
			$this->db->where ( 'id', $data['id'] );
			$this->db->update ( $table, $data );
			return $data['id'];
		} else {
			//insert
			$this->db->insert ( $table, $data );
			return $this->db->insert_id ();
		}
	}

	public function search($table,$condition,$orderby=NULL,$limit='',$start='',$page='')
	{
		// $this->db->_compile_select(); 

		foreach ($condition as $key => $value) {
			$this->db->where($key, $value);
		}
		if (!empty($orderby)) {
			$this->db->order_by ( $orderby);
		}
		$this->db->from ( $table );
		if ($limit != '') {
			if ($start != '') {
				$this->db->limit($limit, $start);
			} else {
				if ($page!='') {
					$this->db->limit($limit, ($page-1)*$limit);	
				} else {
					$this->db->limit($limit, 0);	
				}

			}
		}
		if($limit == 1) {
			$result = $this->db->get()->row_array();	
		} else {
			$result = $this->db->get()->result_array();
		}
		
		// echo $this->db->last_query();exit;
		return $result;
	}


	public function get($table,$id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$this->db->from($table);
		return $this->db->get()->row_array();

	}

	public function delete($table,$condition)
	{
		foreach ($condition as $key => $value) {
			$this->db->where($key, $value);
			
		}
		$this->db->delete($table); 
	}
}
