<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

                        <li>
                            <a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/dashboard/profile');?>"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-church fa-fw"></i> Pelayanan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/service');?>">Data Pelayanan</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/service/absen_pelayanan');?>">Absen Pelayanan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/song');?>"><i class="fa fa-music fa-fw"></i> Database Lagu</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout');?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>