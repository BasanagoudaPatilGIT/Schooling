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
          <button type="submit" class="btn btn-sm btn-primary">Add</button>
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
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($subject as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
				<td align="center"><?php echo $slno; ?></td>
				<td data-toggle="modal" data-target="#sub_id" onclick="passvar(<?php echo $row['id'];?>)"><a><?php echo $row['sub_name']; ?></a></td><!-- Trigger the modal with a anchor tag -->
				<td><?php echo $row['first_name'];echo " ";echo $row['last_name'] ?></td>
				<?php if(strtoupper($row['status']) != 'INACTIVE'   ){?>
                                <td class="text-center"><span class="label" style="background-color:green; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                                <?php }elseif(strtoupper($row['status']) != 'ACTIVE'  ){?>
                                <td class="text-center"><span class="label" style="background-color:red; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                               
                                <?php }?>
				
				
				
                <td align="center"><a class="btn btn-sm btn-warning btn-sm" href="<?php echo base_url() ?>Students/updatestudent/<?php echo $row["class_id"] ?>" title="Click to Update this TestCase"><i class="fa fa-edit fa-fw fa-lg"></i></a>
                 <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                  <a class="btn btn-danger btn-sm" href="" onClick="show_confirm('delete_record','<?php echo $row["id"] ?>')" title="Click to Delete this TestCase"><i class="fa fa-trash fa-fw fa-lg"></i></a>
                  <?php } ?>
                </td>
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
<div id="sub_id" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Subject Details</h4>
      </div>
      <div class="modal-body">
	  <div class="col-sm-4">
        <label for="sub_name">Subject Name</label>
		  <span style="color:#FF0000">*</span>
		 <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="Subject Name" readonly="" value="">
		 </div>
		  <div class="col-sm-4">
		  <label for="sub_name">Teachers List</label>
		  <span style="color:#FF0000">*</span>
		  
		  </div>
		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
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
