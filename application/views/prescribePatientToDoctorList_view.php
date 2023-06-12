<style type="text/css">
/*tr:hover {
  .badge
  background-color: #ffa;
}*/

</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      History Prescribed  List of Doctor
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
      </ol>
    </section>

    <div><?php echo $this->session->flashdata('message'); ?></div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-xs-12">
            <div class="box">
				<div class="box-body task-div">
					<table id="tasklist" class="table table-bordered table-striped">
						<thead>
							<tr>
							
							<th>Doctor Name</th>
							<th>State</th>
							<th>symptoms</th>
							<th>Booking Date</th>
							<th>Appointment  Date</th>

							<th>Consultancy Fees:</th>

							<th>Prescription</th>
							
							</tr>
						</thead>
						<tbody id="listRecords"> 
						</tbody>
					</table>
				</div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  



 
<!-- ./wrapper -->
<script type="text/javascript">
 


$( document ).ready(function() {
    getAllData();
    $(function () {
      $('#tasklist').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      "pageLength"  : 30
    })  
});
    console.log( "ready!" );
});


	// show edit modal form with emp data
	$('#listRecords').on('click','.editRecord',function(){
		$('#editEmpModal').modal('show');
   
		$("#docid").val($(this).data('id'));
		//	$("#docTitle").val($(this).data('title'));
		$("#docName").val($(this).data('name'));
			
		$("#docLocation").val($(this).data('location'));
  
	});
	// save edit record
	 $('#editPatientForm').on('submit',function(){
		var docid = $('#docid').val();
		
		var symptoms = $('#symptoms').val();	
 	

		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/bookDoctor",
			dataType : "JSON",
			data : {docid:docid, symptoms:symptoms},
			success: function(data){
				$("#docid").val("");
			
        		$("#symptoms").val("");
      
				$('#editEmpModal').modal('hide');
				getAllData();
			}
		});
		return false;
	});
 
function getAllData(){
	$.ajax({
		type  : 'GET',
		url   : '<?php echo base_url(); ?>Details/prescribeByPatientList',
		async : false,
		dataType : 'json',
		success : function(data){
          
           console.log("ok call");


			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Name+'</td>'+
						'<td>'+data[i].State+'</td>'+
						'<td>'+data[i].symptoms+'</td>'+
						'<td>'+data[i].bookingDate+'</td>'+
						'<td>'+data[i].appointmentTime+'</td>'+

						'<td>'+data[i].docFees+'</td>'+

						'<td>'+data[i].prescription+'</td>'+
					
					
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
}



</script>
</body>
</html>
