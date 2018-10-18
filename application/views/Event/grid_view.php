<div class="content-wrapper">
  <section class="content" >
  <div class="box">
	<div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-camera-retro"></i> Events</h3>
		<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">Add New</button><!-- Trigger the modal with a button -->
     </div>
  </div>

  <?php 
			$this->load->helper('directory'); //load directory helper
			$dir = "upload/event"; // Your Path to folder
			$map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */			
  ?>
   
  <div class="box">
	<div class="box-body"  style="height:590px;overflow:auto;">
	<?php foreach ($event as $row): ?>  
	  <span class="bg-green btn-sm pull-left"><?php echo $row['created_date']; ?></span>
	   <div class="col-sm-12">
	<ul class="timeline">
	  <li class="time-label">
        <i class="fa fa-envelope bg-blue"></i> 
           <div class="timeline-item">
		     <span class="time"><i class="fa fa-clock-o"><?php echo $row['created_date_time']; ?></i></span>
			<h3 class="timeline-header"><?php echo $row['event_name']; ?></h3>
			<div class="timeline-body"><?php echo $row['about_event']; ?></div>
		
			<div class="timeline-footer" style="height: 270px;">
				 
				<div class="col-sm-8" style="border:1px solid black; height: 245px; padding: 10px;">
				  <div class="col-sm-6" style="border:1px solid black; height: 220px;">
<?php foreach ($event_images as $row): ?>
<img src="<?php echo base_url($dir)."/".$row['image_name'];?>" height="80px;" width="150px;" alt="">
<?php endforeach ?> 	
				  </div>
				  <?php foreach ($event_images_all as $row): ?>
				  <div class="col-sm-3" style="border:1px solid black; height: 105px;">
				   <img src="<?php echo base_url($dir)."/".$row['image_name'];?>" height="105px;" width="150px;" alt="">  
				     
				 </div>
				  <?php endforeach ?> 
				 
				</div>
			
			</div>
		  </div>		
	  </li>
   </ul>
</div>
<?php endforeach ?>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Event Details</h4>
      </div>
      
	  <form role="form" method="post" action="<?php echo base_url()?>Event/eventdetails" enctype="multipart/form-data" autocomplete="off">
		  <div class="form-group col-sm-12">
		  <label for="event_name">Event Name: </label>
		   <span style="color:#FF0000">*</span>
		  <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Event Name"/>
		   <?php echo form_error('event_name','<div style="color:#FF0000;">','</div>'); ?> 
		  </div>
		  <div class="form-group col-sm-12">
		  <label for="about_event">About Event: </label>
		  <span style="color:#FF0000">*</span>
		  <textarea class="form-control"id="about_event" name="about_event" rows="3" cols="3" placeholder="About Event" 
		  value="<?php echo set_value('about_event')?>" onkeyup="isalpha(this)"></textarea>
		  <?php echo form_error('about_event','<div style="color:#FF0000;">','</div>'); ?> 
		  </div>
		  <div class="col-sm-12">
			<span style="color:#FF0000; font-weight:bolder;">Note:&nbsp;.JPG .PNG Images Only
			</span>
			</div>
			<div class="col-sm-12">
			<button class="btn btn-sm btn-success" id="add_desc" type="button"><i class="fa fa-plus"></i></button>
			</div>
		 
		 
		 <div class="col-sm-12" style="padding:0px;">
		 <ul id="family_Block" style="list-style:none; padding:0px;">
		 <li style="padding:0px;">
	   <!--panel body -->
		  <div class="box-body ">
		   <div class="col-sm-12 form-group">
		   
			<div class="col-sm-10 form-group">
			<input type="file" name="image_name[]" id="" /> 
			</div>
			<div class="col-sm-2 form-group">
			<button type="button" class="btn btn-sm btn-success remove_desc" data-dismiss="alert"
			  aria-hidden="true">×</button>
		
		   </div> 
		</div><!--panel body end -->
		 </div>
		 </li>
		 </ul>
		 </div>
	 
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
      </div>
	   </form>
    </div>

  </div>
</div>

</section>
</div>