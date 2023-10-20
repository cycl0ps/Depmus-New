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
                                <button type="button" class="btn btn-primary btn-lg waves-effect" data-toggle="modal" data-target="#modalFormMember" data-form="formTambah">Tambah Penatalayan</button>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="tabelData" class="table table-striped table-hover tabelMember">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>ID Penatalayan</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($members as $list) { ?>
                                    <tr>
                                        <td><a href="<?php echo site_url('admin/member/detail/').$list['nis'];?>"><?php echo $list['nama'];?></a></td>
                                        <td><?php echo $list['nis'];?></td>
                                        <td><?php echo $list['hp'];?></td>
                                        <td><?php echo $list['email'];?></td>
                                        <td><?php echo $list['gender'];?></td>
                                        <td>
                                            <span class="label label-<?php if ($list['status'] == "Aktif") echo "success"; else if ($list['status'] == "Tdk Aktif") echo "warning"; else echo "danger"?>"><?php echo $list['status'];?></span>
                                        </td>
                                        <td style='white-space: nowrap'>
                                            <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalFormMember" data-form="formEdit" data-id="<?php echo $list['nis'];?>">Edit</button>
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
            <!-- Modals utk menampilkan form member -->
            <div class="modal fade" id="modalFormMember" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart(site_url('admin/member/tambah'));?>
                                <input type="hidden" name="id">
                                <div class="form-group form-float">
                                    <label class="form-label">Nama</label>
                                    <div class="form-line">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Tempat Lahir</label>
                                            <div class="form-line">
                                                <input type="text" name="tempatLahir" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <div class="form-group input-group">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input name="tglLahir" type="text" class="form-control" placeholder="yyyy-mm-dd" required>
											</div>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <div class="form-line">
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="Laki-laki" checked="true">Laki-laki
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="Perempuan">Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Status Pernikahan</label>
                                            <div class="form-line">
                                                <label class="radio-inline">
                                                    <input type="radio" name="menikah" value="Belum Menikah" checked="true">Belum Menikah
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="menikah" value="Sudah Menikah">Sudah Menikah
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">No Hp</label>
                                            <div class="form-line">
                                                <input type="number" name="hp" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email</label>
                                            <div class="form-line">
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">No. KKJ</label>
                                            <div class="form-line">
                                                <input type="text" name="kkj" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Status</label>
                                            <div class="form-line">
                                                <select class="form-control show-tick" data-live-search="true" name="status">
                                                    <option value="Aktif" selected>Aktif</option>
                                                    <option value="Tdk Aktif">Tdk Aktif</option>
                                                    <option value="Skors">Skors</option>
                                                    <option value="X-Deleted">X-Deleted</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <label class="form-label">Foto Profil</label>
                                    <div class="fotoprofil"></div>
                                    <div class="form-line">
                                        <input name="foto" type="file" class="form-control">
                                    </div>
                                    <small><span class="foto-empty"></span></small>
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
            <!-- #END# Modals utk menampilkan form member -->  