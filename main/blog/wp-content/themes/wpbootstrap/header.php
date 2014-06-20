  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link href="http://www.benhalverson.me/assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

		<!-- main navigation -->
  		<nav class="navbar navbar-default navbar-fixed-top" id="main-nav" role="navigation">
  			<div class="container">
  				<!-- brand and toggle -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav-collapse">
  						<span class="sr-only">Toggle Navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  				</div>

  				<!-- navigation links -->
  				<div class="collapse navbar-collapse main-nav-collapse">
  					<ul class="nav navbar-nav">
  						<li><a href="../#about-me">ABOUT ME</a></li>
  						<li><a href="../#resume">RESUME</a></li>
  						<li><a href="../#projects">PROJECTS</a></li>
  						<li><a href="#">BLOG</a></li>
  						<li><a href="../#contacts">CONTACTS</a></li>
  					</ul>
  				</div>
  			</div>
  		</nav>




  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">


  	<div class="wrapper">

  		<!-- main navigation -->
  		<nav class="navbar navbar-default navbar-fixed-top" id="main-nav" role="navigation">
  			<div class="container">
  				<!-- brand and toggle -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav-collapse">
  						<span class="sr-only">Toggle Navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  				</div>

  				<!-- navigation links -->
  				<div class="collapse navbar-collapse main-nav-collapse">
  					<ul class="nav navbar-nav">
  						<li><a href="../#about-me">ABOUT ME</a></li>
  						<li><a href="../#resume">RESUME</a></li>
  						<li><a href="../#projects">PROJECTS</a></li>
  						<li><a href="#">BLOG</a></li>
  						<li><a href="../#contacts">CONTACTS</a></li>
  					</ul>
  				</div>
  			</div>
  		</nav>
