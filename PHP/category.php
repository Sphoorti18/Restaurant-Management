<div> 	
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" id="addCategory" class="btn btn-info" title="Add Category"><span class="glyphicon glyphicon-plus"></span></button>
			</div>
		</div>
	</div>
	<table id="categoryListing" class="table table-bordered table-striped">
		<thead>
			<tr>						
				<th>Id</th>					
				<th>Category Name</th>					
				<th>Status</th>					
				<th></th>
				<th></th>					
			</tr>
		</thead>
	</table>
</div>

<div id="categoryModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="categoryForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Category</h4>
				</div>
				<div class="modal-body">						
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-right">Category Name <span class="text-danger">*</span></label>
							<div class="col-md-8">
								<input type="text" name="categoryName" id="categoryName" autocomplete="off" class="form-control" required />
							</div>
						</div>
					</div>	
					
					<div class="form-group">
						<div class="row">
							<label class="col-md-4 text-right">Status <span class="text-danger">*</span></label>
							<div class="col-md-8">
								<select name="status" id="status" class="form-control">
									<option value="Enable">Enable</option>
									<option value="Disable">Disable</option>
								</select>
							</div>
						</div>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id" id="id" />						
					<input type="hidden" name="action" id="action" value="" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
we will make ajax request to category_action.php with action listCategory to load categories.

var categoryRecords = $('#categoryListing').DataTable({
	"lengthChange": false,
	"processing":true,
	"serverSide":true,		
	"bFilter": true,
	'serverMethod': 'post',		
	"order":[],
	"ajax":{
		url:"category_action.php",
		type:"POST",
		data:{action:'listCategory'},
		dataType:"json"
	},
	"columnDefs":[
		{
			"targets":[0, 3, 4],
			"orderable":false,
		},
	],
	"pageLength": 10
});	
