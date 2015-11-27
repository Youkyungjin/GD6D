<?php
class Member_model extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database("default");
	}
	
	public function get_user_list(){
		$result = $this->db->get('tb_member');
		return $result->result_array();
	}
	
	
	public function get_user_row($user_seq){
		$this->db->where('seq',$user_seq);
		$result = $this->db->get('tb_member');
		return $result->result_array();
	}
}
?>