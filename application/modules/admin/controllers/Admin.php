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
 function create_supplier()
 {
 	redirect('auth/register/supplier',refresh);
 }
 function featured()
 {
 	$pass['data'] = $this->admin_model->getprod();

 	$this->_render_page('featured',$pass);

 }
 function feat()
 {
 	$data = $this->admin_model->getprod();
 	foreach($data as $row){
 		if($this->input->post('cb'.$row['p_no']))
 		{
 			$a = $this->input->post('cb'.$row['p_no']);
 			$this->admin_model->update_feat($a,1);
 		}else
 		{
 			$this->admin_model->update_feat($row['p_no'],0);
 		}
 		
 	}
 	$this->featured();

 }
 function addcountry()
 {
 	if($this->input->post('country'))
 	{
 		$country =  $this->input->post('country');
 		if($this->admin_model->addcountry($country))
 		{ 	print_r("1");
 			redirect('admin','refresh');
 		}
 		else 
 		{	
 			print_r("Add country failed");
 			redirect('admin/addcountry');
 		}

 	}
 	else
 	$this->_render_page('country');
 }
 function allcountry()
 {
 	$pass['data']= $this->admin_model->allcountry();

 	$this->_render_page('allcountry',$pass);
 }
 function delcountry($id)
 {
 	if($this->admin_model->delcntry($id))
 	{
 		redirect('admin/allcountry','refresh');
 		print_r("Sucessfully Deleted");
 	}
 	else
 	{
 		redirect('admin/allcountry','refresh');
 		print_r("Unable to Delete");
 	}

 }
 function uploadheader()
 {
 	$noi = $this->admin_model->getval('noi_header');
 	$this->_render_page('headerimg',$noi[0]);
 }
 public function do_upload($opt,$noi=0)
 {       $id = $this->ion_auth->get_user_id();

            
          if (!is_dir('./assets/images/header')) 
                          {
                              mkdir('./assets/images/header');
                          }
           
                $config['upload_path']          = './assets/images/header';
                $config['allowed_types']        = 'jpg';
     
                
                $n = $noi + 1;
                $config['file_name']            = 'img_'.$n;
              	
                $this->load->library('upload', $config);
              
                if ( ! $this->upload->do_upload('userfile'))
                {       
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);

                 
                        print_r("Error in storing, Retry");
                        $pass['value'] = $noi;
                        $this->_render_page('headerimg',$pass);
                }
                else
                {       
                        $data = array('upload_data' => $this->upload->data());
                        
                          $this->admin_model->update_dict('noi_header',$n);
                          print_r("Success");
                          $config['image_library'] = 'gd2';
                          $config['source_image'] =  base_url('assets/images/header/img_'.$n.'jpg');;
                          $config['maintain_ratio'] = TRUE;
                          $config['width']         = 500;
                          $config['height']       = 300;

                          $this->load->library('image_lib', $config);

                          if($this->image_lib->resize()) echo "Success";
                          $pass['value'] = $n;
                        $this->_render_page('headerimg',$pass);
                }
        }
}