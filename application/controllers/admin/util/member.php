<?php
class Member extends SB_Controller {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->model("/admin/util/member_model","member_model");
	}
	
	public function index(){

		$data['member_list'] = $this->member_model->get_user_list();
		$this->load->view('/admin/util/member',$data);
	}
	public function ajax_row_info(){
		
		$data['seq'] = $this->input->get_post('seq');
		
		$this->member_model->get_user_row($data['seq']);
		$this->load->view();
	}	
}
?>