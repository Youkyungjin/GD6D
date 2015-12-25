<?php
class Error extends SB_Controller {
	
	
	public function error_404(){
		$this->load->view('/admin/util/page_404');
	}
}
?>