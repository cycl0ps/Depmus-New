<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2">
                    <div class="alert alert-info" role="alert">
                        <h4>Detail Pelayanan</h4>
                        <p>
                            <strong>Nama Pelayanan</strong><br/>
                            <?php echo $namaIbadah;?>
                        </p>
                        <p>
                            <strong>Kategori</strong><br/>
                            <?php echo $kategoriIbadah;?>
                        </p>
                        <p>
                            <strong>Tanggal</strong><br/>
                            <?php echo $tglIbadah;?>
                        </p>
                        <p>
                            <strong>Keterangan</strong><br/>
                            <span class="label label-<?php if ($statusIbadah == "Belum Terlaksana") echo "warning"; else echo "success";?>"><?php echo $statusIbadah;?></span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                        <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Petugas Ibadah</h4></div>
                        <div class="panel-body">
                            <dl class="row">
                                <div class="col-lg-6">
                                    <strong>WL / MC</strong>
                                    <ol><?php foreach ($wl as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Singer</strong>
                                    <ol><?php foreach ($singer as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Choir</strong>
                                    <ol><?php foreach ($choir as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Pemusik</strong>
                                    <ol><?php foreach ($musik as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Rebana</strong>
                                    <ol><?php foreach ($rebana as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                </div>
                                <div class="col-lg-6">
                                    <strong>Banner</strong>
                                    <ol><?php foreach ($banner as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Dancer</strong>
                                    <ol><?php foreach ($dancer as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>Multimedia</strong>
                                    <ol><?php foreach ($multimedia as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>
                                    <strong>SoundMan</strong>
                                    <ol><?php foreach ($soundman as $p) echo "<li><a href='".site_url('admin/member/detail/').$p[1]."'>".$p[0]."</a></li>";?></ol>                               
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h4>Catatan Evaluasi</h4></div>
                        <div class="panel-body"><?php echo $noteIbadah;?></div>
                    </div>
                </div>
            </div>