
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Daftar Obat
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
                                            <th>no</th>
                                            <th>Nama Obat</th>
                                            <th>Status</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;foreach ($view as $tampil):?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $tampil['nama_obat'] ?></td>
                                            <td><?= $tampil['status_obat'] ?></td>
                                            <td>Rp.<?= number_format($tampil['harga']) ?></td>
                                            <td><?= $tampil['jumlah'] ?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>admin/obat/hapus/<?= $tampil['id_obat']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <a class="btn btn-success" href="<?= base_url()?>admin/obat/edit/<?= $tampil['id_obat']?>">
                                                     <i class="material-icons">create</i>
                                                  </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
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
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Data Obat Baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                                  <div class="form-group">
                                     <div class="form-line">
                                         <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat" value="<?= @$view1['nama_obat']?>" />
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    <p>Status</p>
                                    <select class="form-control show-tick" name="status_obat" value="<?= @$view1['status_obat']?>">
                                        <option value="Obat Bebas">Obat Bebas</option>
                                        <option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
                                    </select>
                                    </div>  
                                  <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= @$view1['harga']?>"/>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="<?= @$view1['jumlah']?>"/>
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

