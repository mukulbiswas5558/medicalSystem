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
        List of Doctor
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
							<th>Title.</th>
							<th>Doctor Name</th>
							<th>State</th>
							<th>Consultancy Fees:</th>
							<th>Specialization</th>
							<th>Contac No</th>
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

  
<form id="editPatientForm" method="post">
	<div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="editModalLabel">Add about symptoms </h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
				
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Add about symptoms*</label>
					<div class="col-md-10">
					   <textarea name="symptoms" id="symptoms" class="form-control" rows="5" placeholder="AdAdd about symptoms" required></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Appintment date*</label>
					<div class="col-md-10">
					  <input type="date" name="bookingDate" id="bookingDate" class="form-control" required>
					</div>				</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Appintment Time*</label>
					<div class="col-md-10">
					<select name="appointmentTime" class="form-control" id="appointmentTime" required="required">
                      <option value="" disabled selected>Select Time</option>
                      <option value="8:00 AM">8:00 AM</option>
                      <option value="10:00 AM">10:00 AM</option>
                      <option value="12:00 PM">12:00 PM</option>
                      <option value="2:00 PM">2:00 PM</option>
                      <option value="4:00 PM">4:00 PM</option>
                    </select>
					</div>
				</div>
	
		  <div class="modal-footer">
       <input type="hidden" name="docid" id="docid" class="form-control">

			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Appointment</button>
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
		var bookingDate = $('#bookingDate').val();
		var appointmentTime = $('#appointmentTime').val();	
 	

		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/bookDoctor",
			dataType : "JSON",
			data : {docid:docid, symptoms:symptoms, bookingDate:bookingDate, appointmentTime:appointmentTime},
			success: function(data){
				$("#docid").val("");
			
        		$("#symptoms").val("");
				$("#bookingDate").val("");
				$("#appointmentTime").val("");
      
				$('#editEmpModal').modal('hide');
				getAllData();
			}
		});
		return false;
	});
 
function getAllData(){
	$.ajax({
		type  : 'GET',
		url   : '<?php echo base_url(); ?>Details/doctorLists',
		async : false,
		dataType : 'json',
		success : function(data){
          
           console.log("ok call");


			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].id+'">'+
						'<td>'+data[i].Title+'</td>'+
						'<td>'+data[i].Name+'</td>'+
						'<td>'+data[i].State+'</td>'+
						'<td>'+data[i].docFees+'</td>'+
						'<td>'+data[i].spec+'</td>'+
						'<td>'+data[i].Phone1+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" >Appointment</a>'+' '+
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
