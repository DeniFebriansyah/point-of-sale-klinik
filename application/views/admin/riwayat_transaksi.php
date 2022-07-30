
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Riwayat Transaksi
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        <?php
                                if ($this->session->flashdata('flash') == TRUE) {?>
                                        
                                        <div class="alert bg-green alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <?php echo $this->session->flashdata('flash');?>
                                        </div>
                        <?php } ?>
                        <div class="button-demo">
                        <!-- <button class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Data</button> -->
                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pasien</th>
                                            <th>Obat</th>
                                            <th>Jumlah Obat</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;
                                        foreach ($view as $row){
                                            
                                           $pasien= $row['pasien'];
                                           $query = $this->db->query("SELECT * FROM pasien WHERE id_pasien='$pasien'")->row_array();
                                           $obat= $row['obat'];
                                           $query1 = $this->db->query("SELECT * FROM obat WHERE id_obat='$obat'")->row_array();

                                            ?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $query['nama']  ?></td>
                                            <td><?= $query1['nama_obat'] ?></td>
                                            <td><?= $row['jumlah_obat']?></td>
                                            <td>Rp.<?= number_format($row['total_harga'])?></td>
                                            <td><?= $row['tanggal']?></td>
                                            <td>Lunas</td>
                                            <td>
                                                  <!-- <a class="btn btn-success" href="<?= base_url()?>admin/cetak_faktur1/" 
                                                 onclick="return confirm('cetak faktur ??')">
                                                     <i class="material-icons">print</i>
                                                  </a> -->
                                                  <!-- <a class="btn btn-danger" href="<?= base_url()?>admin/Keranjang/bayar/<?= $row['id_keranjang']?>"
                                                 onclick="return confirm('klik Ya untuk membayar !!')">
                                                     <i class="material-icons">Bayar</i>
                                                  </a> -->
                                                  <!-- <a class="btn btn-success" href="<?= base_url()?>admin/Keranjang/edit/<?= $row['id_keranjang']?>">
                                                     <i class="material-icons">create</i>
                                                  </a> -->
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
                    </div>