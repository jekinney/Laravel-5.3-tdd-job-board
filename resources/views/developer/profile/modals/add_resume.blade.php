<div class="modal fade" id="addResume" tabindex="-1" role="dialog" aria-labelledby="addResumeItem">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
			<form action="" method="post">
				{{ csrf_field() }}
		      	<div class="modal-header">
		      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		      			<span aria-hidden="true">&times;</span>
		      		</button>
		      		<h4 class="modal-title" id="addResumeItem">Add Resume</h4>
		      	</div>
		      	<div class="modal-body">
		      		<p>
		      			Your word processer should be able to export as a PDF file. Some employers prefer one or the other. 
		      			So to help give them options we require a PDF version and a Word Document version (docx). 
		      			Instead of trying to convert one or the other, it's easier to ensure proper formating if you export 
		      			and save as both types.
		      		</p>

		      		<div class="row">
						<div class="form-group col-sm-6">
							<label for="port-image" class="control-label">PDF Version <span class="text-danger">*</span></label>
							<input type="file" name="image" id="port-image" value="{{ old('image') }}" class="form-control">
						</div>

						<div class="form-group col-sm-6">
							<label for="port-image" class="control-label">Docx Version <span class="text-danger">*</span></label>
							<input type="file" name="image" id="port-image" value="{{ old('image') }}" class="form-control">
						</div>
					</div>

					<p class="text-danger">* are required fields</p>
					
		      	</div>
		    	<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
		    	</div>
			</form>
	    </div>
	</div>
</div>