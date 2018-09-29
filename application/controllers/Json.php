<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller 
{	
	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		
		$this->load->model('Json_model');
	}
	
	public function get_country_list()
	{
		$data['result'] = $this->Json_model->get_country_list();
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_state_list()
	{
		$country_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_state_list($country_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	public function get_district_list()
	{
		$state_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_district_list($state_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_city_list()
	{
		$district_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_city_list($district_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_area_list()
	{
		$city_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_area_list($city_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_pincode_list()
	{
		$area_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_pincode_list($area_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_notification_list()
	{
		$data['result'] = $this->Json_model->get_notification_list();
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_bill_type_list()
	{
		$data['result'] = $this->Json_model->get_bill_type_list();
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_amount_list()
	{
		$bill_type_id = $this->uri->segment(3);
		//echo($bill_type_id);
		$data['result'] = $this->Json_model->get_amount_list($bill_type_id);
		
		print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_student_section()
	{
		$class_id = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_student_section($class_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_teacher_section()
	{
		$section_id = $this->uri->segment(3);
		//echo($section_id);
		
		$data['result'] = $this->Json_model->get_teacher_section($section_id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function get_student_rollnum()
	{
		$section = $this->uri->segment(3);
		//echo($country_id);
		
		$data['result'] = $this->Json_model->get_student_rollnum($section);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	

}