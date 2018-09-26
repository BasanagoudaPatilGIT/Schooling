<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
		if (!isset( $_SESSION['IS_LOGGED_IN'] )) { 
			redirect(base_url().'index.php'); 
		}
		$this->load->model('Dashboard_model');
		
	}
	public function index()
	{
		$data['title'] = $_SESSION['TITLE'].''."- Dashboard";
		$data['class_list'] = $this->Dashboard_model->get_class_record();
		$this->load->view('Home/header',$data);
		$this->load->view('Home/menu',$data);
		$this->load->view('Dashboard/dashboard');
		$this->load->view('Home/footer');
	}
}
