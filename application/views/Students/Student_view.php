<div class="content-wrapper">
  <section class="content" >
  <div class="box">
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-address-card-o"></i> Student Details</h3>
		<a class="btn btn-sm btn-primary pull-right" href="<?php echo base_url(); ?>Students/grid_view/<?php echo $_SESSION['CLSID'] ?>/<?php echo $_SESSION['SECID'] ?>"> <i class="fa fa-arrow-left"></i> Back</a> 
     </div>
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
		src="<?php echo base_url() ?>/upload/profile/<?php echo $student_row['displaypicture']; ?>"/></div>
		</div>
	</div>
		<div class="col-sm-9">
			<!--panel heading-->
			<div class="box-header with-border">
			 <h4 class="box-title">Student Details :</h4> 
			</div><!--panel heading end-->

			<!--main panel body-->
			<div class="box-body">
			<div class="col-sm-6"> 
			<div class="col-sm-12 form-group ">
			<label>Roll Number :</label>
			<?php echo $student_row['roll_num']?>&nbsp;
			</div>
			<div class="col-sm-12 form-group ">
			<label>Name :</label>
			<?php echo $student_row['first_name']?>&nbsp;
			<?php echo $student_row['middle_name']?>&nbsp;
			<?php echo $student_row['last_name']?>&nbsp;
			</div>
			<div class="col-sm-12 form-group">
			<label>Class :</label>
			<?php echo $student_row['class_name']; echo " - "; echo $student_row['class_section']?>&nbsp;
			</div>
			<div class="col-sm-12 form-group ">
			<label>Parent Name :</label>
			<?php echo $parent_row['first_name']?>&nbsp;
			<?php echo $parent_row['middle_name']?>&nbsp;
			<?php echo $parent_row['last_name']?>&nbsp;
			</div>
			<div class="col-sm-12 form-group ">
			<label>Date Of Birth  :</label>
			<?php echo $student_row['date_of_birth']?>&nbsp;
			</div>
			<div class="col-sm-12 form-group ">
			<label>Gender :</label>
			<?php echo $student_row['gender_type']?>&nbsp;
			</div> 
			<div class="col-sm-12 form-group ">
			<label>Mobile :</label>
			<?php echo $student_row['phone']?>&nbsp;
			</div> 
			</div>
			<div class="col-sm-6">
			<div class="col-sm-12 form-group ">
			<label>Address :</label>
			<?php echo $student_row['address']?>&nbsp;
			</div>

			<div class="col-sm-12 form-group ">
			<label>City :</label>
			<?php echo $student_row['city'] ?>&nbsp;
			</div> 

			<div class="col-sm-12 form-group ">
			<label>Country :</label>
			<?php echo $student_row['country_name'] ?>&nbsp;
			</div>  
			<div class="col-sm-12 form-group">
			<label>Zipcode :</label>
			<?php echo $student_row['zipcode'] ?>&nbsp;

			</div>



			<div class="col-sm-12 form-group ">
			<label>Email ID :</label>
			<a> <?php echo $student_row['email']?>&nbsp;</a>
			</div>

			</div>
			</div>
			</div>
		
		
		
  </div>
</div>
	</section>
</div>



