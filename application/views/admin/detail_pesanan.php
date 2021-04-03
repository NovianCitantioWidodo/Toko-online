        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pesanan nomer : <?php echo $invoice->id_invoice ?></h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <table class="table table-bordered mt-3">
                <tr style="text-align: center">
                    <th>ID BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>JUMLAH</th>
                    <th>HARGA</th>
                    <th>SUB-TOTAL</th>
                </tr>

                <?php
                    $total=0;
                    foreach ($pesanan as $psn) : 
                    $subtotal = $psn->jumlah * $psn->harga;
                    $total += $subtotal;
                    ?>
                <tr>
                    <th><?php echo $psn->id_barang; ?></th>
                    <th><?php echo $psn->nama_barang; ?></th>
                    <th style="text-align: right"><?php echo number_format($psn->jumlah, 0, ',', '.') ?></th>
                    <th style="text-align: right">Rp <?php echo number_format($psn->harga, 0, ',', '.') ?></th>
                    <th style="text-align: right">Rp <?php echo number_format($subtotal, 0, ',', '.') ?></th>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <th colspan="4" style="text-align: right"> Total Keseluruhan</th>
                    <th style="text-align: right">Rp <?php echo number_format($total, 0, ',', '.') ?></th>
                </tr>
            </table>
            
            <a class="btn btn-primary" href="<?php echo site_url('admin/invoice') ?>">Kembali</a>
          </div>
        </div>