<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
	  <h3 class="box-title"><i class="fa fa-th"></i> Class Details</h3>
	  <?php if(strtoupper($_SESSION['USER_TYPE']) == 'ADMIN' ){?>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>Classes/addSection"><i 
	class="fa fa-plus fa-fw"></i>Add New</a>
	  <?php }?>
      </div>
    </div>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
	  <div class="col-sm-4">
		  <div class="box">
		  <div class="box-header with-border">
		  <h3 class="box-title"><i class="fa fa-user-secret"></i> Teacher Assignment</h3>
		  </div>
		 <?php $id = $this->uri->segment(3); ?>
		<form role="form" method="post" action="<?php echo base_url()?>Classes/teacher_assignment">
		  
		  <div class="box-body">
            <div class="col-sm-12">
                <div class="form-group col-sm-12">
                  <label for="class">Class</label> <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_class_list" name = "cbo_class_list"';
                        echo form_dropdown('cbo_class_list',$cbo_class_list,set_value('cbo_class_list'), $attributes);
                   ?>
				   <?php echo form_error('cbo_class_list','<div style="color:#FF0000;">','</div>'); ?>
				  
				  </div>
               <div class="col-sm-12 form-group">
                <label for="section">Section</label><span style="color:#FF0000">*</span>
				<?php $attributes = 'class = "form-control" id = "cbo_section_list" name = "cbo_section_list"';
                        echo form_dropdown('cbo_section_list',$cbo_section_list,set_value('cbo_section_list'), $attributes);
                   ?>
				   <?php echo form_error('cbo_section_list','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  <div class="col-sm-12 form-group">
                <label for="teacher">Teacher</label><span style="color:#FF0000">*</span>
				<?php $attributes = 'class = "form-control" id = "cbo_teacher_list" name = "cbo_teacher_list"';
                        echo form_dropdown('cbo_teacher_list',$cbo_teacher_list,set_value('cbo_teacher_list'), $attributes);
                   ?>
				   <?php echo form_error('cbo_teacher_list','<div style="color:#FF0000;">','</div>'); ?>
              </div>
			  
			</div>
			</div>
			 <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary">update</button>
		  </div>
		  </form>
          </div>
		  </div>
		  <div class="col-sm-8">
          <div class="box">
		  <div class="box-header with-border">
		  <h3 class="box-title"><i class="fa fa-th"></i> CLass list</h3>
		  </div>
		  
		  <div class="box-body">
               <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
                <th>Sl No</th>
				<th>Class Name</th>
				<th>Class Section</th>
                <th>Class Teacher</th>
                <th>Class Location</th>
				<th>Class Room Number</th>
				<th>Class Capacity</th>
				<th>Active Students</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($class as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
			    <td><?php echo $slno; ?></td>
				<td><a href="<?php echo base_url() ?>Classes/single_view/<?php echo $row["id"] ?>" title="Click to view class details"><?php echo $row['class_name'];?></a></td>
				
				<td><?php echo $row['class_section'];?></td>
				<td><?php echo $row['first_name'];?>&nbsp; <?php echo $row['middle_name'];?>&nbsp; <?php echo $row['last_name'];?></td>
				
				<td><?php echo $row['class_location'];?></td>
				<td><?php echo $row['class_number'];?></td>
				<td><?php echo $row['class_capacity'];?></td>
				<td><?php echo $row['count'] - 1;?></td>
				
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- table end-->
		  
			</div>
            <!--<div class="row">
              
              
            </div>-->
            
          </div>
        </div>
      </div>
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
	function show_confirm(act,gotoid)
	{
	if(act=="edit")
	var r=confirm("Do you really want to edit?");
	else
	var r=confirm("Do you really want to delete?");
	
	if (r==true){
	window.location="<?php echo base_url();?>Classes/"+act+"/"+gotoid;
	}
	
	}
</script>
	