<div class="content-wrapper">
  <section class="content" >
  <div class="box">
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-users"></i> Parent Details</h3>
		<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>Students/parent_grid_view"> <i class="fa fa-arrow-left"></i> Back</a> </div> 
     </div>

  
  <div class="box">
	<div class="box-body">
	<div class="col-sm-3">
		<div class="box-header with-border">
		 <h4 class="box-title"> Profile :</h4> 
		</div><!--panel heading end-->

		<!--main panel body-->
		<div class="box-body" style="min-height:360px;">
		<div class="col-sm-12" style="padding-left:30px;">
		<img class="img-responsive col-sm-10 img-thumbnail" 
		src="<?php echo base_url() ?>/upload/profile/<?php echo $parent_row['displaypicture']; ?>"/></div>
		</div>
	</div>
	<div class="col-sm-9">
		<!--panel heading-->
		<div class="box-header with-border">
		 <h4 class="box-title">Parent Details :</h4> 
		</div><!--panel heading end-->

		<!--main panel body-->
		<div class="box-body">
									  <div class="col-sm-6"> 
									   <div class="col-sm-12 form-group ">
										<label>Name:</label>
										<?php echo $parent_row['first_name']?>&nbsp;
										<?php echo $parent_row['middle_name']?>&nbsp;
										<?php echo $parent_row['last_name']?>&nbsp;
										</div>
										<div class="col-sm-12 form-group ">
										<label>Qualification:</label>
										<?php echo $parent_row['qualification']?>&nbsp;
										</div>
										<div class="col-sm-12 form-group ">
										<label>Profession:</label>
										<?php echo $parent_row['profession']?>&nbsp;
										</div>
										<div class="col-sm-12 form-group ">
										<label>Date Of Birth:</label>
										<?php echo $parent_row['date_of_birth']?>&nbsp;
										</div>
										<div class="col-sm-12 form-group ">
										<label>Gender:</label>
										<?php echo $parent_row['gender_type']?>&nbsp;
										</div> 
										
										<div class="col-sm-12 form-group ">
											<label>Mobile:</label>
											<?php echo $parent_row['phone']?>&nbsp;
										</div> 
										</div>
										 <div class="col-sm-6">
										<div class="col-sm-12 form-group ">
											<label>Address:</label>
											<?php echo $parent_row['per_address']?>&nbsp;
										</div>
								 
										<div class="col-sm-12 form-group ">
											<label>City:</label>
										   <?php echo $parent_row['per_city'] ?>&nbsp;
										</div> 
										
										<div class="col-sm-12 form-group ">
											<label>Country:</label>
											<?php echo $parent_row['country_name'] ?>&nbsp;
										</div>  
										 <div class="col-sm-12 form-group">
											<label>Zipcode:</label>
										   <?php echo $parent_row['per_zipcode'] ?>&nbsp;
										   
										</div>
										
											
										
										<div class="col-sm-12 form-group ">
											<label>Email ID:</label>
										   <a> <?php echo $parent_row['email']?>&nbsp;</a>
										</div>
										 
										</div>
										</div>
		</div>
		
		
		
  </div>
</div>



</section>
</div>
<!-- /.content-wrapper -->
