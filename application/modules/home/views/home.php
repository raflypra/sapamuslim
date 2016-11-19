<style type="text/css">
	/* jssor slider bullet navigator skin 05 css */
	/*
	.jssorb05 div           (normal)
	.jssorb05 div:hover     (normal mouseover)
	.jssorb05 .av           (active)
	.jssorb05 .av:hover     (active mouseover)
	.jssorb05 .dn           (mousedown)
	*/
	.jssorb05 {
	    position: absolute;
	}
	.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
	    position: absolute;
	    /* size of bullet elment */
	    width: 16px;
	    height: 16px;
	    background: url('<?=base_url()?>assets/images/plugins/jssor/b05.png') no-repeat;
	    overflow: hidden;
	    cursor: pointer;
	}
	.jssorb05 div { background-position: -7px -7px; }
	.jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
	.jssorb05 .av { background-position: -67px -7px; }
	.jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

	/* jssor slider arrow navigator skin 22 css */
	/*
	.jssora22l                  (normal)
	.jssora22r                  (normal)
	.jssora22l:hover            (normal mouseover)
	.jssora22r:hover            (normal mouseover)
	.jssora22l.jssora22ldn      (mousedown)
	.jssora22r.jssora22rdn      (mousedown)
	.jssora22l.jssora22lds      (disabled)
	.jssora22r.jssora22rds      (disabled)
	*/
	.jssora22l, .jssora22r {
	    display: block;
	    position: absolute;
	    /* size of arrow element */
	    width: 40px;
	    height: 58px;
	    cursor: pointer;
	    background: url('<?=base_url()?>assets/images/plugins/jssor/a22.png') center center no-repeat;
	    overflow: hidden;
	}
	.jssora22l { background-position: -10px -31px; }
	.jssora22r { background-position: -70px -31px; }
	.jssora22l:hover { background-position: -130px -31px; }
	.jssora22r:hover { background-position: -190px -31px; }
	.jssora22l.jssora22ldn { background-position: -250px -31px; }
	.jssora22r.jssora22rdn { background-position: -310px -31px; }
	.jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
	.jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
</style>
<div id="fh5co-intro-section" style="padding-bottom: 2em;">
	<div style="background: #056839;">
		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 250px; overflow: hidden; visibility: hidden;">
		    <!-- Loading Screen -->
		    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		        <div style="position:absolute;display:block;background:url('<?=base_url()?>assets/images/plugins/jssor/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		    </div>
		    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 250px; overflow: hidden;">
		        <div data-p="225.00" style="display: none;">
		            <img data-u="image" src="<?=base_url()?>assets/images/banner.jpg" />
		        </div>
		        <div data-p="225.00" data-po="80% 55%" style="display: none;">
		            <img data-u="image" src="<?=base_url()?>assets/images/banner.jpg" />
		        </div>
		    </div>
		    <!-- Bullet Navigator -->
		    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
		        <!-- bullet navigator item prototype -->
		        <div data-u="prototype" style="width:16px;height:16px;"></div>
		    </div>
		    <!-- Arrow Navigator -->
		    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
		    <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
		</div>
	</div>
	<div class="container" style="margin-top: 16px;">
		<div class="row">
			<div class="col-md-1">
				<a href="http://makkahlive.net" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/makkahlive.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-2">
				<a href="http://rodja.tv" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/rodja.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-2">
				<a href="http://salamtv.info" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/salamtv.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-2">
				<a href="http://www.insantv.com" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/insan.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-2">
				<a href="http://www.niaga.tv" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/niagatv.jpg" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-2">
				<a href="https://yufid.tv" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/yufid.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
			<div class="col-md-1">
				<a href="http://makkahlive.net/madinalive.aspx" target="_blank">
					<img src="<?=base_url()?>assets/images/channels/madinahlive.png" style="max-height: 50px" class="img-responsive center-this">
				</a>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-featured-section" style="padding-top: 32px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="bs-docs-example" style="margin-bottom: 10px">
				    <ul id="myTab" class="nav nav-tabs">
				       	<li class="active"><a href="#kajian_sunnah" data-toggle="tab">Kajian Sunnah</a></li>
				       	<li><a href="#tipsniaga" data-toggle="tab">Tips & niaga</a></li>
				       	<li><a href="#jadwalkajian" data-toggle="tab">Jadwal Kajian</a></li>
				    </ul>
				</div>
				<div class="row">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="kajian_sunnah">
							<?php foreach($hosts as $key):?>
								<div class="col-md-4 col-xs-6 text-center">
									<div class="blog-inner">
										<a href="<?=base_url()?>host/detail/<?=strEncrypt($key->host_id)?>"><img class="img-responsive" src="<?=base_url()?>assets/images/hosts/<?=$key->photo?>" onerror="this.src='<?=base_url()?>assets/images/default_host.jpg'" alt="Image"></a>
										<div class="desc">
											<h5 style="margin-bottom: 0px !important;"><a href="<?=base_url()?>host/detail/<?=strEncrypt($key->host_id)?>" class="fullName"><?= (strlen($key->full_name) > 25 ? substr($key->full_name, 0, 22).'...':$key->full_name)?></a></h5>
											<p style="margin-bottom: 0px !important; margin-top: 10px;"><a href="<?=base_url()?>host/detail/<?=strEncrypt($key->host_id)?>" class="btn <?=($key->online == 1 ? 'btn-primary-red btn-outline-red':'btn-primary btn-outline')?> with-arrow"><?=($key->online == 1 ? 'Live':'12 Video')?><i class="icon-arrow-right"></i></a></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="tab-pane fade" id="tipsniaga">
						</div>
						<div class="tab-pane fade" id="jadwalkajian">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="bs-docs-example" style="margin-bottom: 10px">
				    <h5 class="center-this greenback">Ceramah Pendek</h5>
				</div>
				<div class="row">
					<?php foreach($c_pendek as $key):?>
						<div class="col-md-12 text-center">
							<div class="blog-inner">
								<a href="<?=base_url()?>ceramah_pendek/detail/<?=strEncrypt($key->id)?>"><img class="img-responsive" title="<?=$key->title?>" src="http://img.youtube.com/vi/<?=$key->youtube_id?>/0.jpg" onerror="this.src='<?=base_url()?>assets/images/default_host.jpg'" alt="Image"></a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div id="fh5co-services-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Awesome Services</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-graph"></i></span>
				<h3>Finance Dashboard</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-heart"></i></span>
				<h3>Made with Love</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-key"></i></span>
				<h3>Help &amp; Support</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>

		</div>
	</div>
</div> -->
<div id="fh5co-blog-section" class="fh5co-grey-bg-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Artikel</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?=base_url()?>assets/images/image_4.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">New iPhone 6 Released</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?=base_url()?>assets/images/image_5.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">Start your day with a beautiful appearance</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?=base_url()?>assets/images/image_6.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">Bookmarksgrove right</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-client-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Nasehat Ustadz</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="testimony">
					<span class="quote"><img class="img-responsive img-circle" style="width: 60px; margin-top: 10px" src="<?=base_url()?>assets/images/default_profile.jpg"></span>
					<blockquote>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</blockquote>
				</div>
			</div>
			<div class="col-md-6 text-center">
				<div class="testimony">
					<span class="quote"><img class="img-responsive img-circle" style="width: 60px; margin-top: 10px" src="<?=base_url()?>assets/images/default_profile.jpg"></span>
					<blockquote>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$('#myTab a').click(function (e) {
    if($(this).parent('li').hasClass('active')){
        $( $(this).attr('href') ).hide();
    }
    else {
        e.preventDefault();
        $(this).tab('show');
    }
});

</script>