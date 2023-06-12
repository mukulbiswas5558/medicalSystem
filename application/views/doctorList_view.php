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
        <div class="col-md-12">
          <br>
       
          <br>
          <h1> Add a new Doctor<br>
            <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#addEmpModal"><span class="fa fa-plus"></span> Add New</a></div><br>
          </h1>
        </div>  
        <div class="col-xs-12">
            <div class="box">
				<div class="box-body task-div">
					<table id="tasklist" class="table table-bordered table-striped">
						<thead>
							<tr>
							<th>Title.</th>
							<th>Doctor Name</th>
							<th>User Name</th>
							<th>State</th>
							<th>Consultancy Fees</th>
							<th>Specialization</th>
							<th>Contac No</th>
							<th>Country</th>
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

  <form id="saveEmpForm" method="post">
	<div class="modal fade" id="addEmpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Add New Doctor</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span>
			</button>
		  </div>
		  <div class="modal-body">                       
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Title*</label>
					<div class="col-md-10">
            <select class="form-control" name="Title" id="Title">
                <option value="">Select a title</option>
                <option value="Dr.">Dr.</option>
            </select>
					</div>
          
				</div>
        <div class="form-group row">
					<label class="col-md-2 col-form-label">Name*</label>
					<div class="col-md-10">
					  <input type="text" name="Name" id="Name" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">UserName*</label>
					<div class="col-md-10">
					  <input type="text" name="UserName" id="UserName" class="form-control" required> 
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">State*</label>
					<div class="col-md-10">
					  <input type="text" name="State" id="State" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Phone No*</label>
					<div class="col-md-10">
					  <input type="text" name="Phone1" id="Phone1" class="form-control" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Consultancy Fees:*</label>
					<div class="col-md-10">
					  <input type="text" name="docFees" id="docFees" class="form-control" required>
					</div>
				</div>
				

				<div class="form-group row">
					<label class="col-md-2 col-form-label">Specialization*</label>
					<div class="col-md-10">
						<select class="form-control" name="spec" id="spec">
							<option value="">Select  </option>
							

							<option value="General" >General</option>
							<option value="Cardiologist" >Cardiologist</option>
							<option value="Neurologist" >Neurologist</option>
							<option value="Pediatrician" >Pediatrician</option>
						</select>
					</div>
          
				</div>
        <div class="form-group row">
					<label class="col-md-2 col-form-label">Password*</label>
					<div class="col-md-10">
					  <input type="password" name="password" id="password" class="form-control" required>
					</div>
				</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Save</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<form id="editEmpForm" method="post">
	<div class="modal fade" id="editEmpModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="editModalLabel">Edit Doctor Details</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
				<div class="form-group row">
          <label class="col-md-2 col-form-label">Title*</label>
					<div class="col-md-10">
            <select class="form-control" name="docTitle" id="docTitle">
                <option value="">Select a title</option>
              
                <option value="Dr.">Dr.</option>
            </select>
					</div>
				</div>
        <div class="form-group row">
					<label class="col-md-2 col-form-label">Name*</label>
					<div class="col-md-10">
					  <input type="text" name="docName" id="docName" class="form-control" placeholder="Name" required>
					</div>
				</div>	
				<div class="form-group row">
					<label class="col-md-2 col-form-label">UserName*</label>
					<div class="col-md-10">
					  <input type="text" name="docUserName" id="docUserName" class="form-control" placeholder="UserName" required>
					</div>
				</div>				
				<div class="form-group row">
					<label class="col-md-2 col-form-label">State*</label>
					<div class="col-md-10">
					  <input type="text" name="docState" id="docState" class="form-control" placeholder="State" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Phone No*</label>
					<div class="col-md-10">
					  <input type="text" name="docPhone1" id="docPhone1" class="form-control" placeholder="Phone No" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-2 col-form-label">Address*</label>
					<div class="col-md-10">
					   <textarea name="docLocation" id="docLocation" class="form-control" rows="5" placeholder="Address" required></textarea>
					</div>
				</div>
        <div class="form-group row">
					<label class="col-md-2 col-form-label">Notes*</label>
					<div class="col-md-10">
					   <textarea name="docNotes" id="docNotes" class="form-control" rows="5" placeholder="Notes" ></textarea>
					</div>
				</div>
        <div class="form-group row">
					<label class="col-md-2 col-form-label">Password*</label>
					<div class="col-md-10">
					  <input type="password" name="docpassword" id="docpassword" class="form-control" placeholder="Password" required>
					</div>
				</div>
		  </div>
		  <div class="modal-footer">
       <input type="hidden" name="docid" id="docid" class="form-control">

			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</div>
	  </div>
	</div>
</form>
<form id="blockDoctorForm" method="post">
	<div class="modal fade" id="deleteEmpModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="deleteModalLabel">Block Doctor</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			   <strong>Are you sure to block this person?</strong>
		  </div>
		  <div class="modal-footer">
			<input type="hidden" name="blockDocId" id="blockDocId" class="form-control">
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

$('#saveEmpForm').submit('click',function(){
		var docTitle = $('#Title').val();
		var docName = $('#Name').val();
		var docUserName = $('#UserName').val();
		var docState = $('#State').val();
		var docPhone1 = $('#Phone1').val();
    	var docdocFees = $('#docFees').val();
    	var docpassword = $('#password').val();
		var docspec = $('#spec').val();

  
    
   
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/addDoctor",
			dataType : "JSON",
			data : {Title:docTitle, Name:docName, UserName:docUserName, State:docState, Phone1:docPhone1, docFees:docdocFees, password:docpassword, spec:docspec},
			success: function(data){
				$('#Title').val("");
				$('#Name').val("");
				$('#UserName').val("");
       			 $('#State').val("");
				$('#Phone1').val("");
				$('#Location').val("");
        		$('#password').val("");
				$('#addEmpModal').modal('hide');
				getAllData();
			}
		});
		return false;
	});
	// show edit modal form with emp data
	$('#listRecords').on('click','.editRecord',function(){
		$('#editEmpModal').modal('show');
   
		$("#docid").val($(this).data('id'));
		//	$("#docTitle").val($(this).data('title'));
		$("#docName").val($(this).data('name'));
		$("#docUserName").val($(this).data('username'));
		$("#docState").val($(this).data('state'));
		$("#docPhone1").val($(this).data('phone1'));
		$("#docLocation").val($(this).data('location'));
		$("#docNotes").val($(this).data('notes'));
		$("#docpassword").val($(this).data('password'));
	});
	// save edit record
	 $('#editEmpForm').on('submit',function(){
		var docid = $('#docid').val();
		var docName = $('#docName').val();
		var docTitle = $('#docTitle').val();
		var docUserName = $('#docUserName').val();
		var docState = $('#docState').val();
		var docPhone1 = $('#docPhone1').val();
		var docLocation = $('#docLocation').val();	
		var docNotes = $('#docNotes').val();			
		var docpassword = $('#docpassword').val();			

		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/updateDoctor",
			dataType : "JSON",
			data : {docid:docid, docName:docName, docTitle:docTitle, docUserName:docUserName, docState:docState, docPhone1:docPhone1, docLocation:docLocation, docNotes:docNotes, docpassword:docpassword},
			success: function(data){
				$("#docid").val("");
				$("#docName").val("");
				$('#docUserName').val("");
				$("#docState").val("");
				$('#docState').val("");
				$("#docPhone1").val("");
				$("#docLocation").val("");
				$("#docNotes").val("");
				$("#docpassword").val("");
				$('#editEmpModal').modal('hide');
				getAllData();
			}
		});
		return false;
	});
  $('#listRecords').on('click','.deleteRecord',function(){
		var docId = $(this).data('id');            
		$('#deleteEmpModal').modal('show');
		$('#blockDocId').val(docId);
	});
	// delete emp record
	 $('#blockDoctorForm').on('submit',function(e){
		e.preventDefault();
		var id = $('#blockDocId').val();
		
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url(); ?>Details/blockDoc",
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
						'<td>'+data[i].UserName+'</td>'+		                        
						'<td>'+data[i].State+'</td>'+
						'<td>'+data[i].docFees+'</td>'+
						'<td>'+data[i].spec+'</td>'+
						'<td>'+data[i].Phone1+'</td>'+
						'<td>'+data[i].Country+'</td>'+
						'<td style="text-align:right;">'+
							'<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="'+data[i].id+'" data-Title="'+data[i].title+'" data-name="'+data[i].Name+ '" data-username="'+data[i].UserName+'" data-state="'+data[i].State+'" data-street="'+data[i].Street+'" data-location="'+data[i].Location+ '" data-phone1="'+data[i].Phone1+'" data-country="'+data[i].Country+'" data-notes="'+data[i].Notes+'">Show</a>'+' '+
							'<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="'+data[i].id+'">Block</a>'+
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
