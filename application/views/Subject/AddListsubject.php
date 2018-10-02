<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-address-card-o"></i> Subject Details</h3>
       </div>
    </div>
	
	 <div class="box">
	
        <div class="box-body">
          <div class="col-sm-4">
		  <div class="box">
		  <div class="box-header with-border">
		  <h3 class="box-title"><i class="fa fa-book"></i> Add New</h3>
		  </div>
		 <?php $id = $this->uri->segment(3); ?>
		<form role="form" method="post" action="<?php echo base_url()?>Subjects/subject_details/<?php echo $id ?>">
		  
		  <div class="box-body">
            <div class="col-sm-12">
                <div class="form-group col-sm-12">
                  <label for="sub_name">Subject Name</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="Subject Name" 
				  value="<?php echo set_value('sub_name')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('sub_name','<div style="color:#FF0000;">','</div>'); ?> </div>
                
				
			</div>
			</div>
			 <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>  Add</button>
		  </div>
		  </form>
          </div>
		  </div>
          <div class="col-sm-8">
          <div class="box">
		  <div class="box-header with-border">
		  <h3 class="box-title"><i class="fa fa-book"></i> Subject list</h3>
		  </div>
		  
		  <div class="box-body">
                   <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
			  
                <th>Sl No</th>
				<th>Subject Name</th>
				<th>Subject Teacher</th>
				<th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($subject as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
				<td align="center"><?php echo $slno; ?></td>
				<td><a href="" title="Click to add/update teacher assignment" data-toggle="modal" data-target="#sub_id" onclick="passvar(<?php echo $row['id'];?>)"><?php echo $row['sub_name']; ?></a></td><!-- Trigger the modal with a anchor tag -->
				<td><?php echo $row['first_name'];echo " ";echo $row['middle_name'];echo " "; echo $row['last_name'] ?></td>
				<?php if(strtoupper($row['status']) != 'INACTIVE'   ){?>
                                <td class="text-center"><span class="label" style="background-color:green; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                                <?php }elseif(strtoupper($row['status']) != 'ACTIVE'  ){?>
                                <td class="text-center"><span class="label" style="background-color:red; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                               
                                <?php }?>
				
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
		
        <!-- /.box-body -->
		</div>
       
      
  </div><!-- div class="box body" -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
  <div id="sub_id" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Teacher Assignment</h4>
        </div>
        <form id ="AssignmentTeacher">
		<div class="modal-body">
		<div class="modal-body">
		<label for="subname">Subject Name</label>
		  <input type="hidden" class="form-control" id="subid" name="subid">
		  <input type="text" class="form-control" id="subname" name="subname" readonly="">
        </div>
		<div class="modal-body">
          <label for="cbo_teacher">Assign Teacher </label>
		  <?php $attributes = 'class = "form-control" id = "cbo_teacher" name = "cbo_teacher"';
            echo form_dropdown('cbo_teacher',$cbo_teacher,set_value('cbo_teacher'), $attributes);
           ?>
		   
						
        </div>
		</div>
        <div class="modal-footer">
		<button id="teacherassingment" type="submit" class="btn btn-sm btn-primary">Update</button>
		  <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
        </div>
		</form>
	 </div>
      
    </div>
  </div>










<script type="text/javascript">
	function show_confirm(act,gotoid)
	{
	if(act=="edit")
	var r=confirm("Do you really want to edit?");
	else
	var r=confirm("Do you really want to delete?");
	
	if (r==true){
	window.location="<?php echo base_url();?>Project/"+act+"/"+gotoid;
	}
	
	}
	</script>
