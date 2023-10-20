<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

                        <li>
                            <a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/dashboard/profile');?>"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt fa-fw"></i> Penatalayan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('admin/member');?>">Semua Bidang</a>
                                </li> 
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/1');?>">WL / MC</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/2');?>">Singer</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/3');?>">Choir</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/4');?>">Pemusik</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/5');?>">Rebana</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/6');?>">Banner</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/7');?>">Dancer</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/8');?>">Multimedia</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/member/bidang/9');?>">SoundMan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                                <li>
                                    <a href="<?php echo site_url('admin/service/rekapitulasi');?>">Rekapitulasi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/song');?>"><i class="fa fa-music fa-fw"></i> Database Lagu</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/user');?>"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('login/logout');?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>