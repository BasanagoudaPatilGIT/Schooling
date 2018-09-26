<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
   <div class="box">
	<!-- left column -->
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th"></i> Class view</h3>
		<a  class="btn btn-sm btn-primary pull-right" href="<?php echo base_url(); ?>Classes/grid_view"> <i class="fa fa-arrow-left"></i> Back</a>
		
     </div><!-- div class="box-header with-border" -->
  </div><!-- div class="box" -->
  
    <div class="box">
          <!-- /.box-header -->
		  <div class="box-body">
			   <!--panel heading-->
					  
					  <!--main panel body-->
				  <div class="box-body"> 
				  <div class="col-sm-12 form-group ">
					<label>Class Location:</label>
					<?php echo $class_row['class_location']?>&nbsp;
					</div>
				  <div class="col-sm-12 form-group ">
					<label>Class Room Number:</label>
					<?php echo $class_row['class_number']?>&nbsp;
					</div>
					<div class="col-sm-12 form-group ">
					<label>Class Name:</label>
					<?php echo $class_row['class_name']?>&nbsp;
					</div>
					<div class="col-sm-12 form-group ">
					<label>Class Name:</label>
					<?php echo $class_row['class_section']?>&nbsp;
					</div>
				   <div class="col-sm-12 form-group ">
					<label>Class Teacher Name:</label>
					<a href="">
					<?php echo $class_row['first_name']?>&nbsp;
					<?php echo $class_row['middle_name']?>&nbsp;
					<?php echo $class_row['last_name']?>&nbsp;</a>
					</div>
					<div class="col-sm-12 form-group ">
					<label>Class Capacity:</label>
					<?php echo $class_row['class_capacity']?>&nbsp;
					</div>
					<div class="col-sm-12 form-group ">
					<label>Number of Active Students:</label>
					<?php echo $class_row['count']?>&nbsp;
					</div>
					<div class="col-sm-12 form-group ">
					<label>Status:</label>
					<?php if(strtoupper($class_row['status']) != 'INACTIVE'   ){?>
					<span class="label" style="background-color:green; padding:5px; 
					color:#fff"><?php echo $class_row['status'];?></span>
					<?php }elseif(strtoupper($class_row['status']) != 'ACTIVE'  ){?>
					<span class="label" style="background-color:red; padding:5px; 
					color:#fff"><?php echo $class_row['status'];?></span>
					<?php }?>
					</div>
					 
					</div>
                                            
          </div> 
         
          
     </div>
  </section>
</div>
<!-- /.content-wrapper -->
