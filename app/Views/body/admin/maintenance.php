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
                    <form method="post">
                        <div class="form-group form-float">
                            <label class="form-label">Question</label>
                            <div class="form-line">
                                <textarea rows="10" class="form-control" name="query"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit" formaction="execute">SELECT</button>
                        <button class="btn btn-primary" type="submit" formaction="execute2">EXECUTE</button>
                    </form>
                </div>
            </div>              