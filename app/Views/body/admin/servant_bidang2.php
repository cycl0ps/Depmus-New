<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Penatalayan <small><?php echo $pageTitle;?></small></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table id="tabelBidang" class="table table-striped table-hover tabelMember">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>ID Penatalayan</th>                                        
                                        <th>Alamat</th>
                                        <th>TTL</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($members as $list) { ?>
                                    <tr>
                                        <td><a href="<?php echo site_url('admin/member/detail/').$list['nis'];?>"><?php echo $list['nama'];?></a></td>
                                        <td><?php echo $list['nis'];?></td>
                                        <td><?php echo $list['alamat'];?></td>
                                        <td><?php echo $list['tempatLahir'];?> <?php echo $list['tglLahir'];?></td>
                                        <td><?php echo $list['hp'];?></td>
                                        <td><?php echo $list['email'];?></td>
                                        <td><?php echo $list['gender'];?></td>
                                        <td>
                                            <span class="label label-<?php if ($list['status'] == "Aktif") echo "success"; else if ($list['status'] == "Tdk Aktif") echo "warning"; else echo "danger"?>"><?php echo $list['status'];?></span>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Statistik <small><?php echo $bidang;?></small></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Jumlah Pelayanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="chart-total-service" class="graph"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
<script type="text/javascript">
    var graphs = [];
    graphs[0] = {type : 'bar', 
                    element : 'chart-total-service', 
                    data : <?php echo json_encode($chart['stat_servant']);?>, 
                    param : {'xkey': 'nama',
                        'ykeys': ['jumlah'],
                        'labels' : ['Jumlah Pelayanan'],
                        'barColors' : ['rgb(4, 216, 32)'],}
    };
</script>                  