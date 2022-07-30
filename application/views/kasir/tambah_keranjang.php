
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Keranjang
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
                        <button class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Data</button>
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
                                            <th>Jumlah Uang</th>
                                            <th>Kembalian</th>                    
                                            <th>Aksi</th>
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
                                            <td>Rp.<?= number_format($row['jumlah_uang'])?></td>
                                            <td>Rp.<?= number_format($row['kembalian'])?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>kasir/Keranjang/hapus/<?= $row['id_keranjang']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <a class="btn btn-primary" href="<?= base_url()?>kasir/Keranjang/bayar/<?= $row['id_keranjang']?>"
                                                 onclick="return confirm('klik Ya untuk membayar !!')">
                                                     <i class="material-icons">attach_money</i>
                                                  </a>
                                                  <a class="btn btn-success" href="<?= base_url()?>kasir/Keranjang/edit/<?= $row['id_keranjang']?>">
                                                     <i class="material-icons">create</i>
                                                  </a>
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

            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Transaksi baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                                    <p>Nama</p>
                                    <select class="form-control show-tick" name="p" value="<?= @$view1['nama']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM pasien ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_pasien']?>"><?=$row['nama']?></option>
                                    <?php } ?> 
                                    </select>
                                    <br><br>
                                  <p>Obat</p>
                                    <select class="form-control show-tick" name="o" value="<?= @$view1['nama_obat']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM obat ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_obat']?>"><?=$row['nama_obat']?></option>
                                    <?php } ?> 
                                    </select>
                                    <br><br>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jo" placeholder="Jumlah Obat" value="<?= @$view1['jumlah_obat']?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="ju" placeholder="Jumlah Uang" value="<?= @$view1['jumlah_uang']?>"/>
                                        </div>
                                    </div>
                        </div>
                        <div class="modal-footer"> 
                            <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="save">SAVE CHANGES</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>          
    </section>

