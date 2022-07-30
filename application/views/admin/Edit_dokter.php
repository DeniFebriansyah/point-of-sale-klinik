
     <!-- edit -->
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Dokter
                </h2>
            </div>
        </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Dokter</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="" method="post">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_dokter" value="<?= @$view1['nama_dokter']?>">
                                            <label class="form-label">Nama Dokter</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <p>Status</p>
                                    <select class="form-control show-tick" name="status" value="<?= @$view1['status']?>">
                                    <?php 
                                        $query = $this->db->query("SELECT * FROM kategori ")->result_array();
                                        foreach ($query as $row){
                                        ?>
                                        <option value="<?=$row['id_kategori']?>"><?=$row['status']?></option>
                                       
                                    <?php } ?> 
                                    </select>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                    <a href="<?= base_url().'index.php/page/dokter'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
    </section>