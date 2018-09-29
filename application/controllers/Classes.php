<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Combo_model');
		$this->load->model('Teachers_model');
		$this->load->model('Class_model');
		$this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		redirect(base_url().'Classes/grid_view'); 
	}
	
	
	public function addSection()
	{
	
		$data['cbo_teacher'] = $this->Combo_model->cbo_teacher();
		$data['cbo_class_list'] = $this->Combo_model->cbo_class_list();
		
		// Field Validation
		$this->form_validation->set_rules('cbo_class_list','Class Name','required');
		$this->form_validation->set_rules('classsec','Class Section','required');
		$this->form_validation->set_rules('capacity','Class Capacity','required');
		
		
		if(($this->form_validation->run())==false)
		{
			
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$data['title'] = $_SESSION['TITLE'].''."- Add Class";
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Class/AddClass',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		$class_id = $this->input->post('cbo_class_list');
		$class_section = $this->input->post('classsec');
		$data =array
			(
				'status'=>'Active',
				'class_id'=>$class_id,
				'class_section'=>$class_section,
				'class_capacity'=>$this->input->post('capacity'),
				'class_number'=>$this->input->post('classnum'),
				'class_location'=>$this->input->post('location'),
				'count'=>'1',
				
			);				
			$this->Class_model->add_record($data);
			
			$data =array
			(
				'class_id'=>$class_id,
				
			);
				$this->Class_model->add_to_section_record($data);			
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Added Successfully.
			  </div>
			  ');
			
			redirect(base_url().'Classes/teacher_assignment','refresh'); 

		}
		
	}
	
	public function teacher_assignment()
	{
		$data['class'] = $this->Class_model->teacher_assignment_record('ASC');
		$data['cbo_class_list'] = $this->Combo_model->cbo_class_list();
		$data['cbo_section_list'] = $this->Combo_model->cbo_section_list();
		$data['cbo_teacher_list'] = $this->Combo_model->cbo_teacher();
		
		
		// Field Validation
		$this->form_validation->set_rules('cbo_class_list','Class','required');
		$this->form_validation->set_rules('cbo_section_list','Section','required');
		$this->form_validation->set_rules('cbo_teacher_list','Teacher','required');
		
		
		if(($this->form_validation->run())==false)
		{
			
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$data['title'] = $_SESSION['TITLE'].''."- Class Details";
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Class/ClassList',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
			$classid = $this->input->post('cbo_class_list');
			$sectionid = $this->input->post('cbo_section_list');
		$data =array
			(
				'class_id'=>$classid,
				'section_id'=>$sectionid,
				'teacher_id'=>$this->input->post('cbo_teacher_list'),
				
			);				
			$this->Class_model->update_teacher_assignment_record($data,$classid,$sectionid);
			
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Added Successfully.
			  </div>
			  ');
			
			redirect(base_url().'Classes/teacher_assignment','refresh'); 

		}
		
	}
	
	public function updateclass()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		
		//GET DATA FROM TABLE
		$data['class_row'] = $this->Class_model->get_record_by_id($id);
		$data['cbo_teacher'] = $this->Combo_model->cbo_teacher();
		
		
		// Field Validation
		$this->form_validation->set_rules('classname','Class Name','required');
		$this->form_validation->set_rules('classsec','Class Section','required');
		$this->form_validation->set_rules('capacity','Class Capacity','required');
		$this->form_validation->set_rules('cbo_teacher','Teacher Name','required');
		
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Update Class";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Class/UpdateClass',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		if(strtoupper($_SESSION['USER_TYPE']) == '' )
			{
			$data =array(	
						'status'=>$this->input->post('cbo_status'),
						);
			}else{
			$data =array(	
						'status'=>'Active',
						);
			}
				$this->Class_model->edit_record($id,$data);
			
		$data =array
			(
				'class_name'=>$this->input->post('classname'),
				'class_section'=>$this->input->post('classsec'),
				'class_capacity'=>$this->input->post('capacity'),
				'class_number'=>$this->input->post('classnum'),
				'class_teacher_id'=>$this->input->post('cbo_teacher'),
				'class_location'=>$this->input->post('location')
				
			);						
			$this->Class_model->edit_record($id,$data);
			 $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Updated Successfully.
			  </div>
			  ');
			
				  
			redirect(base_url().'Classes/grid_view','refresh'); 			
		}		
	}
	
	public function grid_view()
	{
		$order_by = 'DESC';		
		$data['class'] = $this->Class_model->view_record('');
		$data['title'] = $_SESSION['TITLE'].''."- Class List";
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Class/ClassList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function delete_record($id=0)
	{
		$id = $this->uri->segment(3);
	
		if ($id==0)
		{
			$this->index();			
		}	
				
		$this->Class_model->delete_record($id);
		
		//$this->edit_form();
		$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-trash-o"></i> Record Deleted Successfully.
			  </div>
			  ');
		
		redirect(base_url().'Classes/grid_view'); 
	}
	
	public function single_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['class_row'] = $this->Class_model->get_single_view($id);
		$data['number_of_students'] = $this->Class_model->get_class_student_count($id);
		//print_r($data['number_of_students']);
		$data['title'] = $_SESSION['TITLE'].''."- Class view";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
		$this->load->view('Class/Class_view',$data);
		$this->load->view('Home/footer');	
	}
	
	public function get_student_count()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['class_student_count'] = $this->Class_model->get_class_student_count($id);
		print_r($data['class_student_count']);
		$this->load->view('Home/header');
		$this->load->view('Home/menu');
		$this->load->view('Class/ClassList',$data);
		$this->load->view('Home/footer');	
	}
	
	
}
