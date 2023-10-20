<!-- 
Develop by: 
Bidang Multimedia Depmus GBI Menorah
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Departemen Musik Pujian GBI Menorah">
    <meta name="author" content="Multimedia Depmus">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="departemen, musik, pujian, GBI, menorah, depmus, rohani">

	<title>Departemen Musik Pujian GBI Menorah</title>
	
	<link href="<?php echo base_url("images/logo.png");?>" rel="icon" type="image/x-icon">

    <!-- Bootstrap 3 Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="<?php echo base_url("assets/css/intro.css");?>" rel="stylesheet" type="text/css">
	
	<style type="text/css">
		/* Override some defaults */
		.intro {
			background: url(<?php echo base_url("dokumen/images/frontpage.jpg");?>) no-repeat bottom center scroll;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
			-o-background-size: cover;
		}
	  
    </style>	
</head>

<body>

	<header class="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="intro-text">
						<div class="col-xs-12 col-md-12">
							<h1>Departemen Musik Pujian</h1>
							<h4>Gereja Bethel Indonesia Menorah</h4>
						</div>
					</div>	
				</div>
				<div class="row">
					<a class="btn btn-success" href="<?php echo site_url('lagu');?>" role="button"><i class="fas fa-music"></i> Lagu</a>
					<a class="btn btn-danger" href="<?php echo site_url('login');?>" role="button"><i class="fas fa-sign-in-alt"></i> WebApps</a>
					<a class="btn btn-warning" href="<?php echo base_url('dokumen');?>" role="button"><i class="fas fa-file-invoice"></i> Dokumen</a>
					<a class="btn btn-primary" href="https://gbimenorah.org/about-depmus/" target="_blank" role="button"><i class="fas fa-church"></i> About</a>
					<a class="btn btn-info" href="http://webmail.gbimenorah.org/" target="_blank" role="button"><i class="fas fa-envelope"></i> Webmail</a>
	            </div>
	            <!-- /.row -->

			</div>
		</div>
		
	</header>

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>