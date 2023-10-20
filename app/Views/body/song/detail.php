<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
			<div class="pt-3">
                <h3 class="text-center"><?php echo $song['judul'];?></h3>
            </div>
            <div class="col-lg-8">
                <dl class="row">
                    <dt class="col-sm-3">Kategori</dt>
                    <dd class="col-sm-9"><span class="badge badge-<?php if ($song['kategori'] == "Praise") echo "warning"; else echo "primary";?>"><?php echo $song['kategori'];?></dd>
                    <dt class="col-sm-3">Kunci</dt>
                    <dd class="col-sm-9"><?php echo $song['kunci'];?></dd>
                    <dt class="col-sm-3">Tempo</dt>
                    <dd class="col-sm-9"><?php echo $song['tempo'];?></dd>
                    <dt class="col-sm-3">Tema</dt>
                    <dd class="col-sm-9"><?php echo $song['tema'];?></dd>
                    <dt class="col-sm-3">Artist</dt>
                    <dd class="col-sm-9"><?php echo $song['artist'];?></dd>
                    <?php if ($song['youtube'] != "") {?>
                    <dt class="col-sm-3">Youtube Link</dt>
                    <dd class="col-sm-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $song['youtube'];?>"></iframe>
                        </div>
                    </dd>
                    <?php }?>
                    <dt class="col-sm-3">Lirik</dt>
                    <dd class="col-sm-9 lead"><div class="alert alert-secondary" role="alert"><pre><?php echo $song['lirik'];?></pre></div></dd>
                </dl>
            </div>
            <div class="col-lg-3 mx-auto">
                <a class="btn btn-success btn-block btn-lg" href="javascript:history.back()" role="button">Back</a>
            </div>
<script type="text/javascript">          
    var baseUrl = '<?php echo base_url();?>';
</script>