<div id="fh5co-about-section" style="padding: 2em !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-7">
						<div class="work-inner" style="padding: 10px">
							<iframe style="width: 100%; min-height: 400px; max-height: 400px;" src="https://www.youtube.com/embed/<?=$record[0]->youtube_id?>"></iframe>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="work-inner">
							<div class="desc">
								<h3>Video Lainnya</h3>
							</div>
							<div class="row" style="padding: 10px; max-height: 400px; overflow: scroll; white-space: nowrap;">
								<?php foreach($youtube as $key):?>
									<div class="col-md-12 text-center">
										<div class="blog-inner">
											<a href="<?=base_url()?>ceramah_pendek/detail/<?=strEncrypt($key->id)?>"><img class="img-responsive" title="<?=$key->title?>" src="http://img.youtube.com/vi/<?=$key->youtube_id?>/0.jpg" onerror="this.src='<?=base_url()?>assets/images/default_host.jpg'" alt="Image"></a>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
</div>