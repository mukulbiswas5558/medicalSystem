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
        List of Patient to Prescribe
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
							<th>patient Name</th>
							
							<th>State</th>
							<th>Contac No</th>
							<th>Appointment  date</th>
							<th>Appointment  Time</th>

							<th>prescribe date</th>
							<th>symptoms</th>
							<th>prescription</th>

						
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
   

    $("#bookId").val($(this).data('bookingid'));

  
	});
	// save edit record
	 $('#editEmpForm').on('submit',function(){
		var bookId = $('#bookId').val();
		
		var prescribe = $('#prescribe').val();	
 	

		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/prescribeToPatient",
			dataType : "JSON",
			data : {bookId:bookId, prescribe:prescribe},
			success: function(data){
				$("#bookId").val("");
			
        		$("#prescribe").val("");
      
				$('#editEmpModal').modal('hide');
				getAllData();
			}
		});
		return false;
	});
 
function getAllData(){
	$.ajax({
		type  : 'GET',
		url   : '<?php echo base_url(); ?>Details/prescribePatientLists',
		async : false,
		dataType : 'json',
		success : function(data){
          
           console.log("ok call");
		   console.log(data);


			var html = '';
			var i;
			for(i=0; i<data.length; i++){
				html += '<tr id="'+data[i].bookingid+'">'+
						'<td>'+data[i].Name+'</td>'+
						'<td>'+data[i].State+'</td>'+
						'<td>'+data[i].Phone1+'</td>'+
						'<td>'+data[i].bookingDate+'</td>'+
						'<td>'+data[i].appointmentTime+'</td>'+

						'<td>'+data[i].prescribedDate+'</td>'+
						'<td>'+data[i].symptoms+'</td>'+
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
