<?php
class Login extends SB_Controller {
	
	public function index(){
		$redirctUrl = $this->input->get_post("url");
		$id = $this->input->post("user_id");
		$pw = $this->input->post("user_pw");
		
		$this->load->library('session');
		$this->load->model("/admin/util/login_model","login_model");
		$login_info = $this->login_model->chk_userLogin($id,$pw);
		if($login_info['result'] == "Y"){
			$user_session = array(
				'USER_SEQ'  => $login_info ['seq'],
				'USER_ID'   => $login_info ['id'],
				'USER_NAME' => $login_info ['name']
			);
			$this->session->set_userdata(USER_SESSION,$user_session);
			redirect('/admin/main');
		}else{
			$this->load->view('/admin/util/login');
		}
	}
	
	public function logout(){
		$this->load->library('session');
		$this->session->unset_userdata(USER_SESSION);
		session_destroy();
		redirect("/admin/util/login");
	}
}
?>