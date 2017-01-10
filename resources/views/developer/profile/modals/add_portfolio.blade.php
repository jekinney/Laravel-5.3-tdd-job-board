<div class="modal fade" id="addPortfolio" tabindex="-1" role="dialog" aria-labelledby="addPortfolioItem">
  	<div class="modal-dialog" role="document">
  		<div class="modal-content">
			<form action="" method="post">
				{{ csrf_field() }}
		      	<div class="modal-header">
		      		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		      			<span aria-hidden="true">&times;</span>
		      		</button>
		      		<h4 class="modal-title" id="addPortfolioItem">Add Portfolio Item</h4>
		      	</div>
		      	<div class="modal-body">
					<div class="form-group">
						<label for="port-name" class="control-label">Name/Title <span class="text-danger">*</span></label>
						<input type="text" name="name" id="port-name" value="{{ old('name') }}" class="form-control">
					</div>

					<div class="form-group">
						<label for="port-description" class="control-label">Description <span class="text-danger">*</span></label>
						<textarea name="description" id="port-description" class="form-control">{{ old('description') }}</textarea>
					</div>
					
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="port-site" class="control-label">Site Link <span class="text-danger">*</span></label>
							<input type="url" name="link_to_site" id="port-site" value="{{ old('link_to_site') }}" class="form-control">
						</div>

						<div class="form-group col-sm-6">
							<label for="port-code" class="control-label">Code Link</label>
							<input type="url" name="link_to_code" id="port-code" value="{{ old('link_to_code') }}" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label for="port-image" class="control-label">Screenshot <span class="text-danger">*</span></label>
						<input type="file" name="image" id="port-image" value="{{ old('image') }}" class="form-control">
					</div>
					
					<p class="text-danger">* are required fields</p>
		      	</div>
		    	<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
		    	</div>
			</form>
	    </div>
	</div>
</div>