<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
    }
    
    function getprod()
    {	
    	$this->db->select('p_no,boat_name,s_date,feat');
    	$data = $this->db->get('boats');
    	
    	$data1 = $data->result_array();
    	$data1['rowcount'] = $data->num_rows();
    	
    	return $data1;
    }
    function update_feat($pno,$flag)
    {
    	$data['p_no'] = $pno;
    	$data['feat'] =$flag;
    	$this->db->where('p_no',$data['p_no']);
    	$this->db->update('boats',$data);
    }
	function addcountry($country)
    {
        $data['name'] = $country;
        $this->db->insert('country',$data);
    }
    function allcountry()
    {
        $data = $this->db->get('country')->result_array();
        return $data;
    }
 	function delcntry($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('country');
    }
    function getval($key)
    {
        $data = $this->db->get_where('dict',array('key'=>$key))->result_array();
        return $data;
    }
    function update_dict($key,$val)
    {   $data['value'] = $val;
        $this->db->where('key',$key);
        $this->db->update('dict',$data);
    }
}

