<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped table-hover tabelIbadah">
                                <thead>
                                    <tr>
                                        <th>Nama Pelayanan</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($services as $list) { ?>
                                    <tr>
                                        <td><a href="<?php echo site_url('admin/service/detail/').$list['idIbadah'];?>"><?php echo $list['namaIbadah'];?></a></td>
                                        <td><?php echo $list['kategoriIbadah'];?></td>
                                        <td><?php echo $list['tglIbadah'];?></td>
                                        <td>
                                            <span class="label label-<?php if ($list['statusIbadah'] == "Belum Terlaksana") echo "warning"; else echo "success";?>"><?php echo $list['statusIbadah'];?></span>
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