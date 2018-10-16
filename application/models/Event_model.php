<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Event_model extends CI_Model
	{
	public function __construct()
	{
	$this->load->database();
	}
	
	public function add_record($data)
	{
	//SELECT MAX ID
	$max_id = 1;
	$this->db->select_max('id');
	$query = $this->db->get('tab_event');
	$row = $query->row();
	if (isset($row))
	{
	$max_id = $row->id + 1;
	}
	
	$data['id'] = $max_id;
	return $this->db->insert('tab_event', $data);
	}
	
	public function add_event_images_record($data)
	{
	//SELECT MAX ID
	$max_id = 1;
	$this->db->select_max('id');
	$query = $this->db->get('tab_event_images');
	$row = $query->row();
	if (isset($row))
	{
	$max_id = $row->id + 1;
	}
	
	$data['id'] = $max_id;
	return $this->db->insert('tab_event_images', $data);
	}
	
	public function edit_record($id,$data)
	{
	$this->db->where('id', $id);
	$this->db->update('tab_event', $data);		
	}
	
	public function delete_record($id)
	{
	$this->db->where('id', $id);
	return $this->db->delete('tab_event');
	}
	
	public function view_record($order_by = '')
	{
	$this->db->select('e.*');
	$this->db->from('tab_event as e');
	if($order_by != ''){
	$this->db->order_by('e.id',$order_by);
	}
	$query = $this->db->get();		
	return $query->result_array();
	}
	
	public function first_image_view_record($order_by = '',$user_id)
	{
	$this->db->select('ei.*');
	$this->db->from('tab_event_images as ei');
	if($order_by != ''){
	$this->db->order_by('ei.id',$order_by);
	}
	$this->db->where('event_id', $user_id);
	$this->db->limit(1);
	
	$query = $this->db->get();		
	return $query->result_array();
	}
	public function images_view_record($user_id)
	{
	$this->db->select('ei.*');
	$this->db->from('tab_event_images as ei');
	
	$this->db->order_by('ei.id','ASC');
	
	$this->db->where('event_id', $user_id);
	$this->db->limit(4);
	
	$query = $this->db->get();		
	return $query->result_array();
	}
	
	public function get_record_by_id($id)
	{
	$this->db->where('id', $id);
	$query = $this->db->get('tab_event');
	
	return $query->row_array();
	}
	}