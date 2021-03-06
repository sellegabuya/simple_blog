
<?php if (!isset($is_admin)){$is_admin = false;}?><!DOCTYPE html>
<html>
	<head>
		<title>Simple Me | <?php echo $title;?></title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="<?php echo site_url('media/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('media/css/ionicons.min.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('media/css/pace.css');?>">
	    <link rel="stylesheet" href="<?php echo site_url('media/css/custom.css');?>">

	    <!-- js -->
	    <script src="<?php echo site_url('media/js/jquery-2.1.3.min.js');?>"></script>
	    <script src="<?php echo site_url('media/js/bootstrap.min.js');?>"></script>
	    <script src="<?php echo site_url('media/js/pace.min.js');?>"></script>
	    <script src="<?php echo site_url('media/js/modernizr.custom.js');?>"></script>
	</head>

	<body>
		<div class="container">	
			<header id="site-header">
				<div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<div class="logo">
							<h1><?php echo anchor('home','Simple Me','');?></h1>
						</div>
					</div><!-- col-md-4 -->
					<div class="col-md-8 col-sm-7 col-xs-4">
						<nav class="main-nav" role="navigation">
							<div class="navbar-header">
  								<button type="button" id="trigger-overlay" class="navbar-toggle">
    								<span class="ion-navicon"></span>
  								</button>
							</div>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  								<ul class="nav navbar-nav navbar-right">
  								<?php if($is_admin == true){?>
  								<li class="cl-effect-11 dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="Admin" aria-expanded="false">Admin <b class="caret"></b></a>
									<ul class="dropdown-menu admin-menu">
										<li><a href="#"><span class="ion-plus-circled"></span> Add Category</a></li>
										<li><a href="#"><span class="ion-plus-circled"></span> Create Post</a></li>
										<li><a href="#"><span class="ion-plus-circled"></span> Trash</a></li>
										<li><a href="#"><span class="ion-plus-circled"></span> Settings</a></li>
										<li><a href="#"><span class="ion-plus-circled"></span> Logout</a></li>
									</ul>
								</li>
  								<?php }else{?>
    								<li class="cl-effect-11"><?php echo anchor('home','Home','data-hover="Home"');?></li>
    								<li class="cl-effect-11"><?php echo anchor('blogs','Blog','data-hover="Blog"');?></li>
    								<li class="cl-effect-11"><?php echo anchor('about','About','data-hover="About"');?></li>
    								<li class="cl-effect-11"><?php echo anchor('contact','Contact','data-hover="Contact"');?></li>
    								<?php }?>
  								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
						<div id="header-search-box">
							<a id="search-menu" href="#"><span id="search-icon" class="ion-ios-search-strong"></span></a>
							<div id="search-form" class="search-form">
								<form role="search" method="get" id="searchform" action="#">
									<input type="search" placeholder="Search" required>
									<button type="submit"><span class="ion-ios-search-strong"></span></button>
								</form>				
							</div>
						</div>
					</div><!-- col-md-8 -->
				</div>
			</header>
		</div>