<div id="fh5co-about-section" style="padding: 2em !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-7">
						<div class="work-inner" style="padding: 10px">
							<object id="broadcaster" wmode="opaque" name="broadcaster" uname="<?php echo $record[0]->username ?>" type="application/x-shockwave-flash" data="<?php echo base_url('assets/swf/broadcaster.swf') ?>" width="100%" height="450">
		                        <param name="movie" value="<?php echo base_url('assets/swf/broadcaster.swf') ?>"/>
		                        <param name="quality" value="high"/>
		                        <param name="allowscriptaccess" value="always"/>
		                        <a href="http://www.adobe.com/go/getflash">
		                            <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
		                        </a>
		                    </object>
		                    <script type="text/javascript">
							window.onload = pageInit;
							var streamApp ="<?php echo $record[0]->username ?>";
							function pageInit(){
								setTimeout(function(){
									jsReady = true;
									
								//	console.log('---');
								//	console.log('streamURL: '+streamURL);
								//	console.log('streamPort: '+streamPort);
								//	console.log('streamApp: '+streamApp);
								//	console.log('streamName: '+streamName);
									if(typeof(document.getElementById("broadcaster").sendParameter)=='function'){
										document.getElementById("broadcaster").sendParameter(streamURL, streamPort, streamApp, streamName, logoURL);
									}
								}, 2000);
							}
							</script>
							<div class="row" style="margin-top: 10px">
								<div class="col-md-2 col-xs-4">
									<img class="img-responsive" src="<?=base_url()?>assets/images/hosts/<?=$record[0]->photo?>" onerror="this.src='<?=base_url()?>assets/images/default_host.jpg'" alt="Image">
								</div>
								<div class="col-md-10 col-xs-10">
									<div class="row">
										<div class="col-md-12">
											<span><?=$record[0]->full_name?></span>
										</div>
										<div class="col-md-12">
											<button class="btn btn-info" style="padding: 5px 20px !important;font-size: 13px !important; border-radius: 5px !important;">Follow</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center">
						<div class="work-inner">
							<div class="desc">
								<h3>Public Chatting</h3>
								<span>Sapa Muslim Chatroom</span>
							</div>
							<div style="width: 100%; height: 300px; background: #eee"></div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>