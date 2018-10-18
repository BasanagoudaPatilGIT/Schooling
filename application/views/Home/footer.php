  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url()?>/Dashboard/index">TMT</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- SlimScroll -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()?>LTE-Jar/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()?>LTE-Jar/bower_components/morris.js/morris.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>LTE-Jar/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url()?>LTE-Jar/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>LTE-Jar/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>LTE-Jar/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>LTE-Jar/dist/js/demo.js"></script>
<script src="<?php echo base_url()?>LTE-Jar/jquery-ui-1.12.1/jquery1.12.4.js"></script>
<script src="<?php echo base_url()?>LTE-Jar/jquery-ui-1.12.1/jquery-ui.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()?>LTE-Jar/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="<?php echo base_url() ?>LTE-Jar/bower_components/dataTables.net/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>LTE-Jar/bower_components/dataTables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
function passvar(id)
{ 
//alert(id);
$.ajax({
url:"<?php echo base_url();?>Subjects/geteachsubdetails/"+id,
success: function(data)
{
$('#subid').val(data.id);
$('#subname').val(data.sub_name);
$('#cbo_teacher').val(data.sub_teacher_id);
},
error: function(){alert('Error');}

});
}

</script>
<script>
<!-- ******************************************add****************************************** --> 	
$(document).ready(function() {
			var a= 0;
			$('#add_desc').click(function(){
				a= a+1;
				if( a< 5){
				desc_row = $('#family_Block li:first').clone(true);
				desc_row.find('input[type=text]').val('');
				$('#family_Block').append(desc_row);
				}
				else{
					alert('Only 5 images are allowed for each event');
				}
			});
				
		   $('.remove_desc').click(function(){
				//alert('xyz');
			if ( $('#family_Block li').length > 1 ){
				$(this).closest('li').remove();
			}getTotal()
		   });
		<!-- ******************************************add****************************************** --> 	
});
		</script>
<script>
$(document).ready(function() {
$('#cbo_class').change( function(){
				var id = $('#cbo_class').val();
				if( $('#rollnum').val() != '' ){
				$('#rollnum').val('');
				}
				//alert(id);
				
				$.ajax({
					url:"<?php echo base_url();?>json/get_student_section/"+id,
					success: function(data){
						$("#cbo_section option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
                        });
						
						$.each(data, function(key, value){
							//alert(value.id + " " + value.class_section);
							$("#cbo_section").append("<option value='" + value.id + "'>" +  value.class_section + "</option>");
						});
					},
					error: function(){alert('Error');}
				});
			});
});
</script>
<script>
//Class and Roll Number chnages

			$('#cbo_section').change( function(){
				var id = $('#cbo_section').val();
				//alert(id);
				if( $('#cbo_section').val() != 'selected' ){
				$('#rollnum').val('');
				}
				$.ajax({
					url:"<?php echo base_url();?>json/get_student_rollnum/"+id,
					success: function(data){
						//alert(id);
						$("#rollnum").val(data.count);
					},
					error: function(){alert('Error');}
				});
			});
</script>


<script>
$(document).ready(function() {
$('#cbo_class_list').change( function(){
				var id = $('#cbo_class_list').val();
				//alert(id);
				
				$.ajax({
					url:"<?php echo base_url();?>json/get_student_section/"+id,
					success: function(data){
						$("#cbo_section_list option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
                        });
						
						$.each(data, function(key, value){
							//alert(value.id + " " + value.class_section);
							$("#cbo_section_list").append("<option value='" + value.id + "'>" +  value.class_section + "</option>");
						});
					},
					error: function(){alert('Error');}
				});
			});
});
</script>
<script>
//Class and Roll Number chnages

			$('#cbo_section_list').change( function(){
				var id = $('#cbo_section_list').val();
				//alert(id);
				$.ajax({
					url:"<?php echo base_url();?>json/get_teacher_section/"+id,
					success: function(data){
					//alert(data.id);
					$("#cbo_teacher_list").val(data.id);	
					},
					error: function(){alert('Error');}
				});
			});
</script>

<script>
$(document).ready(function() {
$('#cbo_region').change( function(){
				var id = $('#cbo_region').val();
				//alert(id);
				
				$.ajax({
					url:"<?php echo base_url();?>json/get_vehicle_no/"+id,
					success: function(data){
						$("#cbo_vehicle_num option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
                        });
						
						$.each(data, function(key, value){
							//alert(value.id + " " + value.class_section);
							$("#cbo_vehicle_num").append("<option value='" + value.id + "'>" +  value.vehicle_number + "</option>");
						});
					},
					error: function(){alert('Error');}
				});
			});
});
</script>
<script>
$(document).ready(function() {
$('#cbo_region_list').change( function(){
				var id = $('#cbo_region_list').val();
				//alert(id);
				
				$.ajax({
					url:"<?php echo base_url();?>json/get_vehicle_no/"+id,
					success: function(data){
						$("#cbo_vehicle_num_list option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
							
                        });
						$("#cbo_route_list option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
                        });
						$.each(data, function(key, value){
							//alert(value.id + " " + value.class_section);
							$("#cbo_vehicle_num_list").append("<option value='" + value.id + "'>" +  value.vehicle_number + "</option>");
						});
					},
					error: function(){alert('Error');}
				});
			});
});
</script>
<script>
$(document).ready(function() {
$('#cbo_vehicle_num_list').change( function(){
				var id = $('#cbo_vehicle_num_list').val();
				//alert(id);
				
				$.ajax({
					url:"<?php echo base_url();?>json/get_route_list/"+id,
					success: function(data){
						$("#cbo_route_list option").each(function(index, element) {
                            if( $(this).val() != '' ){
								$(this).remove();
							}
							
                        });
						
						$.each(data, function(key, value){
							//alert(value.id + " " + value.class_section);
							$("#cbo_route_list").append("<option value='" + value.id + "'>" +  value.route_name + "</option>");
						});
					},
					error: function(){alert('Error');}
				});
			});
});
</script>

<script>
$('#teacherassingment').click( function(){
	var id = $('#subid').val();
	//alert(id);
	
	 $.ajax({
		method:'POST',
		url:"<?php echo base_url();?>Subjects/teacher_assignment/"+id,
		data: $('#AssignmentTeacher').serialize(),
		success : function(data){alert('Record Updated Successfully')},
		error: function(){}
		
	});

	
});

</script>



<script>

 $(function () {
    $('#example1').DataTable(
	);
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
	  "scrollX": true,
	  "columnDefs": [ { "width": "20%", "targets": 2},{ "width": "30%", "targets": 3},
					  { "width": "30%", "targets": 4},]
    })
	
});

</script>



<script>
$('#packdate').datepicker({
	format: 'yyyy-mm-dd',
	endDate: '0d',
	autoclose:true,
	showOnFocus:true,
	todayHighlight:true,
});
</script>

<script>
$('#expdate').datepicker({
	format: 'yyyy-mm-dd',
	startDate: '2d',
	autoclose:true,
	showOnFocus:true,
	todayHighlight:true,
});
</script>


<script>
$(document).ready(function() {
$( "#productname" ).autocomplete({
  source: "<?php echo base_url()?>/Invoice/auto_search/?",
  select: function(event,ui){
$('[name="productname"]').val(ui.item.label);
$('[name="batchno"]').val(ui.item.batchno);
$('[name="productid"]').val(ui.item.id);
$('[name="productcode"]').val(ui.item.prodcode);
$('[name="stock"]').val(ui.item.stock);
$('[name="salerate"]').val(ui.item.price);
$('[name="tax"]').val(ui.item.tax);
$('[name="stripsinbox"]').val(ui.item.stripsinbox);
$('[name="pcsinstrip"]').val(ui.item.pcsinstrip);
$('[name="stockinbox"]').val($('#stock').val() / $('#stripsinbox').val());
$('[name="stockinstrip"]').val($('#stock').val() / $('#pcsinstrip').val());
$('[name="stockinpcs"]').val(ui.item.stock);
$('[name="qty"]').val(1);
$('[name="lineamount"]').val($('#qty').val() * $('#salerate').val());
$('[name="linetaxamt"]').val($('#lineamount').val() * $('#tax').val() /100);
}
});
});
</script>

<script type="text/javascript">
$('#cbo_uom').change(function(){
	$stock = $('#stock').val();
	$('#qty').val('');
	$('#lineamount').val('');
	$('#linetaxamt').val('');
	if($stock == ''){
	alert('Select Product Fisrt');
	}else{
	if($('#cbo_uom').val() == 'Boxs'){
	$('#stock').val($('#stockinbox').val());
	}else if($('#cbo_uom').val() == 'Strips'){
	$('#stock').val($('#stockinstrip').val());
	}else if($('#cbo_uom').val() == 'Pcs'){
	$('#stock').val($('#stockinpcs').val());
	}
	}
});
</script>


<script type="text/javascript">
$('#qty').change(function(){
	if($('#productname').val() == ''){
		alert('Please select product and then try');
		$('#qty').val('');
	}else{
	$stockinbox = $('#stockinbox').val();
	$stockinstrip = $('#stockinstrip').val();
	$stockinpcs = $('#stockinpcs').val();
	
	if($('#cbo_uom').val() == 'Boxs'){
	if($('#qty').val() >= $stockinbox ){
	alert("Entered Qty is more than stock");
	$('#qty').val('');
	$('#lineamount').val('');
	$('#linetaxamt').val('');
	}else{
	$amt = $('#qty').val() * $('#stripsinbox').val() * $('#pcsinstrip').val() * $('#salerate').val();
	$tax = $amt * $('#tax').val() /100;
	$('#linetaxamt').val($tax);
	$('#lineamount').val($amt);
	}
	}else if($('#cbo_uom').val() == 'Strips'){
	
	if($('#qty').val() >= $stockinstrip ){
	alert("Entered Qty is more than stock");
	$('#qty').val('');
	$('#lineamount').val('');
	$('#linetaxamt').val('');
	}else{
	$amt = $('#qty').val() * $('#pcsinstrip').val() * $('#salerate').val();
	$tax = $amt * $('#tax').val() /100;
	$('#linetaxamt').val($tax);
	$('#lineamount').val($amt);
	}
	}else if($('#cbo_uom').val() == 'Pcs'){
	
	if($('#qty').val() >= $stockinpcs ){
	alert("Entered Qty is more than stock");
	$('#qty').val('');
	$('#lineamount').val('');
	$('#linetaxamt').val('');
	}else{
	$amt = $('#qty').val() * $('#salerate').val();
	$tax = $amt * $('#tax').val() /100;
	$('#linetaxamt').val($tax);
	$('#lineamount').val($amt);
	}
	}
	}
});
</script>
  
  
<script>

$("#password").password({
    eyeClass: 'fa',
    eyeOpenClass: 'fa-eye',
    eyeCloseClass: 'fa-eye-slash'
})

</script>

<script>
  $(document).ready(function () {
    setInterval(refresh, 1000);
  });
</script>


<script>
$('#preview').click( function(){
	window.open( "<?php echo base_url()?>TestReport/reportpreview/<?php echo $testreport_row['id'];?>" )
});
</script>





<script type="text/javascript">
function allcomments(id)
{
//alert(id);
$.ajax({
		url:"<?php echo base_url();?>TestReport/get_comment_list/"+id,
		success: function(data){
			$(".oldcomments ul div").remove();
			$.each(data, function(key, value){
			$(".oldcomments ul").append("<div><li><span><b>"+ data[key].commented_by +"</b> ["+ data[key].commented_datetime +"]</span></li><div><pre>"+ data[key].comments+"</pre></div></div>");
			});
			}
		//error: function(){alert('Error');}
	});
}
</script>

<script>
 //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#ff6347","#3cb371", "#8b7d7b","#e6b798"],
      data: [
        {label: "Failed", value: <?php echo $failed_count; ?>},
        {label: "Passed", value: <?php echo $pass_count; ?>},
        {label: "Not Completed", value: <?php echo $notcompleted_count; ?>},
        {label: "OnHold", value: <?php echo $onhold_count; ?>},
      ],
      hideHover: 'auto'
    });
	
</script>

<script>
//date_picker

$('#Doj').datepicker({
autoclose:true,
format:'dd-mm-dd'

});

//date_picker

$('#Dol').datepicker({
autoclose:true,
format:'yyyy-mm-dd'

});

//Date picker
$('#Dob').datepicker({
autoclose:true,
format:'yyyy-mm-dd'
});

//Date picker
$('.datepicker').datepicker({
autoclose: true,
format:'yyyy-mm-dd'
});

//Timepicker
$('.timepicker').timepicker({
showInputs: false
});

//bootstrap WYSIHTML5 - text editor
//$('.textarea').wysihtml5()
</script>


<script>
$(document).ready(function () {
$format = "%Y-%m-%d"; 
$dateval = mdate($format);
$val = $('#startdate').val();
alert($val);
alert($dateval);
if(true){}else{}
    
});
</script>
<script>
//Add Test Case
$('#addtestcase').click( function(){
var id = $('#cbo_project').val();
if(id =="SELECT")
alert("Please select a Project and then try");
else
window.location="<?php echo base_url();?>TestCase/addtestcase/"+id;

})
</script>
<script>
//Export Test Case
$('#exporttestcase').click( function(){
var id = $('#cbo_project').val();
if(id =="SELECT")
alert("Please select a Project and then try");
else
window.location="<?php echo base_url();?>Excel/export_test_cases/"+id;

})
</script>
<script>
//Template
$('#template').click( function(){
window.location="<?php echo base_url();?>Excel/test_case_template";
})
</script>

<script>
//import Test Case
$('#testupload').click( function(){
var id = $('#cbo_project').val();
if(id =="SELECT")
alert("Please select a Project and then try");
else
window.location="<?php echo base_url();?>Excel/uploadtestcase/"+id;

})
</script>


<script>
//Create Test Report
$('#createreport').click( function(){
	var id = $('#cbo_project').val();
	if(id =="SELECT")
	alert("Please select a Project and then try");
	else
	window.location="<?php echo base_url();?>TestReport/createtestreport/"+id;
	
});




</script>


<script>
$('#senarioupdatebtn').click( function(){
	var id = $('#idnum').val();
	//alert(id);
	 $.ajax({
		method:'POST',
		url:"<?php echo base_url();?>TestReport/updatetestreportscenario/"+id,
		data: $('#updatescerecord').serialize(),
		success : function(data){alert('Record Updated Successfully')},
		error: function(){}
		
	});

	
});
</script>
<script>
$('#appdetails').click( function(){
	var id = <?php echo $_SESSION['REPORTID'];?>;
	//alert(id);
	 $.ajax({
		method:'POST',
		url:"<?php echo base_url()?>TestReport/add_login_details/"+id,
		data: $('#addappdetails').serialize(),
		success : function(data){alert('Record Updated Successfully')},
		error: function(){}
		
	});

	
});
</script>

<?php /*?><script>
$('#testupload').click( function(){
	var id = $('#cbo_project_file').val();
	var val = $('#file').val();
	if(id =="SELECT" || val == '')
	alert("Please select a Project and file then try");
	else{
	//alert(id);
	 $.ajax({
		method:'POST',
		url:"<?php echo base_url()?>Excel/import_test_cases/"+id,
		data: $('#testcaseupload').serialize(),
		success : function(data){alert('Record Updated Successfully')},
		error: function(){}
		
	});
	}
	
});
</script><?php */?>


<script>

//Image ADD
  $('#add_desc').click(function(){
		//alert('xyz');
		
		desc_row = $('#app_Block li:first').clone(true);
		desc_row.find('input[type=text]').val('');
		desc_row.find('input[type=file]').val('');
		desc_row.find('input[type=hidden]').val('');
		desc_row.find('select').val('');
		$('#app_Block').append(desc_row);
	});
		
   $('.remove_desc').click(function(){
		//alert('xyz');
	if ( $('#app_Block li').length > 1 ){
		$(this).closest('li').remove();
		getTotal()
	}
   });//Image END
</script>


</body>
</html>

