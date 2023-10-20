<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

            <div class="pt-3">
                <h1 class="text-center"><?php echo $pageTitle;?></h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabelData" class="table table-bordered table-condensed table-striped table-hover dataTable tabelLagu">
                                    <thead>
                                        <tr>
                                        	<th>JUDUL</th>
                                        	<th>KEY</th>
                                            <th>P/W</th>
                                            <th>TEMA</th>
                                            <th>LIRIK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($songlist as $list) { ?>
                                        <tr class="clickable-row" data-url="<?php echo site_url('lagu/'.$list['slug']);?>">
                                        	<td><?php echo $list['judul'];?></td>
                                        	<td><?php echo $list['kunci'];?></td>
                                            <td><span class="badge badge-<?php if ($list['kategori'] == "Praise") echo "warning"; else echo "primary";?>"><?php echo $list['kategori'];?></td>
                                            <td><?php echo $list['tema'];?></td>
                                            <td><?php echo $list['lirik'];?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>

                                </table>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>

<script type="text/javascript">          
    var baseUrl = '<?php echo base_url();?>';
</script>