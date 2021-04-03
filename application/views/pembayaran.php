<div class="container-fluid">
    <?php if ($this->session->userdata('username') == TRUE){ ?>
    <div class="row">
        <?php if ($this->cart->total() != 0){ ?>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="<?php echo site_url('keranjang/proses_pesanan') ?>">
                <div class="form-grup">
                    <label>Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-grup">
                    <label>Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap">
                </div>
                <div class="form-grup">
                    <label>Nomor Telepon</label>
                    <input class="form-control" type="text" name="no_telepon" placeholder="Nomor Telepon">
                </div>
                <div class="form-grup">
                    <label>Jasa Pengiriman</label>
                    <select class="custom-select" id="inputGroupSelect03" name="jasa">
                        <option>JNE</option>
                        <option>POS</option>
                        <option>TIKI</option>
                    </select>
                </div>
                <div class="form-grup">
                    <label>Transfer Bank</label>
                    <select class="custom-select" id="inputGroupSelect03" name="bank">
                        <option>BRI</option>
                        <option>BNI</option>
                        <option>MANDIRI</option>
                    </select>
                </div>

                <div class="mt-2">
                    <label>Pesanan Senilai : </label>
                    Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
                </div>

                <div style="text-align: right">
                    <?php echo anchor('keranjang','<div class="btn btn-primary">Kembali</div>') ?>
                    <button class="btn btn-success" type="submit">Pesan Sekarang</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    
        <?php } else{ ?>
            <div class="col-md-8">
                Keranjang anda masih kosong ! <br>
                <a href="<?php echo site_url('keranjang') ?>"><div class="btn btn-primary">Kembali</div></a>
            </div>
        <?php } ?>

<?php } else { ?>
    Maaf, anda belum login ! <br>
    <a href="<?php echo site_url('dashboard') ?>"><div class="btn btn-primary">Kembali</div></a>
    <a href="<?php echo site_url('auth/login') ?>"><div class="btn btn-success">Login</div></a>
<?php } ?>
</div>