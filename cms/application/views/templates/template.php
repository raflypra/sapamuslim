<!DOCTYPE html>
<html>
	<head>
	  	<title>Sapa Muslim Admin | <?=$title?></title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1">

	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendor.css">
	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/flat-admin.css">

	  	<!-- Theme -->
	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme/blue-sky.css">
	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme/blue.css">
	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme/red.css">
	  	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/theme/yellow.css">
	  	<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

	</head>
	<body>
	  	<div class="app app-default">
			<aside class="app-sidebar" id="sidebar">
			  	<div class="sidebar-header">
			    	<a class="sidebar-brand" href="<?=base_url()?>">
			    		<img src="<?=base_url()?>assets/images/logo.png" class="img-responsive" height="50px">
			    	</a>
				    <button type="button" class="sidebar-toggle">
				      	<i class="fa fa-times"></i>
				    </button>
			  	</div>
			  	<div class="sidebar-menu">
				    <ul class="sidebar-nav">
				      	<li class="<?=($this->uri->segment(1) == '' || $this->uri->segment(1) == 'dashboard' ? 'active':'')?>">
					        <a href="<?=base_url()?>dashboard">
					          	<div class="icon">
					            	<i class="fa fa-tasks" aria-hidden="true"></i>
					          	</div>
					          	<div class="title">Dashboard</div>
					        </a>
				      	</li>
				      	<li class="<?=($this->uri->segment(1) == 'host' ? 'active':'')?>">
					        <a href="<?=base_url()?>host">
					          	<div class="icon">
					            	<i class="fa fa-video-camera" aria-hidden="true"></i>
					          	</div>
					          	<div class="title">Host</div>
					        </a>
				      	</li>
				      	<li class="<?=($this->uri->segment(1) == 'viewer' ? 'active':'')?>">
					        <a href="<?=base_url()?>viewer">
					          	<div class="icon">
					            	<i class="fa fa-users" aria-hidden="true"></i>
					          	</div>
					          	<div class="title">Viewer</div>
					        </a>
				      	</li>
				      	<li class="<?=($this->uri->segment(1) == 'host_video' ? 'active':'')?>">
					        <a href="<?=base_url()?>host_video">
					          	<div class="icon">
					            	<i class="fa fa-video-camera" aria-hidden="true"></i>
					          	</div>
					          	<div class="title">Host Video</div>
					        </a>
				      	</li>
				    </ul>
			  	</div>
			  	<div class="sidebar-footer">
			    <ul class="menu">
			      <li>
			        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
			          <i class="fa fa-cogs" aria-hidden="true"></i>
			        </a>
			      </li>
			      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
			    </ul>
			  	</div>
			</aside>

			<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
			  <div class="dropdown-background">
			    <div class="bg"></div>
			  </div>
			  <div class="dropdown-container">
			    {{list}}
			  </div>
			</script>
			<div class="app-container">

			  <nav class="navbar navbar-default" id="navbar">
			  <div class="container-fluid">
			    <div class="navbar-collapse collapse in">
			      <ul class="nav navbar-nav navbar-mobile">
			        <li>
			          <button type="button" class="sidebar-toggle">
			            <i class="fa fa-bars"></i>
			          </button>
			        </li>
			        <li class="logo">
			          <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo.png" class="img-responsive" height="50px"></a>
			        </li>
			        <li>
			          <button type="button" class="navbar-toggle">
			            <img class="profile-img" src="<?=base_url()?>assets/images/profile.png">
			          </button>
			        </li>
			      </ul>
			      <ul class="nav navbar-nav navbar-left">
			        <li class="navbar-title"><?=$title?></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown profile">
			          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
			            <img class="profile-img" src="<?=base_url()?>assets/images/default_profile.jpg">
			            <div class="title">Profile</div>
			          </a>
			          <div class="dropdown-menu">
			            <div class="profile-info">
			              <h4 class="username"><?=$this->session->userdata(config_item('session_id'))->name?></h4>
			            </div>
			            <ul class="action">
			              <li>
			                <a href="<?=base_url()?>login/logout">
			                  Logout
			                </a>
			              </li>
			            </ul>
			          </div>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
				
				<?=$_content;?>
				
			  <!-- <footer class="app-footer"> 
			  <div class="row">
			    <div class="col-xs-12">
			      <div class="footer-copyright">
			        Copyright © 2016 Company Co,Ltd.
			      </div>
			    </div>
			  </div>
			</footer> -->
			</div>

	  </div>
	  
	  <script type="text/javascript" src="<?=base_url()?>assets/js/vendor.js"></script>
	  <script type="text/javascript" src="<?=base_url()?>assets/js/app.js"></script>

	</body>
</html>

