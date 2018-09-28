<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Transportationdetails_model extends CI_Model
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
    $query = $this->db->get('tab_transportation');
    $row = $query->row();
    if (isset($row))
    {
    $max_id = $row->id + 1;
    }
    
    $data['id'] = $max_id;
	
    return $this->db->insert('tab_transportation', $data);
    }
    
	
	public function update_record($data,$id)
    {
    $this->db->where('id', $id);
    $this->db->update('tab_transportation', $data);		
    }
    
    public function delete_record($id)
    {
    $this->db->where('id', $id);
    return $this->db->delete('tab_teachers');
    }
    
    public function view_record($order_by = '')
    {
    $this->db->select('s.*,r.region_name');
    $this->db->from('tab_transportation as s');
    $this->db->join('tab_region as r','r.id = s.region_id', 'left');
    if($order_by != ''){
    $this->db->order_by('s.id',$order_by);
    }
    $query = $this->db->get();		
    return $query->result_array();
    }
    
    
    public function get_record_by_id($id)
    {
    $this->db->where('class_id', $id);
    $query = $this->db->get('tab_transportation');
    
    return $query->result_array();
    }
	
	public function get_record_by_sub_id($id)
    {
    $this->db->select('s.*');
    $this->db->from('tab_transportation as s');
	$this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row_array();
    }
    
    public function get_single_view($id)
    {
    $this->db->select('r.*,se.gender_type,c.country_name');
    $this->db->from('tab_teachers as r');
    $this->db->join('tab_country as c','c.id = r.country_id', 'left');
    $this->db->join('tab_sex as se','se.id = r.gender_id', 'left');
    $this->db->where('r.id', $id);
    $query = $this->db->get();
    
    return $query->row_array();
    }
    
    public function teachers_count()
    {
    
    return $this->db->count_all_results('tab_teachers');
    }
    
    
    }