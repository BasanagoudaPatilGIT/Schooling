<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
  <div class="box">
	<!-- left column -->
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th"></i> Update Class</h3>
     </div><!-- div class="box-header with-border" -->
  </div><!-- div class="box" -->
   <div class="box">
    <!-- left column -->
    <div class="box-body">
      <!-- /.box-header -->
      <!-- form start -->
      <form method="post" action="<?php echo base_url()?>Classes/updateclass/<?php echo $class_row['id'] ?>" enctype="multipart/form-data">
        <div class="box-body">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="classname">Class Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="classname" name="classname" placeholder="class name" 
				  value="<?php echo $class_row['class_name'] ?>" onkeyup="isalphanum(this)">
                  <?php echo form_error('classname','<div style="color:#FF0000;">','</div>'); ?> </div>
                <div class="col-sm-4 form-group">
                  <label for="classnum">Class Section</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="classsec" name="classsec" placeholder="Class Section" 
				  value="<?php echo $class_row['class_section'] ?>" onkeyup="isalphanum(this)">
				  </div>
				
                <div class="col-sm-4 form-group">
                  <label for="capacity">Class Capacity</label>
                  <span style="color:#FF0000">*</span>
                  <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Class Capacity" min="1"
				  value="<?php echo $class_row['class_capacity'] ?>" onkeyup="isnum(this)">
                  <?php echo form_error('capacity','<div style="color:#FF0000;">','</div>'); ?> </div>
              </div>
			  
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="startdate">Class Starting On:</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="startdate" name="startdate" placeholder="yyyy-mm-dd" 
				  value="<?php echo $class_row['class_starting_date'] ?>"><?php echo form_error('startdate','<div style="color:#FF0000;">','</div>'); ?>
				</div>
                <div class="form-group col-sm-4">
                  <label for="enddate">Class Ending On:</label>
				  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control datepicker" id="enddate" name="enddate" placeholder="yyyy-mm-dd"
				  value="<?php echo $class_row['class_ending_date'] ?>"><?php echo form_error('enddate','<div style="color:#FF0000;">','</div>'); ?>
                </div>
				 <div class="form-group col-sm-4">
                  <label for="teacher">Class Teacher <small>(incharge)</small>:</label>
				  <span style="color:#FF0000">*</span>
                 <?php $attributes = 'class = "form-control" id = "cbo_teacher" ';
                        echo form_dropdown('cbo_teacher',$cbo_teacher,$class_row['class_teacher_id'], $attributes);
                   ?>
				  <?php echo form_error('cbo_teacher','<div style="color:#FF0000;">','</div>'); ?>
                </div>
              </div>
			  <div class="row">
                <div class="form-group col-sm-4">
                  <label for="loation">Class Location</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="location" name="location" placeholder="Class Location" 
				  value="<?php echo $class_row['class_location'] ?>" onkeyup="">
                </div>
				<div class="col-sm-4 form-group">
                  <label for="classnum">Class Room Number</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="classnum" name="classnum" placeholder="Class Room Number" 
				  value="<?php echo set_value('classnum')?>" onkeyup="isalphanum(this)">
				  </div>
			  </div>
			  </div>
			  
             
        <!-- /.box-body -->
        <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary">Save</button>
          <button type="reset" class="btn btn-sm btn-primary">Reset</button>
          <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>Classes/grid_view"> <i class="fa fa-arrow-left"></i> Back</a> </div>
      </form>
  </div>
</div>
</section>
</div>
<!-- /.content-wrapper -->
