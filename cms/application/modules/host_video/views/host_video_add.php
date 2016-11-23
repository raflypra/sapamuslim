<div class="row">
	<div class="col-md-12">
      	<div class="card">
	        <div class="card-header">
	          	<?=$title?>
	        </div>
	        <div id="cardbody" class="card-body">
	        	<div class="loader-container text-center">
		            <div class="icon">
		                <div class="sk-wave">
		                    <div class="sk-rect sk-rect1"></div>
		                    <div class="sk-rect sk-rect2"></div>
		                    <div class="sk-rect sk-rect3"></div>
		                    <div class="sk-rect sk-rect4"></div>
		                    <div class="sk-rect sk-rect5"></div>
		                  </div>
		            </div>
		            <div class="title">Uploading Video</div>
		            <progress id="progress" style="margin-top:10px"></progress> <span id="prozent"></span><br>
		            <a href="#" onclick="uploadAbort();" class="btn btn-danger">Cancel</a>
		        </div>
	        	<?php echo $this->session->flashdata('validation'); ?>
	          	<form id="form" action="<?=base_url()?>host_video/action_add" method="post" enctype="multipart/form-data" class="form form-horizontal">
				  	<div class="section">
				    	<div class="section-title">Information</div>
					    <div class="section-body">
					      	<div class="form-group">
					        	<label class="col-md-3 control-label">Video Title<span class="required" aria-required="true">* </span></label>
						        <div class="col-md-9">
						          	<input type="text" name="title" class="form-control" placeholder="Video Title">
						        </div>
					      	</div>
					      	<div class="form-group">
						        <label class="col-md-3 control-label">Host</label>
						        <div class="col-md-4">
						          	<div class="input-group">
							            <select class="select2" name="host_id">
							            	<?php foreach($hosts as $key):?>
							              	<option value="<?=$key->host_id?>"><?=$key->full_name?></option>
							              	<?php endforeach;?>
							            </select>
						          	</div>
						        </div>
						    </div>
						    <div class="form-group">
						        <label class="col-md-3 control-label">Type</label>
						        <div class="col-md-4">
						          	<div class="input-group">
							            <select class="select2" name="type">
							              	<option value="host">Host</option>
							              	<option value="youtube">Youtube</option>
							            </select>
						          	</div>
						        </div>
						    </div>
						    <div class="form-group">
						        <label class="col-md-3 control-label">Video</label>
						        <div class="col-md-4">
						          	<div class="input-group">
							            <input name="video" type="file" id="fileA" onchange="fileChange();"/>
						          	</div>
						        </div>
						    </div>
						    <div class="form-group">
						        <div class="col-md-3">
						          	<label class="control-label">Description</label>
						        </div>
						        <div class="col-md-9">
						          	<textarea class="form-control" name="desc" placeholder="Description"></textarea>
						        </div>
					      	</div>
					    </div>
				  	</div>
				  	<div class="form-footer">
					    <div class="form-group">
					      	<div class="col-md-9 col-md-offset-3">
						        <a href="#" onclick="uploadFile();" class="btn btn-primary">Submit</a>
						        <a href="<?=base_url()?>host_video" class="btn btn-default">Back</a>
					      	</div>
					    </div>
				  	</div>
				</form>
	        </div>
      	</div>
    </div>
</div>
<script type="text/javascript">

	function fileChange()
	{
	    //FileList Objekt aus dem Input Element mit der ID "fileA"
	    var fileList = document.getElementById("fileA").files;
	 
	    //File Objekt (erstes Element der FileList)
	    var file = fileList[0];
	 
	    //File Objekt nicht vorhanden = keine Datei ausgewählt oder vom Browser nicht unterstützt
	    if(!file)
	        return;
	 
	    document.getElementById("fileName").innerHTML = 'Dateiname: ' + file.name;
	    document.getElementById("fileSize").innerHTML = 'Dateigröße: ' + file.size + ' B';
	    document.getElementById("fileType").innerHTML = 'Dateitype: ' + file.type;
	    document.getElementById("progress").value = 0;
	    document.getElementById("prozent").innerHTML = "0%";
	}

	var client = null;

	function uploadFile()
	{
	    //Wieder unser File Objekt
	    var file = document.getElementById("fileA").files[0];
	    //FormData Objekt erzeugen
	    var formData = new FormData();
	    //XMLHttpRequest Objekt erzeugen
	   	client = new XMLHttpRequest();
		
	    var prog = document.getElementById("progress");
	 
	    if(!file)
	        return;
	 
	    prog.value = 0;
	    prog.max = 100;
	 
	    //Fügt dem formData Objekt unser File Objekt hinzu
	    formData.append("datei", file);
	 
	    client.onerror = function(e) {
	        alert("onError");
	    };
	 
	    client.onload = function(e) {
	        $("#cardbody").removeClass("__loading");
	        document.getElementById("prozent").innerHTML = "100%";
	        prog.value = prog.max;
	        document.getElementById("form").submit();
	    };
	 
	    client.upload.onprogress = function(e) {
			var p = Math.round(100 / e.total * e.loaded);          
	        document.getElementById("progress").value = p; 
	        $("#cardbody").addClass("__loading");           
	        document.getElementById("prozent").innerHTML = p + "%";
	    };
		
		client.onabort = function(e) {
			alert("Upload abgebrochen");
		};
	 
	    client.open("POST", "<?=base_url()?>host_video/upload_video");
	    client.send(formData);
	}

	function uploadAbort() {
		if(client instanceof XMLHttpRequest)
			//Briecht die aktuelle Übertragung ab
			client.abort();
	}
</script>