<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
            </div>
            <form action="<?php echo current_url();?>" method="post">
                    <div class="form-group form-float">
                        <label class="form-label">Rekap</label>
                        <div class="form-line">
                            <label class="radio-inline">
                                <input type="radio" name="rekap" value="penatalayan" <?php if (isset($rekap_penatalayan)) echo "checked";?>>Penatalayan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="rekap" value="pelayanan" <?php if (isset($rekap_pelayanan)) echo "checked";?>>Pelayanan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="rekap" value="jumlah" <?php if (isset($rekap_jumlah)) echo "checked";?>>Jumlah
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">Periode</label>
                        <div class="form-line">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fas fa-calendar-alt"></i> Awal</div>
                                <input name="tglAwal" type="text" class="form-control datepicker" placeholder="yyyy-mm-dd" value="<?php echo set_value('tglAwal');?>" required>
                                <div class="input-group-addon"><i class="fas fa-calendar-alt"></i> Akhir</div>
                                <input name="tglAkhir" type="text" class="form-control datepicker" placeholder="yyyy-mm-dd" value="<?php echo set_value('tglAkhir');?>" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>                
            </form>
            <hr>
            <?php if (isset($rekap_penatalayan)) {?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-bordered tabelRekapitulasi js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Bidang</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($rekap_penatalayan as $list) { ?>
                                    <tr>
                                        <td><?php echo $i;?></a></td>
                                        <td><?php echo $list['nama'];?></a></td>
                                        <td><?php echo $list['namaBidang'];?></td>
                                        <td><?php echo $list['kategoriIbadah'];?></td>
                                        <td><?php echo $list['tglIbadah'];?></td>
                                        <td><?php echo $list['namaIbadah'];?></td>
                                    </tr>
                                    <?php $i++;}?>
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
            <?php }?>
            <?php if (isset($rekap_pelayanan)) {?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-bordered tabelRekapitulasi js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ibadah</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($rekap_pelayanan as $list) { ?>
                                    <tr>
                                        <td><?php echo $i;?></a></td>
                                        <td><?php echo $list['namaIbadah'];?></td>
                                        <td><?php echo $list['tglIbadah'];?></td>
                                        <td><?php echo $list['kategoriIbadah'];?></td>
                                        <td><?php echo $list['statusIbadah'];?></td>
                                        <td><?php echo $list['noteIbadah'];?></td>
                                    </tr>
                                    <?php $i++;}?>
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
            <?php }?>
            <?php if (isset($rekap_jumlah)) {?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-bordered tabelRekapitulasi js-exportable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Bidang</th>
                                        <th>IR1</th>
                                        <th>IR2</th>
                                        <th>IR3</th>
                                        <th>Cabang</th>
                                        <th>YC</th>
                                        <th>DoaMalam</th>
                                        <th>DoaPuasa</th>
                                        <th>DoaPengerja</th>
                                        <th>Ibadah Lain</th>
                                        <th>Ibadah Khusus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;?>
                                    <?php foreach($rekap_jumlah as $list) { ?>
                                    <tr>
                                        <td><?php echo $i;?></a></td>
                                        <td><?php echo $list['nama'];?></td>
                                        <td><?php echo $list['namaBidang'];?></td>
                                        <td><?php echo $list['IR1'];?></td>
                                        <td><?php echo $list['IR2'];?></td>
                                        <td><?php echo $list['IR3'];?></td>
                                        <td><?php echo $list['Cabang'];?></td>
                                        <td><?php echo $list['YC'];?></td>
                                        <td><?php echo $list['DoaMalam'];?></td>
                                        <td><?php echo $list['DoaPuasa'];?></td>
                                        <td><?php echo $list['DoPeng'];?></td>
                                        <td><?php echo $list['IbadahLain'];?></td>
                                        <td><?php echo $list['IbadahKhusus'];?></td>
                                    </tr>
                                    <?php $i++;}?>
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
            <?php }?>