
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Daftar Pegawai
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
                                            <th>Nama Pegawai</th>
                                            <th>Gender</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;foreach ($view as $row):?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $row['nama_pegawai'] ?></td>
                                            <td><?= $row['gender'] ?></td>
                                            <td><?= $row['jabatan'] ?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>admin/pegawai/hapus/<?= $row['id_pegawai']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <a class="btn btn-success" href="<?= base_url()?>admin/pegawai/edit/<?= $row['id_pegawai']?>">
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
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Data Pegawai Baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                                  <div class="form-group">
                                     <div class="form-line">
                                         <input type="text" class="form-control" name="np" placeholder="Nama Pegawai" value="<?= @$view1['nama_pegawai']?>" />
                                      </div>
                                    </div>
                                    <div class="form-group">
                                    <p>Gender</p>
                                    <select class="form-control show-tick" name="g" value="<?= @$view1['gender']?>">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    </div>  
                                    <div class="form-group">
                                    <p>Jabatan</p>
                                    <select class="form-control show-tick" name="j" value="<?= @$view1['jabatan']?>">
                                        <option value="Kasir">Perawat</option>
                                        <option value="Apoteker">Apoteker</option>
                                        <option value="Apoteker">Resepsionis</option>
                                    </select>
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

