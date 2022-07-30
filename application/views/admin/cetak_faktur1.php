        <html lang="en" moznomarginboxes mozdisallowselectionprint>
        <head>
            <title>Faktur Penjualan</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="<?= base_url('assets/css/laporan.css')?>"/>
        </head>
        <body onload="window.print()">
        <div id="laporan">
        <table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">

        </table>

        <table border="0" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
        <tr>
            
        </tr>
                            
        </table>
        <?php foreach ($view as $row):?>
        <table border="0" align="center" style="width:700px;border:none;">
                <tr>
                    <th style="text-align:left;">Id Transaksi</th>
                    <th style="text-align:left;">: <?= $row['id_transaksi']?></th>
                    <th style="text-align:left;">Total Bayar</th>
                    <th style="text-align:left;">: <?= 'Rp '.number_format($row['jumlah']).',-';?></th>
                </tr>
                <tr>
                    <th style="text-align:left;">Tanggal</th>
                    <th style="text-align:left;">: <?= $row['tanggal'];?></th>
                    <th style="text-align:left;">Tunai</th>
                    <th style="text-align:left;">: <?= 'Rp '.number_format($row['total_bayar']).',-';?></th>
                </tr>
                <tr>
                    <th style="text-align:left;">Id Order</th>
                    <th style="text-align:left;">: <?= $row['id_order'];?></th>
                    <th style="text-align:left;">Kembalian</th>
                    <th style="text-align:left;">: <?= 'Rp '.number_format($row['kembalian']).',-';?></th>
                </tr>
        </table>
        <?php endforeach ?>
        </br>
        </br>
        <table border="1" align="center" style="width:700px;margin-bottom:20px;">
        <thead>
        <tr>
                                            <th>No</th>
                                            <th>Nama Pasien</th>
                                            <th>Obat</th>
                                            <th>Jumlah Obat</th>
                                            <th>Total Harga</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $b=1;
                                        foreach ($view as $row){
                                            
                                           $pasien= $row['pasien'];
                                           $query = $this->db->query("SELECT * FROM pasien WHERE id_pasien='$pasien'")->row_array();
                                           $obat= $row['obat'];
                                           $query1 = $this->db->query("SELECT * FROM obat WHERE id_obat='$obat'")->row_array();

                                            ?>
                                        <tr>
                                            <td><?= $b++; ?></td>
                                            <td><?= $query['nama']  ?></td>
                                            <td><?= $query1['nama_obat'] ?></td>
                                            <td><?= $row['jumlah_obat']?></td>
                                            <td>Rp.<?= number_format($row['total_harga'])?></td>
                                            <td><?= $row['tanggal']?></td>
                                            <td>
                <td></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>

            <tr>
                <td colspan="6" style="text-align:center;"><b>Total</b></td>
                <td colspan="2">Rp.<?= number_format($total);?></td>
            </tr>
        </tfoot>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right">Bogor, <?php echo date('d-M-Y')?></td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>
        
            <tr>
            <td><br/><br/><br/><br/></td>
            </tr>    
            <tr>
                <td align="center"></td>
            </tr>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <th><br/><br/></th>
            </tr>
            <tr>
                <th align="left"></th>
            </tr>
        </table>
        </div>
        </body>
        </html>