<?php
class Travel extends SB_Controller {
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('');
    }
	
	public function index(){
		$this->load->view('/admin/travel/travel_list');
	}
	
	public function write(){
		$input['title']   = $this->input->get_post('title');   #제목
		$input['content'] = $this->input->get_post('content'); #내용
		$input['tag']     = $this->input->get_post('tag');     #태그
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
// 		$this->form_validation->set_rules('title', '제목', 'required');
// 		$this->form_validation->set_rules('content', '본문', 'required');
		if ($this->form_validation->run() == FALSE)
        {
        	var_dump($input);
// 			$this->load->view('/admin/travel/travel_write');
        }
        else
        {
        	var_dump($input);
        	exit;
        }
		
		
	}
	function tag_manage($tag_array){
		$this->load->model('blog_model');		
	}
	
	
	public function update(){
		$this->load->view('/admin/travel_write');
	}
}
?>