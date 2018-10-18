<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		$this->load->model('Event_model');
		$this->load->model('Dashboard_model');
		
	}
	
	public function eventdetails()
	{
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$order_by = 'DESC';	
		$user_id = $_SESSION['ID'];
		$data['event'] = $this->Event_model->view_record($order_by);
		//echo "<pre>";
		//print_r($data['event']);
		//echo "</pre>";
		$data['event_images'] = $this->Event_model->first_image_view_record($order_by,$user_id);
		$data['event_images_all'] = $this->Event_model->images_view_record($user_id);
		
		
		$this->form_validation->set_rules('event_name','Event Name','required');
		$this->form_validation->set_rules('about_event','About Event','required');
		
		
		if(($this->form_validation->run())==false)
		{
			$data['title'] = $_SESSION['TITLE'].''."- Event details";
			$data['class_list'] = $this->Dashboard_model->get_class_record();
			$this->load->view('Home/header',$data);
			$this->load->view('Home/menu',$data);
			$this->load->view('Event/grid_view',$data);
			$this->load->view('Home/footer');
		}
		else
		{
			$config['upload_path'] = './upload/event';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['overwrite'] = TRUE;
			//$config['max_size'] = '2048';
			$this->load->library('upload', $config);
			
			$time = time();
			
		$data =array
			(
				'event_created_by'=>$_SESSION['ID'],
				'event_name'=>$this->input->post('event_name'),
				'about_event'=>$this->input->post('about_event'),
				'created_date' => date('Y-m-d'),
				//'created_time' => mdate(time())
			);
			$this->Event_model->add_record($data);
			
			$sub_id = 1;
			$this->db->select_max('id');
			$query = $this->db->get('tab_event');
			$row = $query->row();
			if (isset($row))
			{
				$sub_id = $row->id;
			}
			
			$files = $_FILES;
			$cpt = count($_FILES['image_name']['name']);
			for($j=0; $j<$cpt; $j++)
			{
				$_FILES['image_name']['name']= $files['image_name']['name'][$j];
				$_FILES['image_name']['type']= $files['image_name']['type'][$j];
				$_FILES['image_name']['tmp_name']= $files['image_name']['tmp_name'][$j];
				$_FILES['image_name']['error']= $files['image_name']['error'][$j];
				$_FILES['image_name']['size']= $files['image_name']['size'][$j];
				//$this->upload->initialize($this->set_catalogue_upload_options());
				//$this->upload->do_upload();
				if ( !$this->upload->do_upload('image_name') )
				{
					$error = array('error_image' => $this->upload->display_errors());
					
				}
				else
				{
					
				
					$fileName = $_FILES['image_name']['name'];
					
					$data =array
					(
						
						'event_id'=>$sub_id,
						'image_name'=>$fileName,
					);
					$this->Event_model->add_event_images_record($data);
				}
			}
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon fa fa-times"></i></button>
				
				<i class="icon fa fa-check"></i> Record Added Successfully.
			  </div>
			  ');
			
			redirect(base_url().'Event/eventdetails'); 
		}
	}
}
