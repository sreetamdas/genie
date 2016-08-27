<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MX_Controller
{	
	function __construct()
	{
		parent::__construct(); 
		$this->load->library('auth/ion_auth');
		$this->load->model('main_model');
		$this->load->library('cart');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');


		
	}

 	function _render_page($view, $data1=null)
 	{
 	$pass = null;
	$this->load->view('header');
	$this->load->view($view, $data1);
	$this->load->view('footer');
	}

	function index()
	{	
		
			
		
		$this->_render_page('index');
	}
	function dashboard()
	{
		if($this->ion_auth->in_group(3))
		{

			redirect('/mod','refresh');
		}

		if($this->ion_auth->in_group(2))
		{
			redirect('/user','refresh');
		}
	}
	function ticket($id)
	{
		$pass['data'] = $this->main_model->getticketinfo($id);
		$pass['comment'] = $this->main_model->getcomments($id);

		$this->_render_page('ticket_page',$pass);

	}
	function addcomment($id)
	{
		if($this->input->post('commentbox'))
		{
			$pass['comment'] = $this->input->post('commentbox');
			$pass['iid'] = $id;
			$pass['id'] = $this->ion_auth->get_user_id();
			$this->main_model->addcomment($pass); 
		}
		$this->ticket($id);
	}
	
}