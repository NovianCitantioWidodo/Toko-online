<div class="container-fluid">
    <?php if ($this->session->userdata('username') == TRUE){ ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th style="text-align: center">JUMLAH</th>
            <th style="text-align: center">HARGA</th>
            <th style="text-align: center">SUB-TOTAL</th>
        </tr>

        <?php
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <th><?php echo $no++ ?></th>
                <th><?php echo $items['name'] ?></th>
                <th style="text-align: right"><?php echo number_format($items['qty'], 0, ',', '.') ?></th>
                <th style="text-align: right">Rp <?php echo number_format($items['price'], 0, ',', '.') ?></th>
                <th style="text-align: right">Rp <?php echo number_format($items['subtotal'], 0, ',', '.') ?></th>
            </tr>
        <?php endforeach; ?>

            <tr>
                <th colspan="4"></th>
                <th style="text-align: right">Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?></th>
            </tr>
    </table>
    <div style="text-align: right">
        <a href="<?php echo site_url('keranjang/hapus_keranjang') ?>"><div class="btn btn-danger"><i class="fas fa-fw fa-sm fa-trash"></i> Hapus Keranjang</div></a>
        <a href="<?php echo site_url('dashboard') ?>"><div class="btn btn-primary"><i class="fas fa-fw fa-sm fa-shopping-bag"></i> Lanjut Belanja</div></a>
        <a href="<?php echo site_url('keranjang/pembayaran') ?>"><div class="btn btn-success"><i class="fas fa-fw fa-sm fa-dollar-sign"></i> Pembayaran</div></a>
    </div>
    <?php } else { ?>
        Maaf, anda belum login !<br>
        <a href="<?php echo site_url('dashboard') ?>"><div class="btn btn-primary">Kembali</div></a>
        <a href="<?php echo site_url('auth/login') ?>"><div class="btn btn-success">Login</div></a>
    <?php } ?>
</div>