
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Keterangan
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
                                            <th>Status</th>                   
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;foreach ($view as $row):?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $row['status'] ?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>admin/Kategori/hapus/<?= $row['id_kategori']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <a class="btn btn-success" href="<?= base_url()?>admin/Kategori/edit/<?= $row['id_kategori']?>">
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
                            <h4 class="modal-title" id="defaultModalLabel">Masukan Kategori Baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                                  <div class="form-group">
                                     <div class="form-line">
                                         <input type="text" class="form-control" name="s" placeholder="Kategori" value="<?= @$view1['status']?>" />
                                      </div>
                                     </div>
                                  <!-- <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="s" placeholder="Spesialis" value="<?= @$view1['spesialis']?>"/>
                                     </div>
                                  </div>
                                  <p>Status</p>
                                    <select class="form-control show-tick" name="st" value="<?= @$view1['status']?>">
                                        <option value="Ready">Ready</option>
                                        <option value="Tidak Ready">Tidak Ready</option>
                                    </select> -->
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

