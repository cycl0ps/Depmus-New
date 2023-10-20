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
                <div class="col-md-12">                    
                    <?php echo form_open(site_url('admin/service/absen_pelayanan'));?>
                        <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label class="form-label">Pilih Pelayanan</label>
                                    <div class="form-line">
                                        <select class="form-control show-tick" data-live-search="true" name="ibadah">
                                            <?php foreach ($ibadah as $list) {;?>
                                            <option value="<?php echo $list['idIbadah'];?>"><?php echo "[".$list['tglIbadah']."]  ".$list['namaIbadah'];?></option>
                                            <?php }?> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">WL / MC</label>
                                    <?php foreach ($wl as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Singers</label>
                                    <?php foreach ($singer as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Rebana</label>
                                    <?php foreach ($rebana as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Pemusik</label>
                                    <?php foreach ($pemusik as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Multimedia</label>
                                    <?php foreach ($multimedia as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Dancer</label>
                                    <?php foreach ($dancer as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Banner</label>
                                    <?php foreach ($banner as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Soundman</label>
                                    <?php foreach ($soundman as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="form-group">
                                    <label class="form-label">Choir</label>
                                    <?php foreach ($choir as $list) {;?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="petugas[]" value="<?php echo $list['idMemBid'];?>"><?php echo $list['nama'];?>
                                            </label>
                                        </div>
                                    <?php }?> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label class="form-label">Catatan Evaluasi</label>
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control" name="evaluasi"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg" type="submit">SIMPAN</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div> 
             