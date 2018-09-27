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
		redirect(base_url().'Subjects/subject_detailssubject_details'); 
	}
	
	
	public function subject_details()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		$data['subject'] = $this->Subjects_model->view_record('',$id);
		$data['single'] = $this->Subjects_model->get_record_by_sub_id();
		print_r($data['single']);
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
	
	public function grid_view()
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
		$data['title'] = $_SESSION['TITLE'].''."- Student list";
		$data['cbo_class'] = $this->Combo_model->cbo_class();
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';
			//$data['sub_row'] = $this->Subjects_model->get_record_by_id($id);
			//print_r($data['sub_row']['class_id']);
		$data['subject'] = $this->Subjects_model->view_record('',$id);
		$data['title'] = $_SESSION['TITLE'].''."- Student List";
		$data['selected_class'] = $this->Dashboard_model->get_selected_class_record('',$id);
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Subject1/AddListsubject',$data);
		$this->load->view('Home/footer');	
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
