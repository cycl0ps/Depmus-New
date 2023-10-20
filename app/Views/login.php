<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
	<meta name="robots" content="noindex, nofollow">

	<title>Login | Back-End Depmus GBI Menorah</title>
	
	<link href="<?php echo base_url("images/logo.png");?>" rel="icon" type="image/x-icon">

    <!-- Bootstrap 3 Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("assets/css/login.css");?>" rel="stylesheet" type="text/css">
	
	<style type="text/css">
		/* Override some defaults */
		.intro {
			background: url(<?php echo base_url("dokumen/images/loginpage.jpg");?>) no-repeat bottom center scroll;
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
				<div class="row ">
					<div class="col-md-6 intro-text">
						<div class="col-xs-12 col-md-12">
							<h1>BackEnd WebApps</h1>
							<h4>Departemen Musik Pujian GBI Menorah</h4>

						</div>
					</div>	
					<div class="col-md-6 form-login">
					
						<?php echo form_open();?>
						
							<?php if($this->session->flashdata('message_login')) {?>
							<div class="error-message"><?php echo $this->session->flashdata('message_login');?></div>
							<?php }?>
							<input type="hidden" name="redirect" value="<?php if (isset($_GET['redirect'])) echo $_GET['redirect']; else echo set_value('redirect');?>">
							<input type="text" name="identity" placeholder="Username" rel="txtTooltip1" title="Username" data-toggle="tooltip" data-placement="right" value="<?php echo set_value('identity');?>" required>
							<input type="password" name="password" placeholder="Password" rel="txtTooltip2" title="Password" data-toggle="tooltip" data-placement="right" required>
							<button name="submit" class="btn btn-lg btn-danger" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</header>

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
	$(document).ready(function(){
		$('input[rel="txtTooltip1"]').tooltip();
	    $('input[rel="txtTooltip2"]').tooltip();
	});
	</script>
</body>
</html>
<?php if (ENVIRONMENT != 'production')  $this->load->view('debug'); //display debug page ?>