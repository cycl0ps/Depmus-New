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
                            <div class="btn-toolbar">
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalFormIbadah" data-form="formTambah">Tambah Pelayanan</button>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped table-hover tabelIbadah">
                                <thead>
                                    <tr>
                                        <th>Nama Pelayanan</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Edit/Delete</th>
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
                                        <td style='white-space: nowrap'>
                                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalFormIbadah" data-form="formEdit" data-id="<?php echo $list['idIbadah'];?>">Edit</button>
                                            <button class="btn btn-xs btn-danger buttonHapus" data-id="<?php echo $list['idIbadah'];?>">Delete</button>
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
            <!-- Modals utk menampilkan form ibadah -->
            <div class="modal fade" id="modalFormIbadah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open(site_url('admin/service/tambah'));?>
                                <input type="hidden" name="id">
                                <div class="form-group form-float">
                                    <label class="form-label">Nama Ibadah</label>
                                    <div class="form-line">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>                  
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Kategori</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" data-live-search="true" name="kategori">
                                                    <option value="Ibadah Raya" selected>Ibadah Raya</option>
                                                    <option value="Ibadah Cabang">Ibadah Cabang</option>
                                                    <option value="Ibadah Doa">Ibadah Doa</option>
                                                    <option value="Ibadah Kategorial">Ibadah Kategorial</option>
                                                    <option value="Ibadah Lainnya">Ibadah Lainnya</option>
                                                    <option value="Ibadah Khusus">Ibadah Khusus</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tanggal Ibadah</label>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input name="tglIbadah" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
                                            </div>
                                        </div>                                                                            
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
            <!-- #END# Modals utk menampilkan form ibadah -->