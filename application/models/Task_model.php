<?php
class Task_model extends CI_Model {
 
	public function __construct()
	{

	$this->load->database();
		
		
	}
	
	public function lists(){
		
	$per_page = 20; //表示数
	$query = $this->db->get('task',$per_page);
	if ($query->num_rows() > 0){
	return $query->result_array();		
	}
	else
	{
	return[];
	}
		
	}
	
	
	public function create($task){
	$date=['task_name' => $task];
    $this->db->insert('task',$date);
		
		
		
	}
		
		
	
	
	

	}

?>