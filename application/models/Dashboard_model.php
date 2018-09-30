<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Dashboard_model extends CI_Model
	{
	public function __construct()
	{
	$this->load->database();
	}
	
	public function get_class_record($order_by = 'ASC')
	{
	$this->db->select('c.*,s.id as secid,s.class_section');
	$this->db->from('tab_class as c');
	$this->db->join('tab_section as s', 's.class_id = c.id','left');
	if($order_by != ''){
	$this->db->order_by('s.id',$order_by);
	}
	$query = $this->db->get();		
	return $query->result_array();
	}
	
	public function get_selected_class_record($order_by = '',$id)
	{
	$this->db->select('c.*,s.*');
	$this->db->from('tab_class as c');
	$this->db->join('tab_section as s', 's.class_id = c.id','left');
	$this->db->where('s.class_id', $id);
	if($order_by != ''){
	$this->db->order_by('c.class_name',$order_by);
	}
	$query = $this->db->get();		
	return $query->row_array();
	}
	
	
	
	public function add_record($data)
	{
	//SELECT MAX ID
	$max_id = 1;
	$this->db->select_max('id');
	$query = $this->db->get('tab_designation');
	$row = $query->row();
	if (isset($row))
	{
	$max_id = $row->id + 1;
	}
	
	$data['id'] = $max_id;
	return $this->db->insert('tab_designation', $data);
	}
	
	public function edit_record($id,$data)
	{
	$this->db->where('id', $id);
	$this->db->update('tab_designation', $data);		
	}
	
	public function delete_record($id)
	{
	$this->db->where('id', $id);
	return $this->db->delete('tab_designation');
	}
	
	public function view_record($order_by = '')
	{
	$this->db->select('v.*');
	$this->db->from('tab_designation as v');
	if($order_by != ''){
	$this->db->order_by('v.id',$order_by);
	}
	$query = $this->db->get();		
	return $query->result_array();
	}
	
	
	public function get_record_by_id($id)
	{
	$this->db->where('id', $id);
	$query = $this->db->get('tab_designation');
	
	return $query->row_array();
	}
	
	public function designation_count()
	{
	
	return $this->db->count_all_results('tab_designation');
	}
	
	
	}