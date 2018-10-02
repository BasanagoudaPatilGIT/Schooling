<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_country_list()
	{
		$this->db->select('c.*');
		$this->db->from('tab_country as c');
		/*if($order_by != ''){
			$this->db->order_by('c.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_state_list($country_id=0)
	{
		$this->db->select('s.id,s.state_name');
		$this->db->from('tab_state as s');
		$this->db->where('country_id',$country_id);
		/*if($order_by != ''){
			$this->db->order_by('s.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_district_list($state_id=0)
	{
		$this->db->select('d.id,d.district_name');
		$this->db->from('tab_district as d');
		$this->db->where('state_id',$state_id);
		/*if($order_by != ''){
			$this->db->order_by('d.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_city_list($district_id=0)
	{
		$this->db->select('ci.id,ci.city_name');
		$this->db->from('tab_city as ci');
		$this->db->where('district_id',$district_id);
		/*if($order_by != ''){
			$this->db->order_by('d.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_area_list($city_id=0)
	{
		$this->db->select('a.id,a.area_name');
		$this->db->from('tab_area as a');
		$this->db->where('city_id',$city_id);
		/*if($order_by != ''){
			$this->db->order_by('d.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_pincode_list($area_id=0)
	{
		$this->db->select('a.pincode');
		$this->db->from('tab_area as a');
		$this->db->where('id',$area_id);
		/*if($order_by != ''){
			$this->db->order_by('d.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->row_array();
	}
	
	public function get_notification_list($status = 'Open')
	{
		$this->db->select('n.*');
		$this->db->from('tab_notification as n');
		if($status != ''){
			$this->db->where('n.status',$status);
		}
		$this->db->order_by('n.id','DESC');
		/*if($order_by != ''){
			$this->db->order_by('c.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	
	
	
	public function get_bill_type_list()
	{
		$this->db->select('b.id,b.bill_type,b.amount');
		$this->db->from('tab_bill_type as b');
		if($order_by != ''){
			$this->db->order_by('b.id',$order_by);
		}
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_amount_list($bill_type_id)
	{
		$this->db->select('b.amount');
		$this->db->from('tab_bill_type as b');
		$this->db->where('id',$bill_type_id);
		
		
		/*if($order_by != ''){
			$this->db->order_by('b.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->row_array();
	}
	
	public function get_student_section($class_id)
	{
		$this->db->select('s.id,s.class_section');
		$this->db->from('tab_section as s');
		$this->db->where('s.class_id',$class_id);
		/*if($order_by != ''){
			$this->db->order_by('s.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_teacher_section($section_id)
	{
		$this->db->select('t.id,t.first_name,t.middle_name,t.last_name');
		$this->db->from('tab_teacher_assignment as ta');
		$this->db->where('ta.id',$section_id);
		$this->db->join(' tab_section as s','s.id = ta.section_id','left');
		$this->db->join('tab_teachers as t','t.id = ta.teacher_id','left');
		$query = $this->db->get();		
		return $query->row_array();
	}
	
	public function get_student_rollnum($section_id)
	{
		$this->db->select('count');
		$this->db->from('tab_section as s');
		$this->db->where('id',$section_id);
		/*if($order_by != ''){
			$this->db->order_by('s.id',$order_by);
		}*/
		$query = $this->db->get();		
		return $query->row_array();
	}
	
	public function get_vehicle_no($regionid)
	{
		$this->db->select('t.id,t.vehicle_number');
		$this->db->from('tab_transportation as t');
		$this->db->where('region_id',$regionid);
		$query = $this->db->get();		
		return $query->result_array();
	}
	
	public function get_route_list($vehilceid)
	{
		$this->db->select('rt.id,rt.route_name');
		$this->db->from('tab_route_mapping as rt');
		$this->db->where('vehicle_id',$vehilceid);
		$query = $this->db->get();		
		return $query->result_array();
	}
}