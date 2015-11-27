<?php
class Login_model extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->database("default");
	}
	
	public function chk_userLogin($id,$pw){
		
		
		$this->db->where("id",$id);
		$result = $this->db->get('tb_member');
		$result = $result->row_array();
		
		if(empty($result['pw'])){
			$login_info['result'] = 'N';
			return $login_info;
		}elseif($result['pw'] != $pw){
			$login_info['result'] = 'N';
			return $login_info;
		}else{
			$login_info = $result;
			$login_info['result'] = 'Y';
			return $login_info;
			
		}
	}
}
?>