<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Penatalayan <small><?php echo $pageTitle;?></small></h1>
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
                                <button type="button" class="btn btn-primary btn-lg waves-effect" data-toggle="modal" data-target="#modalFormMemberBidang" data-form="formTambah">Tambah <?php echo $bidang;?></button>
                            </div>
                        </div>
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
                                        <th>Delete</th>
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
                                        <td style='white-space: nowrap'>
                                            <button class="btn btn-xs btn-danger buttonHapus" data-id="<?php echo $list['idMemBid'];?>">Delete</button>
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
            <!-- Modals utk menampilkan form Anggota -->
            <div class="modal fade" id="modalFormMemberBidang" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Anggota <?php echo $bidang;?></h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open(site_url('admin/member/tambah_bidang'));?>
                                <input type="hidden" name="idBidang" value="<?php echo $bidangId;?>">
                                <div class="form-group form-float">
                                    <label class="form-label">ID Penatalayan</label>
                                    <div class="entry input-group">
                                        <span class="input-group-addon">
                                            <div id="loader" class="loader"></div>
                                        </span>                     
                                        <input class="form-line form-control" name="idMember" id= "idMember"/>
                                        <span class="input-group-addon">
                                            <div id="respon" class="respon"></div>
                                        </span>
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
            <!-- #END# Modals utk menampilkan form Anggota -->  
<script type="text/javascript">
    var urlApi = "<?php echo site_url('admin/member/detail/');?>";
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