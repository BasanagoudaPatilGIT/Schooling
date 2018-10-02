<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content" >
  <div class="box">
	<!-- left column -->
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-address-card-o"></i> Student Admission</h3>
     </div><!-- div class="box-header with-border" -->
  </div><!-- div class="box" -->

  
  <div class="box">
	
    <div class="box-body">
      <!-- general form elements -->
      
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="<?php echo base_url()?>Students/addstudent" enctype="multipart/form-data" autocomplete="off">
        <div class="box-body">
          <div class="col-sm-6">
            <div class="h4"><i class="fa fa-bandcamp" aria-hidden="true"></i> Personal Details</div>
            <div class="panel panel-primary col-sm-12"  style="padding:12px;">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="firstname">First Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" 
				  value="<?php echo set_value('firstname')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('firstname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="middlename">Middle Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" 
				  value="<?php echo set_value('middlename')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('middlename','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="lastname">Last Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" 
				  value="<?php echo set_value('lastname')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('lastname','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  <div class="form-group">
                  <label for="Email">Email Address</label>
                  <span style="color:#FF0000">*</span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" 
				  value="<?php echo set_value('email')?>" onkeyup="ValidateEmail(this)">
				  <?php echo form_error('email','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="dateofbirth">Date of Birth</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="dob" name="dob" placeholder="Date of Birth" 
				  value="<?php echo set_value('dob')?>"><?php echo form_error('dob','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="gender">Gender</label>
				  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_sex" name = "cbo_sex"';
                        echo form_dropdown('cbo_sex',$cbo_sex,set_value('cbo_sex'), $attributes);
                   ?>
                 <?php echo form_error('cbo_sex','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
                
			  
              <div class="form-group">
                <label for="Address" >Current Address</label>
                  <span style="color:#FF0000">*</span>
                <input type="text" name="address" id="address" class="form-control" placeholder="Current Address"
				 value="<?php echo set_value('address')?>"><?php echo form_error('address','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="CityName">City Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City Name" value="<?php echo set_value('city')?>">
				  <?php echo form_error('city','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Country">Country</label>
                  <span style="color:#FF0000">*</span>
                  <?php
                            $attributes = 'class = "form-control" id = "cbo_country" ';
                            echo form_dropdown('cbo_country',$cbo_country,set_value('cbo_country'), $attributes);
                        ?>
						<?php echo form_error('cbo_country','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Zipcode">Zipcode</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="<?php echo set_value('zipcode')?>">
				  <?php echo form_error('zipcode','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  <div class="form-group">
                
              </div>
			  <div class="form-group">
                <label for="PAddress" >Parmanent Address</label>
                 <?php /*?> <span style="color:#FF0000">*</span><br /><label><input type="checkbox" name="sameas" id="sameas" class="sameas"> Same as Current Address</label><?php */?>
                <input type="text" name="peraddress" id="peraddress" class="form-control"
				 placeholder="Parmanent Address"  value="<?php echo set_value('peraddress')?>">
				 <?php echo form_error('peraddress','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="PCityName">City Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="percity" name="percity" 
				  placeholder="City Name" value="<?php echo set_value('percity')?>">
				  <?php echo form_error('percity','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Country">Country</label>
                  <span style="color:#FF0000">*</span>
                  <?php
                            $attributes = 'class = "form-control" id = "percbo_country" ';
                            echo form_dropdown('percbo_country',$percbo_country,set_value('percbo_country'), $attributes);
                        ?>
						<?php echo form_error('percbo_country','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-4">
                  <label for="Zipcode">Zipcode</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="perzipcode" name="perzipcode" 
				  placeholder="Zipcode" value="<?php echo set_value('perzipcode')?>">
				  <?php echo form_error('perzipcode','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="phone">Phone Number (Optional)</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="<?php echo set_value('phone')?>" onkeyup="isnum(this)">
                </div>
                <div class="form-group col-sm-6">
                  <label for="bloodgroup">Blood Group (Optional)</label>
                  <?php $attributes = 'class = "form-control" id = "cbo_blood_group" name = "cbo_blood_group"';
                        echo form_dropdown('cbo_blood_group',$cbo_blood_group,set_value('cbo_blood_group'), $attributes);
                   ?>
                 
                </div>
              </div>
              <div class="form-group">
                <label for="Username">Username</label>
                <span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo set_value('username')?>" onkeyup="isalphanum(this)"><?php echo form_error('username','<div style="color:#FF0000;">','</div>'); ?>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="Password">Password</label>
                  <span style="color:#FF0000">*</span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo set_value('password')?>" onkeyup="isalphanum(this)"><?php echo form_error('password','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="ConfirmPassword">Confirm Password</label>
                  <span style="color:#FF0000">*</span>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"
				  value="<?php echo set_value('confirmPassword')?>">
				  <?php echo form_error('confirmPassword','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
              <div class="form-group">
                <label for="displaypicture"> Profile Image </label>
                </br>
                <label class="customUpload btnUpload  btn btn-success"  style="color: #ffffff;  margin-right: 10px;"> 
				<span class="logo-label"><i class="fa fa-upload" aria-hidden="true"></i> Choose File </span>
                <input  class="upload" type="file" id="displaypicture" name="displaypicture" 
				value="<?php echo set_value('displaypicture')?>" accept="image/jpg, image/jpeg, image/png"/>
                </label>
                <p id="test" style="color:red"></p>
                <p class="help-block">* Only JPEG and JPG supported </p>
                <p class="help-block">* Max 3 MB Upload </p>
              </div>
            </div>
		  <div class="h4"><i class="fa fa-bus" aria-hidden="true"></i> Transportaion Details</div>
          <div class="panel panel-primary col-sm-12"  style="padding:12px;">
		  <div class="row">
		  <div class="form-group col-sm-6">
                  <label for="region">Region </label>
				  <?php $attributes = 'class = "form-control" id = "cbo_region_list" name = "cbo_region_list"';
                        echo form_dropdown('cbo_region_list',$cbo_region_list,set_value('cbo_region_list'), $attributes);
                   ?></div>
				<div class="col-sm-6 form-group">
                <label for="section">Vehicle Number</label>
				<?php $attributes = 'class = "form-control" id = "cbo_vehicle_num_list" name = "cbo_vehicle_num_list"';
                        echo form_dropdown('cbo_vehicle_num_list',$cbo_vehicle_num_list,set_value('cbo_vehicle_num_list'), $attributes);
                   ?>
              </div>
			  <div class="col-sm-6 form-group">
                <label for="Class">Route</label>
				<?php $attributes = 'class = "form-control" id = "cbo_route_list" name = "cbo_route_list"';
                        echo form_dropdown('cbo_route_list',$cbo_route_list,set_value('cbo_route_list'), $attributes);
                   ?>
              </div>
			  <div class="col-sm-6 form-group" style="padding:0px">
			  <!-- time Picker -->
              <div class="col-sm-6 form-group">
                <label>Pickup time:</label>
					<div class="input-group">
                    <input type="text" class="form-control date" id="picktime" name="picktime" placeholder="hh:mm AM" value="<?php echo set_value('picktime')?>" >
                    </div>
                  <!-- /.input group -->
              </div><!-- time Picker -->
			  <div class="col-sm-6 form-group">
                <label>Drop time:</label>
					<div class="input-group">
                    <input type="text" class="form-control date" id="droptime" name="droptime" placeholder="hh:mm PM"  value="<?php echo set_value('droptime')?>" 
					onkeyup="isalphanum(this)">
                  </div>
                  <!-- /.input group -->
              </div><!-- time Picker -->
			 
        
			  </div>
			 </div>
			</div>
		 <!-- Transportation ends-->
          </div><!-- div col-sm-6-->
		  <div class="col-sm-6">
          <div class="h4"><i class="fa fa-building" aria-hidden="true"></i> School Details</div>
          <div class="panel panel-primary col-sm-12"  style="padding:12px;">
		  <div class="row">
		  <div class="form-group col-sm-12">
                  <label for="firstname">Admission number: </label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="admission_no" name="admission_no"  readonly=""
				  value="<?php echo $year; echo " - "; echo $student_count['count'] ?>"></div>
				<div class="col-sm-6 form-group">
                <label for="Class">Class</label><span style="color:#FF0000">*</span>
				<?php $attributes = 'class = "form-control" id = "cbo_class" name = "cbo_class"';
                        echo form_dropdown('cbo_class',$cbo_class,set_value('cbo_class'), $attributes);
                   ?>
				   <?php echo form_error('cbo_class','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  <div class="col-sm-6 form-group">
                <label for="section">Section</label><span style="color:#FF0000">*</span>
				<?php $attributes = 'class = "form-control" id = "cbo_section" name = "cbo_section"';
                        echo form_dropdown('cbo_section',$cbo_section,set_value('cbo_section'), $attributes);
                   ?>
				   <?php echo form_error('cbo_section','<div style="color:#FF0000;">','</div>'); ?>
              </div>
              <div class="col-sm-6 form-group">
                <label for="empcode">Roll Nummber</label>
                <input type="text" class="form-control" id="rollnum" name="rollnum" placeholder="Roll Number" readonly="">
				<?php echo form_error('rollnum','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  <div class="col-sm-6 form-group">
                <label for="Doj">Date of Joining</label>
				<span style="color:#FF0000">*</span>
                <input type="text"  class="form-control datepicker" id="doj" name="doj" placeholder="Date of Joining"
				value="<?php echo set_value('doj')?>"><?php echo form_error('doj','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			</div>
            <!--<div class="row">
              
              
            </div>-->
            
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
				  value="<?php echo set_value('pfirstname')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('pfirstname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="middlename">Middle Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="pmiddlename" name="pmiddlename" placeholder="Middle Name" 
				  value="<?php echo set_value('pmiddlename')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('pmiddlename','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="lastname">Last Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="plastname" name="plastname" placeholder="Last Name" 
				  value="<?php echo set_value('plastname')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('plastname','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  <div class="form-group">
                  <label for="Email">Email Address</label>
                  <span style="color:#FF0000">*</span>
                  <input type="email" class="form-control" id="pemail" name="pemail" placeholder="Email" 
				  value="<?php echo set_value('pemail')?>" onkeyup="ValidateEmail(this)">
				  <?php echo form_error('pemail','<div style="color:#FF0000;">','</div>'); ?>
                </div>
             <div class="row">
                <div class="form-group col-sm-6">
                  <label for="dateofbirth">Date of Birth</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="pdob" name="pdob" placeholder="Date of Birth" 
				  value="<?php echo set_value('pdob')?>"><?php echo form_error('pdob','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="col-sm-6 form-group">
                  <label for="gender">Gender</label>
				  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "pcbo_sex" name = "pcbo_sex"';
                        echo form_dropdown('pcbo_sex',$pcbo_sex,set_value('pcbo_sex'), $attributes);
                   ?>
                 <?php echo form_error('pcbo_sex','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
                
			  <div class="row">
                <div class="form-group col-sm-6">
                  <label for="phone">Phone Number</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="pphone" name="pphone" placeholder="Phone Number" value="<?php echo set_value('pphone')?>" onkeyup="isnum(this)"><?php echo form_error('pphone','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="bloodgroup">Blood Group (Optional)</label>
                  <?php $attributes = 'class = "form-control" id = "pcbo_blood_group" name = "pcbo_blood_group"';
                        echo form_dropdown('pcbo_blood_group',$pcbo_blood_group,set_value('pcbo_blood_group'), $attributes);
                   ?>
                 
                </div>
              </div>
              <div class="form-group">
                <label for="Username">Username</label>
                <span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="pusername" name="pusername" placeholder="Username" value="<?php echo set_value('pusername')?>" onkeyup="isalphanum(this)"><?php echo form_error('pusername','<div style="color:#FF0000;">','</div>'); ?>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="Password">Password</label>
                  <span style="color:#FF0000">*</span>
                  <input type="password" class="form-control" id="ppassword" name="ppassword" placeholder="Password" value="<?php echo set_value('ppassword')?>" onkeyup="isalphanum(this)"><?php echo form_error('ppassword','<div style="color:#FF0000;">','</div>'); ?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="ConfirmPassword">Confirm Password</label>
                  <span style="color:#FF0000">*</span>
                  <input type="password" class="form-control" id="pconfirmPassword" name="pconfirmPassword" placeholder="Confirm Password"
				  value="<?php echo set_value('pconfirmPassword')?>">
				  <?php echo form_error('pconfirmPassword','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  <div class="row">
              <div class="form-group col-sm-6">
                <label for="educ">Qualification</label><span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="pqual" name="pqual" placeholder="Highest Education Degree" 
				value="<?php echo set_value('pqual')?>" 
				onkeyup="isalphanum(this)"><?php echo form_error('pqual','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  <div class="form-group col-sm-6">
                <label for="educ">Profession</label><span style="color:#FF0000">*</span>
                <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession" 
				value="<?php echo set_value('profession')?>" 
				onkeyup="isalphanum(this)"><?php echo form_error('profession','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  </div>
              <div class="form-group">
                <label for="displaypicture"> Profile Image </label>
                </br>
                <label class="customUpload btnUpload  btn btn-success"  style="color: #ffffff;  margin-right: 10px;"> 
				<span class="logo-label"><i class="fa fa-upload" aria-hidden="true"></i> Choose File </span>
                <input  class="upload" type="file" id="pdisplaypicture" name="pdisplaypicture" 
				value="<?php echo set_value('pdisplaypicture')?>" accept="image/jpg, image/jpeg, image/png"/>
                </label>
                <p id="test" style="color:red"></p>
                <p class="help-block">* Only JPEG and JPG supported </p>
                <p class="help-block">* Max 3 MB Upload </p>
              </div>
            </div>
        </div>
        <!-- /.box-body -->
		</div>
        <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary">Save</button>
          <button type="reset" class="btn btn-sm btn-primary">Reset</button>
          <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>Students/grid_view/<?php echo $_SESSION['CLSID'] ?>/<?php echo $_SESSION['SECID'] ?>"> <i class="fa fa-arrow-left"></i> Back</a> 
		  </div>
      
    
	</form>
  </div><!-- div class="box body" -->
</div><!-- div class="box" -->

</div>
<!-- /.content-wrapper -->
