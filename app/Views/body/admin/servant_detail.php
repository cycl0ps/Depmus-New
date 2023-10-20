<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="alert alert-info" role="alert">
                        <h4>Detail Penatalayan</h4>
                        <img src="<?php echo $member['foto'];?>" alt="<?php echo $member['nama'];?>" class="img-circle img-responsive">
                        <p>
                            <strong>Nama</strong><br/>
                            <?php echo $member['nama'];?>
                        </p>
                        <p>
                            <strong>ID Penatalayan DEPMUS</strong><br/>
                            <?php echo $member['nis'];?>
                        </p>
                        <p>
                            <strong>No. KKJ</strong><br/>
                            <?php echo $member['kkj'];?>
                        </p>
                        <p>
                            <strong>Alamat</strong><br/>
                            <?php echo $member['alamat'];?>
                        </p>
                        <p>
                            <strong>Tempat Tanggal Lahir</strong><br/>
                            <?php echo $member['tempatLahir'];?> - <?php echo $member['tglLahir'];?>
                        </p>
                        <p>
                            <strong>Jenis Kelamin</strong><br/>
                            <?php echo $member['gender'];?>
                        </p>
                        <p>
                            <strong>Status Menikah</strong><br/>
                            <?php echo $member['menikah'];?>
                        </p>
                        <p>
                            <strong>HP</strong><br/>
                            <?php echo $member['hp'];?>
                        </p>
                        <p>
                            <strong>Email</strong><br/>
                            <?php echo $member['email'];?>
                        </p>
                        <p>
                            <strong>Status</strong> 
                            <span class="label label-<?php if ($member['status'] == "Aktif") echo "success"; else if ($member['status'] == "Tdk Aktif") echo "warning"; else echo "danger"?>"><?php echo $member['status'];?></span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Data Pelayanan</h4></div>
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped js-exportable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Sebagai</th>
                                        <th>Pelayanan</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($pelayanan as $list) { ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $list['tglIbadah'];?></td>
                                        <td><?php echo $list['namaBidang'];?></td>
                                        <td><a href="<?php echo site_url('admin/service/detail/').$list['idIbadah'];?>"><?php echo $list['namaIbadah'];?></a></td>
                                        <td><?php echo $list['kategoriIbadah'];?></td>
                                    </tr>
                                    <?php $i++;}?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            <!-- /.row -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Statistik <small><?php echo $pageTitle;?></small></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Jumlah Pelayanan per Bulan - 10 bulan terakhir
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
<?php if ($chart['stat_servant']) {?>
    graphs[0] = {type : 'bar', 
                    element : 'chart-total-service', 
                    data : <?php echo json_encode($chart['stat_servant']);?>, 
                    param : {'xkey': 'bulan',
                        'ykeys': ['jumlah'],
                        'labels' : ['Total'],
                        'barColors' : ['rgb(4, 216, 32)'],
                        'grid' : false,
                    }
    };
<?php }?>
</script>                   