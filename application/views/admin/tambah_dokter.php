
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Daftar Dokter
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
                                            <th>Nama Dokter</th>
                                            <th>Spesialis</th>
                                            <th>Status</th>                    
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;
                                        foreach ($view as $row){
                                            
                                           $kategori= $row['kategori'];
                                           $query = $this->db->query("SELECT * FROM kategori WHERE id_kategori='$kategori'")->row_array();
                                     
                                            ?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $row['nama_dokter']  ?></td>
                                            <td><?= $row['spesialis'] ?></td>
                                            <td><?=$query['status']?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>admin/Dokter/hapus/<?= $row['id_dokter']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <a class="btn btn-success" href="<?= base_url()?>admin/Dokter/edit/<?= $row['id_dokter']?>">
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
                            <h4 class="modal-title" id="defaultModalLabel">Masukan data dokter baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                                  <div class="form-group">
                                     <div class="form-line">
                                         <input type="text" class="form-control" name="d" placeholder="Nama Dokter" value="<?= @$view1['nama_dokter']?>" />
                                      </div>
                                     </div>
                                  <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="s" placeholder="Spesialis" value="<?= @$view1['spesialis']?>"/>
                                     </div>
                                  </div>
                                  <p>Status</p>
                                    <select class="form-control show-tick" name="st" value="<?= @$view1['status']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM kategori ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_kategori']?>"><?=$row['status']?></option>
                                       
                                    <?php } ?> 
                                    </select>
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

