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
		<form method="post" action="<?php echo base_url()?>TransportationDetails/route_mapping">
		  
		  <div class="box-body">
			<div class="form-group col-sm-12">
                  <label for="cbo_region">Vehicle Region</label>
                  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_region" name = "cbo_region"';
						echo form_dropdown('cbo_region',$cbo_region,set_value('cbo_region'), $attributes);
						?> 
						<?php echo form_error('cbo_region','<div style="color:#FF0000;">','</div>'); ?>
						</div>
                
				   <div class="form-group col-sm-12">
                  <label for="vehicle_number">Vehicle Number</label>
                  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_vehicle_num" name = "cbo_vehicle_num"';
						echo form_dropdown('cbo_vehicle_num',$cbo_vehicle_num,set_value('cbo_vehicle_num'), $attributes);
						?> 
						<?php echo form_error('cbo_vehicle_num','<div style="color:#FF0000;">','</div>'); ?> </div>
				   
				  <div class="form-group col-sm-12">
                  <label for="vehicle_route">Vehicle Route</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_route" name="vehicle_route" placeholder="Vehicle Route" 
				  value="<?php echo set_value('vehicle_route')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_route','<div style="color:#FF0000;">','</div>'); ?> </div>
				
			</div>
			 <div class="box-footer" align="right">
          <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add</button>
		  </div>
		  </form>
          </div>
		  </div>
          <div class="col-sm-8">
          <div class="box">
		  <div class="box-header with-border">
		  <h3 class="box-title"><i class="fa fa-book"></i> Vehicle Details</h3>
	<a href="" class="btn btn-sm btn-primary pull-right" title="Click to add new vehicle details" data-toggle="modal" data-target="#vehicle"><i 
	class="fa fa-plus fa-fw"></i>Add Vehicle</a>
		  </div>
		  
		  	  <div class="box-body">
                   <table id="example1" class="table table-bordered table-striped table-responsive table-hover">
            <thead>
              <tr>
			  
                <th>Sl No</th>
				<th>Vehicle Region</th>
				<th>Vehicle Route</th>
				<th>Vehicle Number</th>
				<th>Vehicle Capacity</th>
              </tr>
            </thead>
            <tbody>
              <?php $slno = 0; ?>
              <?php foreach ($transportation as $row): ?>
              <?php $slno = $slno + 1; ?>
              <tr>
				<td align="center"><?php echo $slno; ?></td>
				<td><?php echo $row['region_name']; ?></td>
				<td><?php echo $row['route_name']; ?></td>
				<td><?php echo $row['vehicle_number'];?></td>
				<td><?php echo $row['vehicle_capacity'];?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- table end-->
			</div>
  </div><!-- box body-->
</div><!-- box-->

</div>
</div>

<!-- Modal -->
  <div id="vehicle" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New vehicle</h4>
        </div>
        <form method="post" action="<?php echo base_url()?>TransportationDetails/transportation_details">
		<div class="modal-body">
		<div class="modal-body">
		<label for="cbo_region">Vehicle Region</label>
                  <span style="color:#FF0000">*</span>
                  <?php $attributes = 'class = "form-control" id = "cbo_region_popup" name = "cbo_region_popup"';
						echo form_dropdown('cbo_region_popup',$cbo_region,set_value('cbo_region_popup'), $attributes);
						?> 
						<?php echo form_error('cbo_region_popup','<div style="color:#FF0000;">','</div>'); ?>
        </div>
		<div class="modal-body">
		<label for="vehicle_number">Vehicle Number</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" placeholder="Vehicle Number" 
				  value="<?php echo set_value('vehicle_number')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_number','<div style="color:#FF0000;">','</div>'); ?>
        </div>
		<div class="modal-body">
		<label for="vehicle_capacity">Vehicle Capacity</label>
                  <span style="color:#FF0000">*</span>
                  <input type="text" class="form-control" id="vehicle_capacity" name="vehicle_capacity" placeholder="Vehicle Capacity" 
				  value="<?php echo set_value('vehicle_capacity')?>" onkeyup="isalpha(this)">
                  <?php echo form_error('vehicle_capacity','<div style="color:#FF0000;">','</div>'); ?>
        </div>
		
		</div>
        <div class="modal-footer">
		<button id="addvehicle" type="submit" class="btn btn-sm btn-primary">  <i class="fa fa-plus"></i> Add</button>
		  <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
        </div>
		</form>
	 </div>
      
    </div>
  </div>


<!-- content wrapper-->
</section>
</div>