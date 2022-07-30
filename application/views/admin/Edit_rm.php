
     <!-- edit -->
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Rekam Medis
                </h2>
            </div>
        </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Rekam Medis</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="" method="post">
                                     <p>Pasien</p>
                                    <select class="form-control show-tick" name="nama" value="<?= @$view1['nama']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM pasien ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_pasien']?>"><?=$row['nama']?></option>
                                       
                                    <?php } ?> 
                                    </select>
                                    <br><br>
                                    <div class="form-group form-float">
                                    <p>Tanggal</p>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tanggal" value="<?= @$view1['tanggal']?>">
                                            <label class="form-label"></label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="subjektif" value="<?= @$view1['subjektif']?>">
                                            <label class="form-label">Subjektif</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="objektif" value="<?= @$view1['objektif']?>">
                                            <label class="form-label">Objektif</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="asesmen" value="<?= @$view1['asesmen']?>">
                                            <label class="form-label">Asesmen</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="keluhan" value="<?= @$view1['keluhan']?>">
                                            <label class="form-label">Keluhan</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="keterangan" value="<?= @$view1['keterangan']?>">
                                            <label class="form-label">Keterangan</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                   <a href="<?= base_url().'index.php/page/rekam_medis'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
    </section>