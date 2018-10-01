<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		
		$this->load->model('Students_model');
		$this->load->model('Combo_model');
		$this->load->model('User_model');
		$this->load->model('Dashboard_model');
	}
	
	public function index()
	{
		redirect(base_url().'index.php/Students/grid_view'); 
	}
	
	
	public function addStudent()
	{
		$data['cbo_class'] = $this->Combo_model->cbo_class();
		$data['cbo_section'] = $this->Combo_model->cbo_section();
		$data['cbo_sex'] = $this->Combo_model->cbo_sex();
		$data['pcbo_sex'] = $this->Combo_model->cbo_sex();
		$data['cbo_blood_group'] = $this->Combo_model->cbo_blood_group();
		$data['cbo_country'] = $this->Combo_model->cbo_country();
		$data['percbo_country'] = $this->Combo_model->cbo_country();
		$data['pcbo_blood_group'] = $this->Combo_model->cbo_blood_group();
		
	
	    // Field Validation
		$this->form_validation->set_rules('admission_no','Admission Number','required');
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('email','Email Id','required|valid_email');
		$this->form_validation->set_rules('address','Current Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('cbo_country','Country','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('peraddress','Permanent Address','required');
		$this->form_validation->set_rules('percity','City','required');
		$this->form_validation->set_rules('percbo_country','Country','required');
		$this->form_validation->set_rules('perzipcode','Zipcode','required|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('cbo_sex','Gender','required');
		$this->form_validation->set_rules('username','User Name','required|max_length[12]');
		$this->form_validation->set_rules('password','Passowrd','required|max_length[12]|min_length[8]');
		$this->form_validation->set_rules('confirmPassword','Confirm Password','required|max_length[12]|min_length[8]|matches[password]');
		$this->form_validation->set_rules('rollnum','Roll Number','required');
		$this->form_validation->set_rules('doj','Date of Joining','required');
		$this->form_validation->set_rules('pphone','Phone Number','required');
		$this->form_validation->set_rules('cbo_class','Class','required');
		$this->form_validation->set_rules('cbo_section','Section','required');
		$this->form_validation->set_rules('pfirstname','First Name','required');
		$this->form_validation->set_rules('pmiddlename','Middle Name','required');
		$this->form_validation->set_rules('plastname','Last Name','required');
		$this->form_validation->set_rules('pemail','Email Id','required|valid_email');
		$this->form_validation->set_rules('pdob','Date Of Birth','required');
		$this->form_validation->set_rules('pcbo_sex','Gender','required');
		$this->form_validation->set_rules('pusername','User Name','required|max_length[12]');
		$this->form_validation->set_rules('ppassword','Passowrd','required|max_length[12]|min_length[8]');
		$this->form_validation->set_rules('pconfirmPassword','Confirm Password','required|max_length[12]|min_length[8]|matches[ppassword]');
		$this->form_validation->set_rules('pqual','Qualification','required');
		$this->form_validation->set_rules('profession','Profession','required');
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Add Student";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Students/AddStudent',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		//UPLOAD STARTS
			$config['upload_path'] = './upload/Profile/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			//$config['max_size'] = '';
			
			$this->load->library('upload', $config);
			
			$displaypicture ='Capture.jpg';
			//echo($displaypicture);
			if( !$this->upload->do_upload('displaypicture') ){
				//print_r($this->upload->display_errors());
			}else{
				$displaypicture = $_FILES['displaypicture']['name'];
			}
			
			
			$std_status ='Active';
			$std_gender = $this->input->post('cbo_sex');
			$std_first_name = $this->input->post('firstname');
			$std_middle_name = $this->input->post('middlename');
			$std_last_name = $this->input->post('lastname');
			$std_email_id = $this->input->post('email');
			$std_mobile_no = $this->input->post('phone');
			$std_username = $this->input->post('username');
			$std_password = base64_encode($this->input->post('password'));
			$std_address = $this->input->post('peraddress');
			$std_class_id = $this->input->post('cbo_class');
			$std_section_id = $this->input->post('cbo_section');
			$std_roll_num = (int)$this->input->post('rollnum');
			$std_img_name = $displaypicture;
			
		$data =array
			(
				'status'=>$std_status,
				'user_type'=>3,
				'admission_no' => $this->input->post('admission_no'),
				'first_name'=>$std_first_name,
				'middle_name'=>$std_middle_name,
				'last_name'=>$std_last_name,
				'email'=>$std_email_id,
				'date_of_birth'=>$this->input->post('dob'),
				'gender_id'=>$std_gender,
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country_id'=>$this->input->post('cbo_country'),
				'zipcode'=>$this->input->post('zipcode'),
				'per_address'=>$std_address,
				'per_city'=>$this->input->post('percity'),
				'per_country_id'=>$this->input->post('percbo_country'),
				'per_zipcode'=>$this->input->post('perzipcode'),
				'phone'=>$std_mobile_no ,
				'blood_group_id'=>$this->input->post('cbo_blood_group'),
				'date_of_joining'=>$this->input->post('doj'),
				'roll_num'=>$std_roll_num,
				'class_id'=>$std_class_id,
				'section_id'=>$std_section_id,
				'displaypicture'=>$displaypicture
				
			);			
			$this->Students_model->add_record($data);
			
			$data =array
			(
				'status'=>$std_status,
				'user_type'=>3,
				'gender'=>$std_gender,
				'first_name'=>$std_first_name,
				'middle_name'=>$std_middle_name,
				'last_name'=>$std_last_name,
				'email_id'=>$std_email_id,
				'mobile_no'=>$std_mobile_no,
				'username'=>$std_username,
				'password'=>$std_password,
				'address'=>$std_address,
				'img_name'=>$displaypicture
				
			);	
			
			$this->User_model->add_record($data);
			
			$student_id = 1;
			$this->db->select_max('id');
			$query = $this->db->get('tab_students');
			$row = $query->row();
			if (isset($row))
			{
				$student_id = $row->id;
			}
			
			if( !$this->upload->do_upload('pdisplaypicture') ){
				print_r($this->upload->display_errors());
			}else{
				$pdisplaypicture = $_FILES['pdisplaypicture']['name'];
			}
			$par_status ='Active';
			$par_user_type = $this->input->post('cbo_user_type');
			$par_gender = $this->input->post('pcbo_sex');
			$par_first_name = $this->input->post('pfirstname');
			$par_middle_name = $this->input->post('pmiddlename');
			$par_last_name = $this->input->post('plastname');
			$par_email_id = $this->input->post('pemail');
			$par_mobile_no = $this->input->post('pphone');
			$par_username = $this->input->post('pusername');
			$par_password = base64_encode($this->input->post('ppassword'));
			$par_address = $this->input->post('peraddress');
			$par_img_name = $pdisplaypicture;
			
			$data =array
			(
				'status'=>$par_status,
				'user_type'=>5,
				'first_name'=>$par_first_name,
				'middle_name'=>$par_middle_name,
				'last_name'=>$par_last_name,
				'email'=>$par_email_id,
				'date_of_birth'=>$this->input->post('pdob'),
				'gender_id'=>$par_gender,
				'phone'=>$par_mobile_no,
				'blood_group_id'=>$this->input->post('pcbo_blood_group'),
				'qualification'=>$this->input->post('pqual'),
				'profession'=>$this->input->post('profession'),
				'displaypicture'=>$pdisplaypicture,
				'student_id'=>$student_id,
				
			);				
			$this->Students_model->add_parent_record($data);
			
			print_r($data);
			
			$data =array
			(
				'status'=>$par_status,
				'first_name'=>$par_first_name,
				'middle_name'=>$par_middle_name,
				'last_name'=>$par_last_name,
				'email_id'=>$par_email_id,
				'mobile_no'=>$par_mobile_no,
				'username'=>$par_username,
				'password'=>$par_password,
				'address'=>$par_address,
				'gender'=>$par_gender,
				'img_name'=>$pdisplaypicture,
				'user_type'=> 5
				
			);	
			
			$this->User_model->add_record($data);
			
			$data =array
			(
				'count'=> (int)$std_roll_num + 1,
				
			);
			$this->Student_model->update_class_count($data,$std_class_id,$std_section_id);
			
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-check"></i> Record Added Successfully.
			  </div>
			  ');
			
			redirect(base_url().'Students/grid_view/'.$_SESSION['CLSID'].'/'.$_SESSION['SECID']); 

		}
		
	}
	
	public function updateStudent()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		
		//GET DATA FROM TABLE
		$data['student_row'] = $this->Students_model->get_record_by_id($id);
		$data['parent_row'] = $this->Students_model->get_parent_record_by_id($id);
		
		
		$data['cbo_class'] = $this->Combo_model->cbo_class();
		$data['cbo_sex'] = $this->Combo_model->cbo_sex();
		$data['pcbo_sex'] = $this->Combo_model->cbo_sex();
		$data['cbo_blood_group'] = $this->Combo_model->cbo_blood_group();
		//print_r($data['cbo_blood_group']);
		$data['cbo_country'] = $this->Combo_model->cbo_country();
		$data['percbo_country'] = $this->Combo_model->cbo_country();
		$data['percbo_blood_group'] = $this->Combo_model->cbo_blood_group();
	
	    // Field Validation
		$this->form_validation->set_rules('admission_no','Admission Number','required');
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('middlename','Middle Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_rules('email','Email Id','required|valid_email');
		$this->form_validation->set_rules('address','Current Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('cbo_country','Country','required');
		$this->form_validation->set_rules('zipcode','Zipcode','required|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('peraddress','Current Address','required');
		$this->form_validation->set_rules('percity','City','required');
		$this->form_validation->set_rules('percbo_country','Country','required');
		$this->form_validation->set_rules('perzipcode','Zipcode','required|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('cbo_sex','Gender','required');
		$this->form_validation->set_rules('doj','Date of Joining','required');
		$this->form_validation->set_rules('pphone','Phone Number','required');
		$this->form_validation->set_rules('pfirstname','First Name','required');
		$this->form_validation->set_rules('pmiddlename','Middle Name','required');
		$this->form_validation->set_rules('plastname','Last Name','required');
		$this->form_validation->set_rules('pemail','Email Id','required|valid_email');
		$this->form_validation->set_rules('pdob','Date Of Birth','required');
		$this->form_validation->set_rules('pcbo_sex','Gender','required');
		$this->form_validation->set_rules('pqual','Qualification','required');
		$this->form_validation->set_rules('profession','Profession','required');
		
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Update Student";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Students/UpdateStudent',$data);
			$this->load->view('Home/footer');
		}
		else
		{
		
		//UPLOAD STARTS
			$config['upload_path'] = './upload/Profile/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = TRUE;
			//$config['max_size'] = '';
			
			$this->load->library('upload', $config);
			
			
			
			//IMAGE UPLOAD
			$displaypicture =$this->input->post('displaypicture_hidden');
			if( !$this->upload->do_upload('displaypicture') ){
				//echo "n";
				//print_r($this->upload->display_errors());
			}else{
				//echo "y";
				$displaypicture = $_FILES['displaypicture']['name'];
			}
			
			//IMAGE UPLOAD
			$pdisplaypicture =$this->input->post('pdisplaypicture_hidden');
			if( !$this->upload->do_upload('pdisplaypicture') ){
				//echo "n";
				//print_r($this->upload->display_errors());
			}else{
				//echo "y";
				$pdisplaypicture = $_FILES['pdisplaypicture']['name'];
			}
			
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
				$this->Students_model->edit_record($id,$data);
			
		$data =array
			(
				'user_type'=>'Student',
				'first_name'=>$this->input->post('firstname'),
				'middle_name'=>$this->input->post('middlename'),
				'last_name'=>$this->input->post('lastname'),
				'email'=>$this->input->post('email'),
				'date_of_birth'=>$this->input->post('dob'),
				'gender_id'=>$this->input->post('cbo_sex'),
				'address'=>$this->input->post('address'),
				'city'=>$this->input->post('city'),
				'country_id'=>$this->input->post('cbo_country'),
				'zipcode'=>$this->input->post('zipcode'),
				'per_address'=>$this->input->post('peraddress'),
				'per_city'=>$this->input->post('percity'),
				'per_country_id'=>$this->input->post('percbo_country'),
				'per_zipcode'=>$this->input->post('perzipcode'),
				'phone'=>$this->input->post('phone'),
				'blood_group_id'=>$this->input->post('cbo_blood_group'),
				'date_of_leaving'=>$this->input->post('dol'),
				'displaypicture'=>$displaypicture
				
			);	
			//print_r('blood_group_id');			
			$this->Students_model->edit_record($id,$data);
			
			$data =array
			(
				'user_type'=>'Parents',
				'first_name'=>$this->input->post('pfirstname'),
				'middle_name'=>$this->input->post('pmiddlename'),
				'last_name'=>$this->input->post('plastname'),
				'email'=>$this->input->post('pemail'),
				'date_of_birth'=>$this->input->post('pdob'),
				'gender_id'=>$this->input->post('pcbo_sex'),
				'phone'=>$this->input->post('pphone'),
				'blood_group_id'=>$this->input->post('percbo_blood_group'),
				'qualification'=>$this->input->post('pqual'),
				'profession'=>$this->input->post('profession'),
				'displaypicture'=>$pdisplaypicture,
				'student_id'=>$id,
				
			);	
			
			$this->Students_model->edit_parent_record($id,$data);
			
			$$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-check"></i> Record Added Successfully.
			  </div>
			  ');
			redirect(base_url().'Students/grid_view/'.$_SESSION['CLSID'].'/'.$_SESSION['SECID']); 
			
		}		
	}
	
	public function grid_view()
	{
		$id = $this->uri->segment(3);
		$secid = $this->uri->segment(4); 
		$_SESSION['CLSID'] = $id;
		$_SESSION['SECID'] = $secid;
		if ($id==0)
		{
			$this->index();			
		}	
		$data['title'] = $_SESSION['TITLE'].''."- Student list";
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['student'] = $this->Students_model->view_record($order_by,$id,$secid);
		$data['title'] = $_SESSION['TITLE'].''."- Student List";
		$data['selected_class'] = $this->Dashboard_model->get_selected_class_record('',$id);
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Students/StudentsList',$data);
		$this->load->view('Home/footer');	
	}
	
	public function parent_grid_view()
	{
		$data['title'] = $_SESSION['TITLE'].''."- Student list";
		//GET DATA FROM TABLE
		$order_by = 'DESC';	
		//$usertype = 'Admin';	
		$data['parent'] = $this->Students_model->view_parent_record('');
				
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu');
		$this->load->view('Students/ParentsList',$data);
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
		
		redirect(base_url().'index.php/Students/grid_view'); 
	}
	
	public function single_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['student_row'] = $this->Students_model->get_single_view($id);
		$data['parent_row'] = $this->Students_model->get_parent_single_view($id);
		$data['title'] = $_SESSION['TITLE'].''."- Student List";
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Students/student_view',$data);
		$this->load->view('Home/footer');	
	}
	
	public function single_parent_view()
	{
		$id = $this->uri->segment(3);
	
		if (empty($id))
		{
			show_404();
		}
		
		//GET DATA FROM TABLE
		$data['student_row'] = $this->Students_model->get_single_view($id);
		$data['parent_row'] = $this->Students_model->get_parent_single_view($id);
		$data['title'] = $_SESSION['TITLE'].''."- Student List";
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Students/parent_view',$data);
		$this->load->view('Home/footer');	
	}
	
	
}
