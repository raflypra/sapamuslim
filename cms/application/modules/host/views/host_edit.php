<div class="row">
	<div class="col-md-12">
      	<div class="card">
	        <div class="card-header">
	          	<?=$title?>
	        </div>
	        <div class="card-body">
	        	<?php echo $this->session->flashdata('validation'); ?>
	          	<form action="<?=base_url()?>host/action_edit/<?=$id?>" method="post" class="form form-horizontal">
				  	<div class="section">
				    	<div class="section-title">Information</div>
					    <div class="section-body">
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">Username<span class="required" aria-required="true">* </span></label>
						        <div class="col-md-9">
						          	<input type="text" name="username" class="form-control" placeholder="Username" value="<?=$record->username?>">
						        </div>
					      	</div>
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">Full Name<span class="required" aria-required="true">* </span></label>
						        <div class="col-md-9">
						          	<input type="text" name="full_name" class="form-control" placeholder="Full Name" value="<?=$record->full_name?>">
						        </div>
					      	</div>
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">Phone</label>
						        <div class="col-md-9">
						          	<input type="text" name="phone_number" class="form-control" placeholder="Phone" value="<?=$record->phone_number?>">
						        </div>
					      	</div>
					      	<div class="form-group">
						        <label class="col-md-3 control-label">Type</label>
						        <div class="col-md-4">
						          	<div class="input-group">
							            <select class="select2" name="type">
							              	<option <?=($record->type == 'host' ? 'selected' : '')?> value="host">Host</option>
							              	<option <?=($record->type == 'youtube' ? 'selected' : '')?> value="youtube">Youtube</option>
							            </select>
						          	</div>
						        </div>
						     </div>
					      	<div class="form-group">
						        <div class="col-md-3">
						          	<label class="control-label">Info</label>
						        </div>
						        <div class="col-md-9">
						          	<textarea class="form-control" name="info_text" placeholder="Info"><?=$record->info_text?></textarea>
						        </div>
					      	</div>
					    </div>
				  	</div>
				  	<div class="section">
				    	<div class="section-title">Security</div>
					    <div class="section-body">
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">New Password</label>
						        <div class="col-md-9">
						          	<input type="password" name="n_password" class="form-control" placeholder="Leave blank if no change">
						        </div>
					      	</div>
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">Confirm Password</label>
						        <div class="col-md-9">
						          	<input type="password" name="c_password" class="form-control" placeholder="Leave blank if no change">
						        </div>
					      	</div>
					    </div>
					</div>
				  	<div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-9 col-md-offset-3">
						        <button type="submit" class="btn btn-primary">Submit</button>
						        <a href="<?=base_url()?>host" class="btn btn-default">Back</a>
					      	</div>
					    </div>
				  	</div>
				</form>
	        </div>
      	</div>
    </div>
</div>