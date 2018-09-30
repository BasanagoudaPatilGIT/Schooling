<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
	<div class="box">
    <!-- left column -->
    <!-- general form elements -->
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-address-card-o"></i> Update Student</h3>
      </div>
      <!-- /.box-header -->
	</div><!-- div class="box" -->
	  
	  <div class="box">
	
    <div class="box-body">
      <!-- general form elements -->
      <!-- form start -->
      <form role="form" method="post" action="<?php echo base_url()?>Students/updateStudent/<?php echo $student_row['id'] ?>" enctype="multipart/form-data">
        <div class="box-body">
          <div class="col-sm-6">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Personal Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="firstname">First Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" 
				  value="<?php echo $student_row['first_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('firstname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="middlename">Middle Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" 
				  value="<?php echo $student_row['middle_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('middlename','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="lastname">Last Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" 
				  value="<?php echo $student_row['last_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('lastname','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  <div class="form-group">
                  <label for="Email">Email Address</label>
                  <span style="color:#FF0000">*</span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" 
				  value="<?php echo $student_row['email']?>" onkeyup="ValidateEmail(this)">
				  <?php echo form_error('email','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="dateofbirth">Date of Birth</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="dob" name="dob" placeholder="Date of Birth" 
				  value="<?php echo $student_row['date_of_birth']?>"><?php echo form_error('dob','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="gender">Gender</label>
				  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_sex" name = "cbo_sex"';
                        echo form_dropdown('cbo_sex',$cbo_sex, $student_row['gender_id'], $attributes);
                   ?>
                 <?php echo form_error('cbo_sex','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
                
			  
              <div class="form-group">
                <label for="Address" >Current Address</label>
                  <span style="color:#FF0000">*</span>
                <input type="text" name="address" id="address" class="form-control" placeholder="Current Address"
				 value="<?php echo $student_row['address']?>"><?php echo form_error('address','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="CityName">City Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City Name" value="<?php echo $student_row['city']?>">
				  <?php echo form_error('city','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Country">Country</label>
                  <span style="color:#FF0000">*</span>
                  <?php
                            $attributes = 'class = "form-control" id = "cbo_country" ';
                            echo form_dropdown('cbo_country',$cbo_country,$student_row['country_id'], $attributes);
                        ?>
						<?php echo form_error('cbo_country','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Zipcode">Zipcode</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="<?php echo $student_row['zipcode']?>">
				  <?php echo form_error('zipcode','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  <div class="form-group">
                <label for="PAddress" >Parmanent Address</label>
                  <span style="color:#FF0000">*</span><br />
                <input type="text" name="peraddress" id="peraddress" class="form-control" placeholder="Parmanent Address" 
				value="<?php echo $student_row['per_address']?>"><?php echo form_error('peraddress','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="PCityName">City Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="percity" name="percity" placeholder="City Name" 
				  value="<?php echo $student_row['per_city']?>">
				  <?php echo form_error('percity','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Country">Country</label>
                  <span style="color:#FF0000">*</span>
                  <?php
                            $attributes = 'class = "form-control" id = "percbo_country" ';
                            echo form_dropdown('percbo_country',$cbo_country,$student_row['per_country_id'], $attributes);
                        ?>
						<?php echo form_error('percbo_country','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Zipcode">Zipcode</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="perzipcode" name="perzipcode" placeholder="Zipcode" 
				  value="<?php echo $student_row['per_zipcode']?>"><?php echo form_error('perzipcode','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="phone">Phone Number (Optional)</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $student_row['phone']?>" onkeyup="isnum(this)">
                </div>
                <div class="form-group col-sm-6">
                  <label for="bloodgroup">Blood Group (Optional)</label>
                  <?php $attributes = 'class = "form-control" id = "cbo_blood_group" name = "cbo_blood_group"';
                        echo form_dropdown('cbo_blood_group',$cbo_blood_group,$student_row['blood_group_id'], $attributes);
                   ?>
                </div>
              </div>
               <input type="hidden" class="form-control" id="username" name="username" placeholder="Username" 
				value="" onkeyup="isalphanum(this)">
				<input type="hidden" class="form-control" id="password" name="password" placeholder="Password" 
				  value="" 
				  onkeyup="isalphanum(this)">
                
              
              <div class="form-group col-sm-6">
                <label for="displaypicture"> Profile Image </label>
                </br>
                <label class="customUpload btnUpload  btn btn-success"  style="color: #ffffff;  margin-right: 10px;"> 
				<span class="logo-label"><i class="fa fa-upload" aria-hidden="true"></i> Choose File </span>
                <input class="upload" type="file" id="displaypicture" name="displaypicture" 
				value="<?php echo $student_row['displaypicture']?>" accept="image/jpg, image/jpeg, image/png"/>
                </label>
                <p id="test" style="color:red"></p>
                <p class="help-block">* Only JPEG and JPG supported </p>
                <p class="help-block">* Max 3 MB Upload </p>
              </div>
			  <div class="col-sm-6 form-group">
                    <label>Profile Image </label>
                    <br />
                    <input type="hidden" name="displaypicture_hidden"  
                        value="<?php echo $student_row['displaypicture']; ?>"/>
                    <?php if( $student_row['displaypicture'] == ''){ ?>
                    <img class=" img-responsive col-sm-4" src="<?php echo base_url() ?>upload/profile/Capture.JPG"/>
                    <?php }else{ ?>
                    <img class=" img-responsive col-sm-4" 
                        src="<?php echo base_url() ?>upload/profile/<?php echo $student_row['displaypicture']; ?>"/>
                    <?php } ?>
                  </div>
            </div>
          </div>
          <div class="col-sm-6">
          <div class="h4"><i class="fa fa-building" aria-hidden="true"></i> School Details</div>
          <div class="panel panel-primary col-sm-12"  style="padding:12px;">
		  <div class="row">
		  <div class="form-group col-sm-12">
                  <label for="firstname">Admission number: </label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="admission_no" name="admission_no" placeholder="Admission Number"  disabled=""
				  value="<?php echo $student_row['admission_no']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('admission_no','<div style="color:#FF0000;">','</div>'); ?> 
				  </div>
				<div class="col-sm-6 form-group">
                <label for="Class">Class</label>
				<?php $attributes = 'class = "form-control" id = "cbo_class" name = "cbo_class" disabled=""';
                        echo form_dropdown('cbo_class',$cbo_class,$student_row['class_id'], $attributes);
                   ?>
              </div>
			  <div class="col-sm-6 form-group">
                <label for="section">Section</label>
				<input type="text" class="form-control" id="section" name="section" placeholder="Section" disabled="" value="<?php echo set_value('section')?>">
              </div>
              <div class="col-sm-6 form-group">
                <label for="empcode">Roll Nummber</label>
                <input type="text" class="form-control" id="rollnum" name="rollnum" disabled="" placeholder="Roll Number" value="<?php echo $student_row['roll_num']?>">
              </div>
			  <div class="col-sm-6 form-group">
                <label for="Doj">Date of Joining</label>
                <input type="text"  class="form-control " id="doj" name="doj" placeholder="Date of Join" disabled=""
				value="<?php echo $student_row['date_of_joining']?>">
              </div>
              <div class="col-sm-6 form-group">
                <label for="Doj">Date of Leaving</label>
				<?php if($student_row['date_of_leaving'] == '0000-00-00' ){?>
                <input type="text"  class="form-control datepicker" id="doj" name="doj" placeholder="Date of Leaving"  
				value="<?php echo set_value('admission_no')?>">
				<?php }else {?>
				<input type="text"  class="form-control datepicker" id="doj" name="doj" placeholder="Date of Leaving"  
				value="<?php echo $student_row['date_of_leaving']?>">
				 <?php }?>
              </div>
              <?php if(strtoupper($_SESSION['USER_TYPE']) == 'ADMIN' ){?>
                  <div class="col-sm-6 form-group">
                    <label for="Status">Status </label>
                    <?php
							$cbo_status = 
							 array(   
							 			'Active' => 'Active',
									    'InActive' =>'InActive'
									  
									);
							$attributes = 'class = "form-control" id = "cbo_status"';
							echo form_dropdown('cbo_status',$cbo_status, $student_row['status'], $attributes);
							   ?>
							   
							 
                  </div>
                  <?php }?>
            </div>
            
          </div>
        </div>
		<div class="col-sm-6">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Parent Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="firstname">First Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="pfirstname" name="pfirstname" placeholder="First Name" 
				  value="<?php echo $parent_row['first_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('pfirstname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="middlename">Middle Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="pmiddlename" name="pmiddlename" placeholder="Middle Name" 
				  value="<?php echo $parent_row['middle_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('pmiddlename','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="lastname">Last Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="plastname" name="plastname" placeholder="Last Name" 
				  value="<?php echo $parent_row['last_name']?>" onkeyup="isalpha(this)">
                  <?php echo form_error('plastname','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  <div class="form-group">
                  <label for="Email">Email Address</label>
                  <span style="color:#FF0000">*</span>
                  <input type="email" class="form-control" id="pemail" name="pemail" placeholder="Email" 
				  value="<?php echo $parent_row['email']?>" onkeyup="ValidateEmail(this)">
				  <?php echo form_error('pemail','<div style="color:#FF0000;">','</div>'); ?>
                </div>
             <div class="row">
                <div class="form-group col-sm-6">
                  <label for="dateofbirth">Date of Birth</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="pdob" name="pdob" placeholder="Date of Birth" 
				  value="<?php echo $parent_row['date_of_birth']?>"><?php echo form_error('pdob','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="gender">Gender</label>
				  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "pcbo_sex" name = "pcbo_sex"';
                        echo form_dropdown('pcbo_sex',$pcbo_sex,$parent_row['gender_id'], $attributes);
                   ?>
                 <?php echo form_error('pcbo_sex','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
                
			  <div class="row">
                <div class="form-group col-sm-6">
                  <label for="phone">Phone Number</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="pphone" name="pphone" placeholder="Phone Number" 
				  value="<?php echo $parent_row['phone']?>" 
				  onkeyup="isnum(this)"><?php echo form_error('pphone','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="bloodgroup">Blood Group (Optional)</label>
                  <?php $attributes = 'class = "form-control" id = "percbo_blood_group" name = "percbo_blood_group"';
                        echo form_dropdown('percbo_blood_group',$percbo_blood_group,$parent_row['blood_group_id'], $attributes);
                   ?>
                 
                </div>
              </div>
              <input type="hidden" class="form-control" id="pusername" name="pusername" placeholder="Username" 
			  value="" onkeyup="isalphanum(this)">
             <input type="hidden" class="form-control" id="ppassword" name="ppassword" placeholder="Password" 
			 value="" onkeyup="isalphanum(this)">
			  <div class="row">
              <div class="form-group col-sm-6">
                <label for="educ">Qualification</label><span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="pqual" name="pqual" placeholder="Highest Education Degree" 
				value="<?php echo $parent_row['qualification']?>" 
				onkeyup="isalphanum(this)"><?php echo form_error('pqual','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  <div class="form-group col-sm-6">
                <label for="educ">Profession</label><span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession" 
				value="<?php echo $parent_row['profession']?>" 
				onkeyup="isalphanum(this)"><?php echo form_error('profession','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  </div>
              <div class="form-group col-sm-6">
                <label for="displaypicture"> Profile Image </label>
                </br>
                <label class="customUpload btnUpload  btn btn-success"  style="color: #ffffff;  margin-right: 10px;"> 
				<span class="logo-label"><i class="fa fa-upload" aria-hidden="true"></i> Choose File </span>
                <input  class="upload" type="file" id="pdisplaypicture" name="pdisplaypicture" 
				value="<?php echo $parent_row['displaypicture']?>" accept="image/jpg, image/jpeg, image/png"/>
                </label>
                <p id="test" style="color:red"></p>
                <p class="help-block">* Only JPEG and JPG supported </p>
                <p class="help-block">* Max 3 MB Upload </p>
              </div>
			  <div class="col-sm-6 form-group">
                    <label>Profile Image </label>
                    <br />
                    <input type="hidden" name="pdisplaypicture_hidden"  
                        value="<?php echo $parent_row['displaypicture']?>"/>
                    <?php if( $parent_row['displaypicture'] == ''){ ?>
                    <img class=" img-responsive col-sm-4" src="<?php echo base_url() ?>upload/profile/Capture.JPG"/>
                    <?php }else{ ?>
                    <img class=" img-responsive col-sm-4" 
                        src="<?php echo base_url() ?>upload/profile/<?php echo $parent_row['displaypicture'] ?>"/>
                    <?php } ?>
                  </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary">Save</button>
          <button type="reset" class="btn btn-sm  btn-primary">Reset</button>
          <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>Students/grid_view/<?php echo $_SESSION['CLSID'] ?>/<?php echo $_SESSION['SECID'] ?>"> <i class="fa fa-arrow-left"></i> Back</a> </div>
      </form>
    </div><!-- div class="box body" -->
</div><!-- div class="box" -->
</div>
</section>
</div>
<!-- /.content-wrapper -->
