
     <!-- edit -->
     <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                   Edit Keranjang
                </h2>
            </div>
        </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       </br>
                        <div class="body">
                            <h2 class="card-inside-title" align="center">Edit Keranjang</h2>
                            <br/>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="modal-body">
                            <form method="post" action="">
                                    
                                    <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah_obat" placeholder="Jumlah Obat" value="<?= @$view1['jumlah_obat']?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="jumlah_uang" placeholder="Jumlah Uang" value="<?= @$view1['jumlah_uang']?>"/>
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