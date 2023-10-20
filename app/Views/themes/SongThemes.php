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
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta name="description" content="<?php echo $pageTitle;?> - Database Lagu Depmus GBI Menorah">
    <meta name="author" content="Multimedia Depmus">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="<?php echo $keywords;?>lagu rohani, lirik, tema lagu, database lagu, departemen musik pujian, depmus, GBI Menorah">

    <title><?php echo $pageTitle;?> | Depmus GBI Menorah</title>

    <link href="<?php echo base_url("images/logo.png");?>" rel="icon" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" type="text/css">
    <link id="theme" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>
        body {font-family: 'Roboto', sans-serif;}

        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(<?php echo base_url("dokumen/images/loader.gif");?>) center no-repeat #fff;
        }
    </style>

</head>

<body>
    <div class="se-pre-con"></div>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fas fa-menorah"></i> Depmus GBI Menorah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('lagu');?>"><i class="fas fa-music"></i> Daftar Lagu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('login');?>"><i class="fas fa-sign-in-alt"></i> WebApps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://gbimenorah.org/about-depmus/"><i class="fas fa-church"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://webmail.gbimenorah.org/"><i class="fas fa-envelope"></i> Webmail</a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <?php if($body_page) $this->load->view($body_page);?>
        <footer>
            <div class="row mt-4">
                <div class="col-md-12">
                    <p class="text-center small">Departemen Musik Pujian &copy;<?php echo date('Y');?> Gereja Bethel Indonesia Menorah Manado</p>
                </div>
            </div>
        </footer>
    </main>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url("assets/js/song.js");?>"></script>

</body>
</html>

