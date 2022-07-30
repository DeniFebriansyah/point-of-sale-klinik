
     <!-- edit -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Obat
                </h2>
            </div>
        </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Obat</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <form action="" method="post">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_obat" value="<?= @$view1['nama_obat']?>">
                                            <label class="form-label">Nama Obat</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="harga" value="<?= @$view1['harga']?>">
                                            <label class="form-label">Harga</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="jumlah" value="<?= @$view1['jumlah']?>">
                                            <label class="form-label">Jumlah</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <p> Status </p>
                                    <select class="form-control show-tick" name="status_obat">
                                        <option <?= $view1['status_obat'] == "obat bebas" ? "selected='selected'" : "" ?> value="Obat Bebas">Obat Bebas</option>
                                        <option <?= $view1['status_obat'] == "obat bebas terbatas" ? "selected='selected'" : "" ?> value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
                                    </select>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                   <a href="<?= base_url().'index.php/page/obat'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
    </section>