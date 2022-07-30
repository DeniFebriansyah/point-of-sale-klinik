
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Rekam Medis
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
                                            <th>Tanggal</th>
                                            <th>Subjektif</th>                    
                                            <th>Objektif</th>
                                            <th>Asesmen</th>
                                            <th>Keluhan</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;
                                        foreach ($view as $row){
                                            
                                           $nama= $row['pasien'];
                                           $query = $this->db->query("SELECT * FROM pasien WHERE id_pasien='$nama'")->row_array();
                                     
                                            ?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?=$query['nama']?></td>
                                            <td><?= $row['tanggal']  ?></td>
                                            <td><?= $row['subjektif'] ?></td>
                                            <td><?= $row['objektif'] ?></td>
                                            <td><?= $row['asesmen'] ?></td>
                                            <td><?= $row['keluhan'] ?></td>
                                            <td><?= $row['keterangan'] ?></td>
                                            <td>
                                                 <a class="btn btn-danger" href="<?= base_url()?>admin/Rekam_medis/hapus/<?= $row['id_data']?>"
                                                 onclick="return confirm('yakin ingin di hapus ??')">
                                                     <i class="material-icons">delete</i>
                                                  </a>
                                                  <!-- <a class="btn btn-success" href="<?= base_url()?>admin/Rekam_medis/edit/<?= $row['id_data']?>">
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

            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Masukan rekam medis baru</h4>
                        </div>
                        <br/>
                        <div class="modal-body">
                            <form method="post" action="">
                            <p>Pasien</p>
                                    <select class="form-control show-tick" name="p" value="<?= @$view1['nama']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM pasien ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_pasien']?>"><?=$row['nama']?></option>
                                       
                                    <?php } ?> 
                                        </div>  
                                    </select>
                                    <br><br>
                                    <div class="form-group form-float">
                                    <p>Tanggal</p>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="tgl" value="<?= @$view1['tanggal']?>">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="sb" value="<?= @$view1['subjektif']?>">
                                            <label class="form-label">Subjektif</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ob" value="<?= @$view1['objektif']?>">
                                            <label class="form-label">Objektif</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ass" value="<?= @$view1['asesmen']?>">
                                            <label class="form-label">Asesmen</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kl" value="<?= @$view1['keluhan']?>">
                                            <label class="form-label">Keluhan</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ket" value="<?= @$view1['keterangan']?>">
                                            <label class="form-label">Keterangan</label>
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

