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
    <meta name="description" content="Departemen Musik Pujian GBI Menorah">
    <meta name="author" content="Multimedia Depmus">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="departemen, musik, pujian, GBI, menorah, depmus, rohani">

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
.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .subtitle {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("<?php echo base_url('dokumen/images/banner.jpg');?>");
    background-size: cover;
    height: 250px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 200px;

    max-width: 200px;

    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

    </style>

</head>

<body>

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

    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">

                    <div class="card hovercard">
                        <div class="cardheader">

                        </div>
                        <div class="avatar">
                            <img alt="" src="<?php echo $member['foto'];?>">
                        </div>
                        <div class="info">
                            <div class="title">
                                <?php echo $member['nama'];?>
                            </div>
                            <div class="title">
                                <?php foreach($bidang as $b) {
                                    echo "<span class='badge badge-info'>".$b['namaBidang']."</span>";
                                    echo "&nbsp;";
                                }
                                ?>
                            </div>
                            <div class="desc"><i class="fas fa-envelope"></i> <?php echo $member['email'];?></div>
                            <div class="desc"><i class="fas fa-phone"></i> <?php echo $member['hp'];?></div>
                            <div class="desc2"><span class="badge badge-<?php if ($member['status'] == "Aktif") echo "success"; else if ($member['status'] == "Tdk Aktif") echo "warning"; else echo "danger"?>"><?php echo $member['status'];?></span></div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center"><h4>Data Pelayanan</h4></div>
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped tabelMember">
                                <thead>
                                    <tr>
                                        <th>Tgl</th>
                                        <th>Bidang</th>
                                        <th>Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pelayanan as $list) { ?>
                                    <tr>
                                        <td><?php echo $list['tglIbadah'];?></td>
                                        <td><?php echo $list['namaBidang'];?></td>
                                        <td><?php echo $list['namaIbadah'];?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
    <script>
 
        $(function () {

            $('.tabelMember').DataTable({
                responsive: true,
                "pageLength": 25,
                "order": []

            });

        });

    </script>

</body>
</html>