<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment_ind</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Dokter</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=$dokter?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Pegawai</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?=$pegawai?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">local_pharmacy</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Obat</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?=$obat?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Jumlah Pasien</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=$pasien?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Penyuluhan</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <video controls width="860">
                             <source src="<?= base_url();?>vidio/contoh1.mp4" type="video/mp4">
                            </video>               
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Dokter</h2>
                        </div>
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dokter</th>
                                            <th>Spesialis</th>
                                            <th>Status</th>                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;foreach ($view as $row):?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $row['nama_dokter'] ?></td>
                                            <td><?= $row['spesialis'] ?></td>
                                            <td>Ready</td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Image</h2>
                        </div>
                        <div class="body">
                        
                        <img src="<?= base_url();?>images/thumbs-up.png">
                        </div>
                    </div>
                </div> -->
                <!-- #END# Browser Usage -->
            </div>
        </div>
            <script src ="js/pages/charts/chartsjs.js"></script>
            
    </section>
