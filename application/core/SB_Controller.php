<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SB_Controller extends CI_Controller {
	public $auth_info;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->lang->load("main", "korean");
		$this->load->helper('url');
		$this->auth_info = $this->session->userdata(USER_SESSION);
		if(in_array($this->uri->segment(1), array("admin"))){
			if(!empty($this->auth_info)){
			}else{
				if (!in_array($this->uri->segment(3), array("login"))){
					//echo $this->uri->segment(2);
					redirect("/admin/util/login");
				}
			}
		}else{
			#아닐때는 없음
		}
	}
	
}
