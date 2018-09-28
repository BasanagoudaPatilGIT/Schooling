<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transportation_details extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Transportation_details_model');
		$this->load->model('Combo_model');
		$this->load->model('User_model');
		$this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		redirect(base_url().'Transportation_details/transportation_details'); 
	}
	
	
	public function transportation_details()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		$data['transportation'] = $this->Transportation_details_model->view_record('',$id);
		// Field Validation
		$this->form_validation->set_rules('vehicle_route','Vehicle Route','required');
		$this->form_validation->set_rules('vehicle_number','Vehicle Number','required');
		$this->form_validation->set_rules('vehicle_capacity','Vehicle Capacity','required');
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Transportation details";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Transportation_details/transportation_details',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		$data =array
			(
				//'status' =>'Active',
				'vehicle_route' => $this->input->post('vehicle_route'),
				'vehicle_number' => $this->input->post('vehicle_number'),
				'vehicle_capacity' => $this->input->post('vehicle_capacity')
			);			
			$this->Transportation_details_model->add_record($data);
			
			
			redirect(base_url().'Transportation_details/transportation_details/'.$id); 

		}
		
	}
	
	public function grid_view()
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
		$data['title'] = $_SESSION['TITLE'].''."- Student list";
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['student'] = $this->Subjects->view_record('',$id);
		$data['title'] = $_SESSION['TITLE'].''."- Student List";
		$data['selected_class'] = $this->Dashboard_model->get_selected_class_record('',$id);
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Transportation_details/Transportation_detailsList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Subjects->delete_record($id);
		$this->Subjects->delete_parent_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'index.php/Transportation_details/grid_view'); 
	}

}
