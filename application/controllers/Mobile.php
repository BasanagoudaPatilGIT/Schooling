<?php 
class Mobile extends CI_Controller {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->model('Mobile_model');
		$this->load->model('Product_model');
		$this->load->library('encrypt');	
		
	}
	
	
	function validate_credentials()
	{
		
		$this->load->model('Mobile_model');	
		//$email_id = $this->input->post('email_id');
		//$imei = $this->input->post('imei');
		//$password = base64_encode($this->input->post('password'));
		$email_id = "vinod@gmail.com";
		$imei = 0;
		$password = base64_encode("9964546749");
		
		$query = $this->Mobile_model->validate($email_id,$password,$imei);
		//echo $this->input->post('username');
		//print_r( $query );
		
		//Form Validation
		
		if($query)
		{
			$data['login'] = $this->Mobile_model->get_user_detail($email_id,$password);
			$mobilogin = 1;
			$userid = $data['login']['id'];
			//$mobilogin = $this->input->post('mobi_login');
			//$userid = $this->input->post('userid');
			$data = array(
							'mobi_login' => $mobilogin
							);
							
			$this->Mobile_model->update_logout($data,$userid);
			$data['login'] = $this->Mobile_model->get_user_detail($email_id,$password);
			//print_r($login);
			$user_array[] = array('userId' => $data['login']['id'],
									'name' => $data['login']['first_name'].' '.$data['login']['last_name'],
									'mobileNo' => $data['login']['mobile_no'],
									'emailId' => $data['login']['email_id'],
									'imageName' => $data['login']['img_name'],
									'designation' => $data['login']['designation'],
									'speciality' => $data['login']['speciality'],
									'abtSpeciality' => $data['login']['abtspeciality'],
			);
			
			$menu_array[] = array(
								  'mypurchase' => "Order",
								  'stockDetails' => "Stock",
								  'addProduct' => "New Medicine",
								  'mobiInvoice' => "Invoice",
								  'mobiLogout' => "Logout"
			);
			
			$auto_code= $this->Product_model->get_productcode(1);
		
			$product_code_data[] = array('prodcode' => $auto_code
					);
		
			$mobile_login_data[] = array('userDetails' => $user_array,
									 'menuDetails' => $menu_array,
									 'productCode' => $product_code_data
				);
			print_r(json_encode($mobile_login_data));
			}
		else
		{
			$login_failed_data[] = array('loginFailed' => 'Invalid Credentials',
				);
			print_r(json_encode($login_failed_data));				
		}
	}
	
	
	public function mypurchase()
	{
		$userid = 2;
		//$userid = $this->input->post('userId');
		$lowstock = $this->Mobile_model->low_stock_details($userid);				
		
		if(count($lowstock) >0){
		foreach($lowstock as $row)
		$low_stock[] = array('product_id' =>$row['id'],
								'product_code' => $row['product_code'],
								'product_name' =>  $row['product_name'],
								'product_qty' => $row['product_qty'],
								'createddatetime' => $row['createddatetime'],
								'status' => $row['status'],
								'user_id' => $row['user_id'],
								'qtylimit' => $row['qtylimit'],
								'packdate' => $row['packdate'],
								'expirydate' => $row['expirydate'],
								'stripsinbox' => $row['stripsinbox'],
								'pcsinstrip' => $row['pcsinstrip'],
								'mrp' => $row['mrp'],
								'salerate' => $row['salerate'],
								'purrate' => $row['purrate'],
								'abtproduct' => $row['abtproduct'],
								'batchno' => $row['batchno'],
								'tax_percent' => $row['tax_percent']
		
		);
		
		$low_stock_data[] = array('product_search' => 'Medicine Search', 
								  'lowstock' => $low_stock
				);
				
		echo json_encode($low_stock_data);
		}else{
		$no_low_stock_data[] = array('noItems' => 'No Items Found.');
				
		echo json_encode($no_low_stock_data);
		}
	}
	
	public function stockdetails()
	{
		//$userid = 2;
		$userid = $this->input->post('userId');
		$stock = $this->Mobile_model->stock_details('DESC',$userid);				
		
		if(count($stock) >0){
		foreach($stock as $row)
		$all_stock[] = array('product_id' =>$row['id'],
								'product_code' => $row['product_code'],
								'product_name' =>  $row['product_name'],
								'product_qty' => $row['product_qty'],
								'createddatetime' => $row['createddatetime'],
								'status' => $row['status'],
								'user_id' => $row['user_id'],
								'qtylimit' => $row['qtylimit'],
								'packdate' => $row['packdate'],
								'expirydate' => $row['expirydate'],
								'stripsinbox' => $row['stripsinbox'],
								'pcsinstrip' => $row['pcsinstrip'],
								'mrp' => $row['mrp'],
								'salerate' => $row['salerate'],
								'purrate' => $row['purrate'],
								'abtproduct' => $row['abtproduct'],
								'batchno' => $row['batchno'],
								'tax_percent' => $row['tax_percent']
		
		);
		
		$all_stock_data[] = array('product_search' => 'Medicine Search',
								  'stockdetails' => $all_stock
				);
				
		echo json_encode($all_stock_data);
		}else{
		$no_stock_data[] = array('noItems' => 'No Items Found.'
				);
				
		echo json_encode($no_stock_data);
		}
	}
	
	
	public function product_search()
	{
		$userid = $this->input->post('userId');
		$product = $this->input->post('productName');
		$feature = $this->input->post('featureName');
		//$feature = 'stockdetails';
		//$userid = '2';
		//$product = 'Celin';
		if($feature == 'stockdetails'){
		$proddetails = $this->Mobile_model->auto_featch_all_stock($product, $userid);
		}else if($feature == 'mypurchase'){
		$proddetails = $this->Mobile_model->auto_featch_low_stock($product, $userid);
		}
		if(count($proddetails) >0){
		foreach($proddetails as $row)
		$stockinbox = (int)$row->product_qty /((int)$row->stripsinbox * (int)$row->pcsinstrip);
		$stockinstrips = (int)$row->product_qty /(int)$row->pcsinstrip;
		
		$result_array[] = array('label' => $row->product_name,
								'product_id' => $row->id,
								'product_code' => $row->product_code,
								'batchno' => $row->batchno,
								'product_qty' => $row->product_qty,
								'price' => $row->salerate,
								'tax' => $row->tax_percent,
								'stripsinbox' =>$row->stripsinbox,
								'pcsinstrip' =>$row->pcsinstrip,
								'stockinbox' =>(int)$stockinbox,
								'stockinstrips' =>(int)$stockinstrips,
								'createddatetime' => $row->createddatetime,
								'status' => $row->status,
								'user_id' => $row->user_id,
								'qtylimit' => $row->qtylimit,
								'packdate' => $row->packdate,
								'expirydate' => $row->expirydate,
								'mrp' => $row->mrp,
								'salerate' => $row->salerate,
								'purrate' => $row->purrate,
								'abtproduct' => $row->abtproduct,
								'batchno' => $row->batchno,
		);
		
		echo json_encode($result_array);
		}
					
		
	}
	
	public function addproduct()
	{
	    
		//print_r($data['auto_code']['continues_count']);
		// Field Validation
		$this->form_validation->set_rules('productname','Product Name','required');
		$this->form_validation->set_rules('productqty','Product Qty','required|numeric');
		$this->form_validation->set_rules('mrp','MRP','required|decimal');
		$this->form_validation->set_rules('purrate','Purchase Rate','required|decimal');
		$this->form_validation->set_rules('salerate','Sale Rate','required|decimal');
		$this->form_validation->set_rules('packdate','Pack Date','required');
		$this->form_validation->set_rules('expdate','Expiry Date','required');
		$this->form_validation->set_rules('cbo_uom','Product UOM','required');
		$this->form_validation->set_rules('strips','Strips in Boxs.','required|numeric|is_natural_no_zero');
		$this->form_validation->set_rules('pcs','Pcs in Stript.','required|numeric|is_natural_no_zero');
		$this->form_validation->set_rules('qtylmt','Quantity Limit','required|numeric|is_natural_no_zero');
		$this->form_validation->set_rules('taxper','Tax Percent','required|decimal');
		

		$uom = $this->input->post('cbo_uom');
		$prodqty = $this->input->post('productqty');
		$userId = $this->input->post('userId');
		print_r($uom);
		if($uom === 'Box'){
			//print_r($uom);
			$prodqty = $this->input->post('productqty') * $this->input->post('strips') * $this->input->post('pcs');
		}elseif($uom === 'Strips'){
			//print_r($uom);
			$prodqty = $this->input->post('productqty') * $this->input->post('pcs');
		}elseif($uom === 'Pcs'){
			//print_r($uom);
			$prodqty = $this->input->post('productqty');
		}
		
		$batchno = $this->input->post('productcode').'-'.(String)$this->input->post('expdate').'-'.(int)$this->input->post('mrp').'-'.(int)$this->input->post('purrate').'-'.(int)$this->input->post('salerate');
		
		
		$datestring = date('Y-m-d');
		$data =array
			(
				'status'=>'Active',
				'user_id'=>$userId,
				'product_code'=>$this->input->post('productcode'),
				'product_name'=>$this->input->post('productname'),
				'product_qty'=>$prodqty,
				'abtproduct'=>$this->input->post('abtproduct'),
				'batchno'=>$batchno,
				'mrp'=>$this->input->post('mrp'),
				'purrate'=>$this->input->post('purrate'),
				'salerate'=>$this->input->post('salerate'),
				'packdate'=>$this->input->post('packdate'),
				'expirydate'=>$this->input->post('expdate'),
				'stripsinbox'=>$this->input->post('strips'),
				'pcsinstrip'=>$this->input->post('pcs'),
				'qtylimit'=>$this->input->post('qtylmt'),
				'tax_percent'=>$this->input->post('taxper')
				
			);	
			$this->Product_model->add_record($data);			
			$data =array
			(
				'last_updated'=>mdate($datestring)
			);
		
			$this->Product_model->incriment_productcode_no($data,1,$userId);
			
			$new_product_added[] = array('prodAdded' => 'New medicine added successfully'
				);
				
			echo json_encode($no_stock_data);
	}
	
	public function mobiLogout()
	{
		$mobilogin = 0;
		//$userid = 2;
		$userid = $this->input->post('userId');
		$data = array(
						'mobi_login' => $mobilogin
						);
						
		$this->Mobile_model->update_logout($data,$userid);				
		
	}
}
