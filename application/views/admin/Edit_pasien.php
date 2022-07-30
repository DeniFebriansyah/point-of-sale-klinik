
                <!-- edit -->
                <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Pasien
                </h2>
                 </div>
                    </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Pasien</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="" method="post">
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" value="<?= @$view1['nama']?>">
                                            <label class="form-label">Nama Pasien</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat" value="<?= @$view1['alamat']?>">
                                            <label class="form-label">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="umur" value="<?= @$view1['umur']?>">
                                            <label class="form-label">Umur</label>
                                        </div>
                                    </div>
                                    <p> Jenis Kelamin </p>
                                    <select class="form-control show-tick" name="jenis_kelamin">
                                        <option <?= $view1['jenis_kelamin'] == "Laki-laki" ? "selected='selected'" : "" ?> value="Laki-laki">Laki-laki</option>
                                        <option <?= $view1['jenis_kelamin'] == "Perempuan" ? "selected='selected'" : "" ?> value="Perempuan">Perempuan</option>
                                    </select>
                                       </div>    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                   <a href="<?= base_url().'index.php/page/Edit_pasien'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
    </section>
            </div>