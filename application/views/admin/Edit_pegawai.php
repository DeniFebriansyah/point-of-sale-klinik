
     <!-- edit -->
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Pegawai
                </h2>
            </div>
        </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Pegawai</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="" method="post">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_pegawai" value="<?= @$view1['nama_pegawai']?>">
                                            <label class="form-label">Nama Pegawai</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <p> Gender </p>
                                    <select class="form-control show-tick" name="gender">
                                        <option <?= $view1['gender'] == "Laki-laki" ? "selected='selected'" : "" ?> value="Laki-laki">Laki-laki</option>
                                        <option <?= $view1['gender'] == "Perempuan" ? "selected='selected'" : "" ?> value="Perempuan">Perempuan</option>
                                    </select>
                                       </div>
                                       <div class="form-group">
                                    <p> Jabatan </p>
                                    <select class="form-control show-tick" name="jabatan">
                                        <option <?= $view1['jabatan'] == "jabatan" ? "selected='selected'" : "" ?> value="Kasir">Kasir</option>
                                        <option <?= $view1['jabatan'] == "jabatan" ? "selected='selected'" : "" ?> value="Apoteker">Apoteker</option>
                                        <option <?= $view1['jabatan'] == "jabatan" ? "selected='selected'" : "" ?> value="Resepsionis">Resepsionis</option>

                                    </select>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                   <a href="<?= base_url().'index.php/page/pegawai'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                        </div>
                     </div>
                </div>
            </div>
    </section>