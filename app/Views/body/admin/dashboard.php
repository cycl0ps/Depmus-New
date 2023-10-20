<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?> <small><?php echo $this->session->userdata['logged_in_depmus']['nama'];?></small></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-list-alt fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['penatalayan'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                            <div>Penatalayan</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Total Penatalayan Aktif</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-church fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['services'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                            <div>Pelayanan</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Total Pelayanan</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-music fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['song'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                            <div>Lagu</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">Total Lagu</span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">Data Penatalayan Bidang <small>Status Aktif</small></h3>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <a href="<?php echo site_url('admin/member/bidang/1');?>">
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-microphone fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['wl'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>WL / MC</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/2');?>">           
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-microphone fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['singer'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Singer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/3');?>">         
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-microphone fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['choir'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Choir</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/4');?>">      
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fas fa-guitar fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['pemusik'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Pemusik</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/5');?>">         
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-sign-language fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['rebana'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Rebana</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/6');?>">           
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-sign-language fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['banner'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Banner</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/7');?>">     
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-sign-language fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['dancer'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Dancer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/8');?>">                 
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fas fa-desktop fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['multimedia'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>Multimedia</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/member/bidang/9');?>">     
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-volume-up fa-5x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="number count-to huge" data-from="0" data-to="<?php echo $jumlah['soundman'];?>" data-speed="1000" data-fresh-interval="20"></div>
                                                <div>SoundMan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>           
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">Data Statistik <small>Departemen Musik Pujian</small></h3>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Jumlah Penatalayan per Bidang
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="chart-total-membid" class="graph"></div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Jumlah Pelayanan per Bulan
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div id="chart-jumlah-service" class="graph"></div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-birthday-cake fa-fw"></i> Ulang Tahun Bulan Ini
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php foreach($birthday as $list) { ?>
                                <a href="<?php echo site_url('admin/member/detail/').$list['nis'];?>" class="list-group-item">
                                    <?php echo $list['nama'];?>
                                    <span class="pull-right text-muted small"><em><?php echo $list['tglLahir'];?></em>
                                    </span>
                                </a>
                                <?php }?>
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-church fa-fw"></i> Pelayanan Bulan Ini
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php foreach($services as $list) { ?>
                                <a href="<?php echo site_url('admin/service/detail/').$list['idIbadah'];?>" class="list-group-item">
                                    <?php echo $list['namaIbadah'];?>
                                    <span class="pull-right small label label-<?php if ($list['statusIbadah'] == "Belum Terlaksana") echo "warning"; else echo "success";?>"><?php echo $list['tglIbadah'];?>
                                    </span>
                                </a>
                                <?php }?>
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
<script type="text/javascript">          
    var graphs = [];
    graphs[0] = {type : 'bar', 
                    element : 'chart-total-membid', 
                    data : <?php echo json_encode($chart['membid']);?>, 
                    param : {'xkey': 'bidang',
                        'ykeys': ['aktif','tdkaktif','skors'],
                        'labels' : ['Aktif','Tdk Aktif','Skors'],
                        'barColors' : ['rgb(4, 216, 32)','rgb(252, 152, 2)','rgb(252, 60, 0)'],}
    };
    graphs[1] = {type : 'bar', 
                    element : 'chart-jumlah-service', 
                    data : <?php echo json_encode($chart['service']);?>,
                    stacked: 'true',
                    param : {'xkey': 'bulan', 'ykeys': ['ibadahRaya', 'ibadahCabang', 'ibadahDoa', 'ibadahKategorial', 'ibadahLainnya', 'ibadahKhusus'],
                        'labels' : ['Ibadah Raya', 'Ibadah Cabang', 'Ibadah Doa', 'Ibadah Kategorial', 'Ibadah Lainnya', 'Ibadah Khusus'],
                        'xLabels' : 'month',
                        'barColors' : ['rgb(0, 188, 212)', 'rgb(0, 150, 212)', 'rgb(4, 216, 32)', 'rgb(255, 152, 0)', 'rgb(255, 190, 100)', 'rgb(255, 30, 0)'],}
    };
  
</script>                     