
     <!-- edit -->
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Ketagori
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
                                            <input type="text" class="form-control" name="status" value="<?= @$view1['status']?>">
                                            <label class="form-label">Kategori</label>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                    <p> Status </p>
                                    <select class="form-control show-tick" name="status">
                                        <option <?= $view1['status'] == "ready" ? "selected='selected'" : "" ?> value="Ready">Ready</option>
                                        <option <?= $view1['status'] == "tidak ready" ? "selected='selected'" : "" ?> value="Tidak ready">Tidak Ready</option>
                                    </select>
                                       </div> -->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">Update</button>
                                   <a href="<?= base_url().'index.php/page/kategori'?>" class="btn btn-danger waves-effect">Close</a>
                                    </div>
                                    </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
    </section>