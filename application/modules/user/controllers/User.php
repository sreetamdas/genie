<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->library('auth/ion_auth');
		$this->load->model('user_model');
		if(!$this->ion_auth->logged_in())
			redirect('/auth/login/','refresh');
		
	}
 function _render_page($view, $data=null)
 {
	
	$this->load->view('user_dash', $data);
	$this->load->view($view, $data);
	$this->load->view('footer', $data);
 }

 function index()
 {
 	$this->_render_page('sample');
 }


}