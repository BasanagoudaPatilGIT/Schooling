<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-address-card-o"></i> Students List</h3>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>Students/addstudent"><i 
	class="fa fa-plus fa-fw"></i>Add New</a>
	
      </div>
    </div>
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <div class="col-sm-12" >
		
          <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
			  	<th>Roll Number</th>
                <th>Student Name</th>
                <th>Class</th>
                <th>Section</th>
                <th>SubjectTeacher</th>
				<th>Parent Name</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($student as $row): ?>
              <tr>
				
				 <td><?php echo $row['roll_num']; ?></td>
				<td><a href="<?php echo base_url(); ?>Students/single_view/<?php echo $row['stdid'] ?>"> <?php echo $row['first_name'];?>&nbsp; <?php echo $row['middle_name'];?>&nbsp; <?php echo $row['last_name'];?></a></td>
				 <td><?php echo $row['class_name']; ?></td>
				 <td><?php echo $row['class_section']; ?></td>
				<td><a href="<?php echo base_url(); ?>Teachers/single_view/<?php echo $row['tid'] ?>"> <?php echo $row['tfirst_name'];?>&nbsp; <?php echo $row['tmiddle_name'];?>&nbsp; <?php echo $row['tlast_name'];?></a></td>
				<td><?php echo $row['pfirst_name'];?>&nbsp; <?php echo $row['pmiddle_name'];?>&nbsp; <?php echo $row['plast_name'];?></a></td>
               
				<?php if(strtoupper($row['status']) != 'INACTIVE'   ){?>
                                <td class="text-center"><span class="label" style="background-color:green; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                                <?php }elseif(strtoupper($row['status']) != 'ACTIVE'  ){?>
                                <td class="text-center"><span class="label" style="background-color:red; padding:5px; color:#fff"><?php echo $row['status'];?></span></td>
                               
                                <?php }?>
				
				
                <td align="center"><a class="btn btn-sm btn-warning btn-sm" href="<?php echo base_url() ?>Students/updatestudent/<?php echo $row["stdid"] ?>" title="Click to Update this TestCase"><i class="fa fa-edit fa-fw fa-sm"></i></a>
                 <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                  <a class="btn btn-danger btn-sm" href="" onClick="show_confirm('delete_record','<?php echo $row["stdid"] ?>')" title="Click to Delete this TestCase"><i class="fa fa-trash fa-fw fa-sm"></i></a>
                  <?php } ?>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- table end-->
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
	window.location="<?php echo base_url();?>Project/"+act+"/"+gotoid;
	}
	
	}
	</script>
