<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Subjects_model');
		$this->load->model('Combo_model');
		$this->load->model('User_model');
		$this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		redirect(base_url().'Subjects/subject_details'); 
	}
	
	
	public function subject_details()
	{
		$id = $this->uri->segment(3);
		$order_by = 'ASC';	
		if (empty($id))
		{
			show_404();
		}
		$_SESSION['CURRENT_URL'] = current_url();
		$data['subject'] = $this->Subjects_model->view_record($order_by,$id);
		$data['cbo_teacher'] = $this->Combo_model->cbo_teacher_popup();
		// Field Validation
		$this->form_validation->set_rules('sub_name','Subject Name','required');
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Add Subject";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Subject/AddListSubject',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		$data =array
			(
				'status' =>'Active',
				'sub_name' => $this->input->post('sub_name'),
				'class_id' =>$id
			);			
			$this->Subjects_model->add_record($data);
			
			
			redirect(base_url().'Subjects/subject_details/'.$id); 

		}
		
	}
	
	public function geteachsubdetails()
	{
		$id = $this->uri->segment(3);
		
		
		$data['result'] = $this->Subjects_model->get_record_by_sub_id($id);
		
		//print_r($data['result']);
		
		$output = json_encode( $data['result'] );
		
		$this->output->set_content_type('application/json');
		$this->output->set_output($output);
	}
	
	public function teacher_assignment()
	{
		
		$id = $this->uri->segment(3);
		if (empty($id))
		{
			show_404();
		}
		// Field Validation
		
		$this->form_validation->set_rules('sub_name','Subject Name','required');
		
		$data =array
			(
				'sub_teacher_id' => $this->input->post('cbo_teacher'),
			);			
			
			$this->Subjects_model->update_record($data,$id);
			
			
		redirect($_SESSION['CURRENTURL']); 

		
	}

	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Students_model->delete_record($id);
		$this->Students_model->delete_parent_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'Students/grid_view'); 
	}
}
