<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-address-card-o"></i> Parents List</h3>
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
			    <th>Sl No</th>
                <th>Name</th>
                <th>Profession</th>
			    <th>EmailId</th>
                <th>Phone No.</th>
                <th>Qualification</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($parent as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
			    <td align="center"><?php echo $slno; ?></td>
				<td><a href="<?php echo base_url(); ?>index.php/Students/single_parent_view/<?php echo $row['id'] ?>"> 
				<?php echo $row['first_name'];?>&nbsp; <?php echo $row['middle_name'];?>&nbsp; <?php echo $row['last_name'];?></a></td>
                <td><?php echo $row['profession']; ?></td>
				<td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['qualification']; ?></td>
				<?php if(strtoupper($row['status']) != 'INACTIVE'   ){?>
                 <td class="text-center"><span class="label" style="background-color:green; padding:5px; 
				 color:#fff"><?php echo $row['status'];?></span></td>
                 <?php }elseif(strtoupper($row['status']) != 'ACTIVE'  ){?>
                 <td class="text-center"><span class="label" style="background-color:red; padding:5px; 
				 color:#fff"><?php echo $row['status'];?></span></td>
                <?php }?>
				<td align="center"><a class="btn btn-sm btn-warning btn-sm" 
				href="<?php echo base_url() ?>Students/updatestudent/<?php echo $row["id"] ?>" 
				title="Click to Update this TestCase"><i class="fa fa-edit fa-fw fa-lg"></i></a>
                 <?php if(strtoupper($_SESSION['USER_TYPE']) == '' ){ ?>
                  <a class="btn btn-danger btn-sm" href="" 
				  onClick="show_confirm('delete_record','<?php echo $row["id"] ?>')" 
				  title="Click to Delete this TestCase"><i class="fa fa-trash fa-fw fa-lg"></i></a>
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
	window.location="<?php echo base_url();?>index.php/Project/"+act+"/"+gotoid;
	}
	
	}
	</script>
