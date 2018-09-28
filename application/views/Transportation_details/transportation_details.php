<div class="content-wrapper">
  <section class="content" >
  <div class="box">
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-bus"></i> Transporation Details</h3>
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
		<form role="form" method="post" action="<?php echo base_url()?>Transportation_details/transportation_details/<?php echo $id ?>">
		  
		  <div class="box-body">
            <div class="col-sm-12">
                <div class="form-group col-sm-12">
                  <label for="vehicle_route">Vehicle route</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_route" name="vehicle_route" placeholder="Vehicle Route" 
				  value="<?php echo set_value('vehicle_route')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_route','<div style="color:#FF0000;">','</div>'); ?> </div>
				   <div class="form-group col-sm-12">
                  <label for="vehicle_number">Vehicle number</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" placeholder="Vehicle Number" 
				  value="<?php echo set_value('vehicle_number')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_number','<div style="color:#FF0000;">','</div>'); ?> </div>
				   <div class="form-group col-sm-12">
                  <label for="vehicle_capacity">Vehicle capacity</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_capacity" name="vehicle_capacity" placeholder="Vehicle Capacity" 
				  value="<?php echo set_value('vehicle_capacity')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_capacity','<div style="color:#FF0000;">','</div>'); ?> </div>
                
				
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
		  <h3 class="box-title"><i class="fa fa-book"></i> Vehicle Details</h3>
		  </div>
		  
		  	  <div class="box-body">
                   <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
			  
                <th>Sl No</th>
				<th>Vehicle Route</th>
				<th>Vehicle Number</th>
				<th>Vehicle Capacity</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($transportation as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
				<td align="center"><?php echo $slno; ?></td>
				<td><?php echo $row['vehicle_route']; ?></td>
				<td><?php echo $row['vehicle_number'];?></td>
				<td><?php echo $row['vehicle_capacity'];?></td>
				
				
				
				
                <td align="center"><a class="btn btn-sm btn-warning btn-sm" href="<?php echo base_url() ?>Transpostation_details/updatetransportation/" title="Click to Update this TestCase"><i class="fa fa-edit fa-fw fa-lg"></i></a>
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
  </div><!-- box body-->
</div><!-- box-->

</div>
<!-- content wrapper-->