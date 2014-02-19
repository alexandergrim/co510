<!DOCTYPE html>
<html>

<head>
	<title>Template</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="sideMenu-body">

	<nav class="sideMenu" id="sideMenuId">

		<img src="<?php echo base_url();?>/img/avatar.jpg">

		<h2>Robb Stark</h2>
		<h3>Director</h3>

		<ul id="sideNav">
			<li class="sideNavItem"><a href=""></i><i class="icon-plus icon-white"></i>Add Record</a></li>
			<li class="sideNavItem navSelected"><a href=""><i class="icon-search icon-white"></i>Find Record</a></li>
			<li class="sideNavItem"><a href=""><i class="icon-edit icon-white"></i>Modify Record</a></li>
			<li class="sideNavItem"><a href=""><i class="icon-off icon-white"></i>Logout</a></li>
		</ul>

	</nav>
		
	<nav id="topBar">
		<button id="showSideMenu"></button>
	</nav>
	
	<script src="<?php echo base_url();?>js/classie.js"></script>
	<script type="text/javascript">
	
		var menuLeft = document.getElementById( 'sideMenuId' ),
				showSideMenu = document.getElementById( 'showSideMenu' ),
				body = document.body;
	
		showSideMenu.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'sideMenu-body-toright' );
			classie.toggle( menuLeft, 'sideMenu-open' );
		};
		
	</script>

</body>

</html>