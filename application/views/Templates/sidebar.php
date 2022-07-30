<div class="menu">
<?php if($this->session->userdata('akses')=='1'):?>
                <ul class="list">
                    <li class="header">Hi, Admin</li>
                        <a href="<?php echo base_url().'admin/home'?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                        </li>
                    <li>
                        <a href="<?= base_url().'admin/Obat'?>">
                            <i class="material-icons">local_pharmacy</i> 
                            <span>Obat</span>
                        </a>
                        </li>
                    <li>
                    <li>
                        <a href="<?= base_url().'admin/Pasien'?>">
                            <i class="material-icons">person_add</i>
                            <span>Pasien</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/Dokter'?>">
                            <i class="material-icons">person</i>
                            <span>Dokter</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/Kategori'?>">
                            <i class="material-icons">beenhere</i>
                            <span>Status</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/Pegawai'?>">
                            <i class="material-icons">supervisor_account</i> 
                            <span>Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/c_user'?>">
                            <i class="material-icons">account_circle</i> 
                            <span>User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/Rekam_medis'?>">
                            <i class="material-icons">bookmarks</i>
                            <span>Rekam Medis</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/Keranjang'?>">
                            <i class="material-icons">local_mall</i>
                            <span>Keranjang</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/R_transaksi'?>">
                            <i class="material-icons">attach_money</i>
                            <span>Riwayat Transaksi</span>
                        </a>
                    </li>
                    </div>
                        <div class="legal">
                        <div class="copyright">
                            &copy; 2022 <a href="javascript:void(0);">Deni Febriansyah</a>.
                        </div>
                        <div class="version">
                            <b>Version: </b> 1.0.0.1
                        </div>
                    </div>
                    <!-- <li>
                        <a href="<?= base_url().'admin/c_transaksi'?>">
                            <i class="material-icons">attach_money</i>
                            <span>Entri Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'admin/c_transaksi/laporan_transaksi'?>">
                            <i class="material-icons">chrome_reader_mode</i>
                            <span>Data Transaksi</span>
                        </a>
                    </li> -->
                    </li> 
                </ul>
<!-- <?php elseif($this->session->userdata('akses')=='2'):?>
              <ul class="list">
                    <li class="header">Hi, Waiter</li>
                        <a href="<?php echo base_url().'waiter/home'?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    <li>
                    <li class="header">Main Menu</li>
                    <li>
                        <a href="<?php echo base_url().'waiter/c_user'?>">
                            <i class="material-icons">person_add</i>
                            <span>Tambah User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'waiter/c_order'?>">
                            <i class="material-icons">bookmarks</i>
                            <span>Entri Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Laporan Transaksi</span>
                        </a>
                    </li>
                    </li>
                </ul>
<!-- <?php elseif($this->session->userdata('akses')=='3'):?> -->
                     <ul class="list">
                    <li class="header">Hi, Kasir</li>
                        <a href="<?php echo base_url().'kasir/home'?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    <li>
                    <li class="header">Main Menu</li>
                    <li>
                        <a href="<?php echo base_url().'kasir/Keranjang'?>">
                            <i class="material-icons">local_mall</i>
                            <span>Keranjang</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url().'kasir/R_transaksi'?>">
                            <i class="material-icons">attach_money</i>
                            <span>Riwayat Transaksi</span>
                        </a>
                    </li>
                    </li> 
                </ul>
<!-- <?php elseif($this->session->userdata('akses')=='4'):?>
                <ul class="list">
                    <li class="header">Hi, Owner</li>
                        <a href="<?php echo base_url().'owner/home'?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    <li>
                    <li class="header">Main Menu</li>
                        <a href="<?php echo base_url().'owner/c_laporan'?>">
                            <i class="material-icons">assignment</i>
                            <span>Data Transaksi</span>
                        </a>
                    </li>
                    </li> 
                </ul>
<?php else:?>
<ul class="list">
                    <li class="header">Hi, Pelanggan</li>
                        <a href="<?php echo base_url().'pelanggan/home'?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    <li>
                    <li class="header">Main Menu</li>
                        <a href="<?php echo base_url().'pelanggan/c_order'?>">
                            <i class="material-icons">attach_money</i>
                            <span>Entry Order</span>
                        </a>
                    </li>
                    </li> 
                </ul>
<?php endif;?>
</div>
<div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">Deni dan Kelompok</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0.1
                </div>
</div>
            #Footer -->
        </aside> -->
          <!-- Right Sidebar -->
          <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <!-- <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li> -->
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                         <li data-theme="purple" class="active">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="red">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>