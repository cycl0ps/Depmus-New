<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php if($this->session->flashdata('message')) {?>  
            <div class="alert alert-dismissable alert-<?php echo $this->session->flashdata('type');?>">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('message');?>
            </div>
            <?php }?>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="button-demo">
                                <button type="button" class="btn btn-primary btn-lg waves-effect" data-toggle="modal" data-target="#modalFormLagu" data-form="formTambah">Tambah</button>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped table-hover dataTable tabelLagu">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Judul</th>
                                        <th>Key</th>
                                        <th>Tempo</th>
                                        <th>P/W</th>
                                        <th>Tema</th>
                                        <th>Artist</th>
                                        <th>Input by</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($songlist as $list) { ?>
                                    <tr>
                                        <td>
                                            <?php if ($list['youtube'] != "") {?>
                                            <a class="btn btn-success btn-xs" href="https://www.youtube.com/watch?v=<?php echo $list['youtube'];?>" target="_blank" role="button" title="YouTube Video"><i class="fas fa-play"></i></a>
                                        <?php }?>
                                        </td>
                                        <td><?php echo $list['judul'];?></td>
                                        <td><?php echo $list['kunci'];?></td>
                                        <td><?php echo $list['tempo'];?></td>
                                        <td><span class="label label-<?php if ($list['kategori'] == "Praise") echo "warning"; else echo "info";?>"><?php echo $list['kategori'];?></td>
                                        <td><?php echo $list['tema'];?></td>
                                        <td><?php echo $list['artist'];?></td>
                                        <td><?php echo $list['user'];?></td>
                                        <td style='white-space: nowrap'>
                                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalFormLagu" data-form="formEdit" data-id="<?php echo $list['id'];?>">Edit</button>
                                            <button class="btn btn-xs btn-danger buttonHapus" data-id="<?php echo $list['id'];?>">Delete</button>
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
                    <h3 class="page-header">Statistik <small>Database Lagu</small></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Lagu by Kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="chart-total-kategori" class="graph"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Lagu by Key
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="chart-total-key" class="graph"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>             
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Lagu by User Input
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="chart-total-user" class="graph"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>           
            <!-- Modals utk menampilkan form lagu -->
            <div class="modal fade" id="modalFormLagu" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Lagu</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open(site_url('admin/song/tambah'));?>
                                <input type="hidden" name="id">
                                <div class="form-group form-float">
                                    <label class="form-label">Judul</label>
                                    <div class="form-line">
                                        <input type="text" name="judul" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-label">Key</label>
                                            <div class="form-line">
                                                <input type="text" name="kunci" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Tempo</label>
                                            <div class="form-line">
                                                <input type="number" name="tempo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label">Kategori</label>
                                            <div class="form-line">
                                                <label class="radio-inline">
                                                    <input type="radio" name="kategori" value="Praise" checked>Praise
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="kategori" value="Worship">Worship
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Tema</label>
                                            <div class="form-line">
                                                <input type="text" name="tema" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Artist</label>
                                            <div class="form-line">
                                                <input type="text" name="artist" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Youtube Link</label>
                                    <p class="small">input hanya kode video</p>
                                    <div class="form-line">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fab fa-youtube"></i> https://www.youtube.com/watch?v=</div>
                                            <input type="text" name="youtube" placeholder="r3cd3NmjSOI" class="form-control">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="form-label">Lirik</label>
                                    <div class="form-line">
                                        <textarea rows="8" class="form-control" name="lirik"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modals utk menampilkan form lagu -->                 
<script type="text/javascript">
    var graphs = [];
    graphs[0] = {type : 'bar', 
                    element : 'chart-total-user', 
                    data : <?php echo json_encode($chart['stat_user']);?>, 
                    param : {'xkey': 'user',
                        'ykeys': ['jumlah'],
                        'labels' : ['Total'],
                        'barColors' : ['rgb(217, 83, 79)'],
                    }
    };
    graphs[1] = {type : 'donut', 
                    element : 'chart-total-kategori', 
                    data : <?php echo json_encode($chart['stat_kategori']);?>, 
                    param : {'colors' : ['rgb(252, 152, 2)', 'rgb(0, 188, 212)'],}
    };
    graphs[2] = {type : 'bar', 
                    element : 'chart-total-key', 
                    data : <?php echo json_encode($chart['stat_key']);?>, 
                    param : {'xkey': 'kunci',
                        'ykeys':  ['praise', 'worship'],
                        'labels' : ['Praise', 'Worship'],
                        'barColors' : ['rgb(252, 152, 2)', 'rgb(0, 188, 212)'],
                    }
    };
</script>  