<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->library('auth/ion_auth');
		$this->load->model('admin_model');
		$this->load->helper(array('form', 'url'));
		if(!$this->ion_auth->logged_in())
			redirect('/auth/login/','refresh');
		if(!$this->ion_auth->is_admin())
			redirect('/auth/login/','refresh');

	}
 function _render_page($view, $data=null)
 {
	
	$this->load->view('dash', $data);
	$this->load->view($view, $data);
	$this->load->view('footer', $data);
 }

 function index()
 {
 	$this->_render_page('sample');
 }
 function addmoderator()
 {

 	if($this->input->post('mod')&&$this->input->post('tag'))
  {
    $pass['mid'] = $this->input->post('mod');
    $pass['tags'] = $this->input->post('tag');
    if($this->admin_model->addmoderators($pass)){
      print_r("Moderator Added");
      $this->_render_page('addmoderator');
    
    }
    else{
    print_r("Moderator not Added");
    $this->_render_page('addmoderator');
  }}
  else{    
      $this->_render_page('addmoderator');

  }
 }
 function alltickets()
 {
  $pass['data'] = $this->admin_model->getalltickets();
  $this->_render_page('alltickets',$pass);

 }
 
}