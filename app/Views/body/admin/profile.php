<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <?php if($this->session->flashdata('message')) {?>  
                    <div class="alert alert-dismissable alert-<?php echo $this->session->flashdata('type');?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('message');?>
                    </div>
                    <?php }?>
                    
                    <?php echo form_open(site_url('admin/dashboard/profile'));?>
                        <input type="hidden" name="id" value="<?php echo $user['userId']; ?>">
                        <div class="form-group form-float">
                            <label class="form-label">Username</label>
                            <div class="form-line">
                                <input type="text" name="username" class="form-control" value="<?php echo $user['username'];?>" readonly>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Nama</label>
                            <div class="form-line">
                                <input type="text" name="nama" class="form-control" value="<?php echo $user['nama'];?>" required>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Grup</label>
                            <div class="form-line">
                                <input type="text" name="grup" class="form-control" value="<?php echo $user['grup'];?>" readonly>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Password</label>
                            <div class="form-line">
                                <input type="password" name="password" class="form-control">
                            </div>
                            <small>Biarkan kosong, jika tidak ingin mengganti password</small>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>              