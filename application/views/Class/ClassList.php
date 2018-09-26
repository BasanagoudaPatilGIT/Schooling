<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="box">
	  <div class="box-header with-border">
	  <h3 class="box-title"><i class="fa fa-th"></i> Class List</h3>
        <a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url(); ?>Classes/addclass"><i 
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
				<th>Class Name</th>
				<th>Class Section</th>
                <th>Class Teacher</th>
                <th>Class Location</th>
				<th>Class Room Number</th>
                <th align="center">Actions</th>
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
				<td align="center" width="100px"><a class="btn btn-warning btn-sm" 
				href="<?php echo base_url() ?>Classes/updateclass/<?php echo $row["id"] ?>" 
				title="Click to Update this Class"><i class="fa fa-edit fa-fw fa-sm"></i></a>
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
	window.location="<?php echo base_url();?>Classes/"+act+"/"+gotoid;
	}
	
	}
</script>
	