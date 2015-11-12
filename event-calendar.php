<!DOCTYPE html>
<html lang="en"><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>St. Thomas More - Events Calendar</title>
		<link rel="shortcut icon" type="image/x-icon" href="logo.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
        

<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->
<link href="assets/js/plugins/mediaelement/mediaelementplayer.css" rel="stylesheet" type="text/css">
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
<link href="assets/js/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href='assets/js/plugins/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='assets/js/plugins/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->

			<!-- site content -->
			<div id="main">
				<!--Breadcrumb Section Start Here-->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Calendar</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										The chaplaincy
									</li>
                                    <li class="active">
										<a href="event-calendar.php">Event Calendar</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->
				<!-- cause page Start Here-->
				<div class="content-wrapper cause-page-section" id="page-info">
					<div class="container">
						<section class="our-story row anim-section">
							<div class="col-xs-12">
								<header class="page-header section-header top-spacer">
									<h2>Events <strong>Calendar</strong></h2>
								</header>
							</div>
						</section>

						<!-- Our Causes Section-->
						<section class="our-causes">
							 <!-- Start Content -->
                              <div class="main" role="main">
                                <div id="content" class="content full">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div id='calendar'></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
						</section>
						<!-- Our Causes Section End-->

						

					</div>

				</div>
				<!-- cause page Start End-->
			</div>
			<!-- site content ends -->
			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		

		
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Js--> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider Js End -->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
        <script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="assets/js/plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="assets/js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="assets/js/bootstrap.js"></script> <!-- UI --> 
<script src="assets/js/waypoints.js"></script> <!-- Waypoints --> 
<script src="assets/js/plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="assets/js/init.js"></script> <!-- All Scripts --> 
<script src="assets/js/plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="assets/js/plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src='assets/js/plugins/fullcalendar/jquery-ui.custom.min.js'></script> 
<script src='assets/js/plugins/fullcalendar/fullcalendar.min.js'></script> 
<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			editable: true,
			events: [
				{
					title: '<?php echo 'All Day Event'?>',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script> 
	</body>
</html>