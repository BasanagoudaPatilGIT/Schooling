
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree"> 
        <li><a href="<?php echo base_url()?>Dashboard/index"><i class="fa fa-circle-o"></i><span>Dashboard</span> </a></li>
		<li><a href="<?php echo base_url()?>Project/grid_view"><i class="fa fa-tags"></i> <span>Notifications</span></a></li>
		<li class="treeview"><a href="#"><i class="fa fa-address-card-o"></i><span>Student Management</span></a>
          <ul class="treeview-menu">
		  <?php foreach ($class_list as $row): ?>
		  <li><a href="<?php echo base_url()?>Students/grid_view/<?php echo $row['id']?>"><i class="fa fa-address-card-o"></i> <span><?php echo $row['class_name']; echo " - "; echo $row['class_section']?></span></a></li>
           <?php endforeach ?>
		  </ul>
        </li>
		<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Subjects</span></a>
          <ul class="treeview-menu">
		  <?php foreach ($class_list as $row): ?>
		  <li><a href="<?php echo base_url()?>Subjects/subject_details/<?php echo $row['id']?>"><i class="fa fa-address-card-o"></i> <span><?php echo $row['class_name']; echo " - "; echo $row['class_section']?></span></a></li>
           <?php endforeach ?>
		  </ul>
        </li>
		<li><a href="<?php echo base_url()?>Teachers/grid_view"><i class="fa fa-user-secret"></i> <span>Teachers</span></a></li>
		<li><a href="<?php echo base_url()?>Students/parent_grid_view"><i class="fa fa-users"></i> <span>Parents</span></a></li>
		<li><a href="<?php echo base_url()?>Classes/grid_view"><i class="fa fa-th"></i> <span>Classes</span></a></li>
		<li><a href="<?php echo base_url()?>Attendance/grid_view"><i class="fa fa-check-square-o"></i> <span>Attendance</span></a></li>
		
		<li><a href="<?php echo base_url()?>Marks/grid_view"><i class="fa fa-list-ol"></i> <span>Marks</span></a></li>
		<li><a href="<?php echo base_url()?>Exams/grid_view"><i class="fa fa-pencil-square "></i> <span>Exams</span></a></li>
		<li><a href="<?php echo base_url()?>Events/grid_view"><i class="fa fa-camera-retro"></i> <span>Events</span></a></li>
		<li><a href="<?php echo base_url()?>Events/grid_view"><i class="fa fa-calendar"></i> <span>TimeTable</span></a></li>
		<li><a href="<?php echo base_url()?>Events/grid_view"><i class="fa fa-file-text "></i> <span>Leave</span></a></li>
		<li><a href="<?php echo base_url()?>Events/grid_view"><i class="fa fa-bus"></i> <span>Transportation</span></a></li>
        
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->