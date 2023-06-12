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
       Booking  List of Doctor
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
							<th>Appintment Id</th>

							<th>Doctor Name</th>
							<th>Patient Name</th>

							<th>State</th>
							<th>symptoms</th>
							<th>Consultancy Fees:</th>

							<th>Appointment  Date</th>
							<th>Appointment  Time</th>
							<th>Action</th>

							
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
  <form id="cancelappointForm" method="post">
	<div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="deleteModalLabel">Cancel Appointment</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			   <strong>Are you sure to cancel Appointment?</strong>
		  </div>
		  <div class="modal-footer">
			<input type="text" name="blockappbookingid" id="blockappbookingid" class="form-control">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
			<button type="submit" class="btn btn-primary">Yes</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
  



 
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


	
	$('#listRecords').on('click','.deleteRecord',function(){
		var appbookingid = $(this).data('bookingid');            
		$('#deleteEmpModal').modal('show');
		$('#blockappbookingid').val(appbookingid);
	});
	$('#cancelappointForm').on('submit',function(e){
		e.preventDefault();
		var id = $('#blockappbookingid').val();
		
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/cancelAppointment",
			dataType : "JSON",  
			data : {id:id},
			success: function(data){
			$("#"+id).remove();
			$('#blockDocId').val("");
			$('#deleteEmpModal').modal('hide');
			getAllData();
			}
		});
		return false;


		
	});
 
function getAllData(){
	$.ajax({
		type  : 'GET',
		url   : '<?php echo base_url(); ?>Details/appointmentListByAdmin',
		async : false,
		dataType : 'json',
		success : function(data){
          
           console.log("ok call");
		   console.log(data);



			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].bookingid+'">'+
						'<td>'+data[i].bookingid+'</td>'+
						'<td>'+data[i].Name+'</td>'+
						'<td>'+data[i].patientName+'</td>'+

						'<td>'+data[i].State+'</td>'+
						'<td>'+data[i].symptoms+'</td>'+
						'<td>'+data[i].docFees+'</td>'+
						'<td>'+data[i].bookingDate+'</td>'+
						'<td>'+data[i].appointmentTime+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-bookingid="'+data[i].bookingid+'">Cancel</a>'+
						'</td>'+
					
					
						'</tr>';
			}
			$('#listRecords').html(html);					
		}
	});
}



</script>
</body>
</html>
