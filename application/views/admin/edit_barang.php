<div class="container-fluid">
    <div class="col-md-6">
        <h3><i class="fa fa-fw fa-edit"></i> EDIT BARANG</h3>

        <?php foreach ($barang as $brg) : ?>
            <form method="post" action="<?php echo site_url('admin/data_barang/update/'.$brg->id_barang) ?>">
                <div class="form-grup">
                    <label>Nama Barang</label>
                    <input class="form-control" type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>">
                    <input class="form-control" type="text" name="nama_barang" value="<?php echo $brg->nama_barang ?>">
                </div>
                <div class="form-grup">
                    <label>Keterangan</label>
                    <input class="form-control" type="text" name="keterangan" value="<?php echo $brg->keterangan ?>">
                </div>
                <div class="form-grup">
                    <label>Kategori</label>
                    <input class="form-control" type="text" name="kategori" value="<?php echo $brg->kategori ?>">
                </div>
                <div class="form-grup">
                    <label>Harga</label>
                    <input class="form-control" type="text" name="harga" value="<?php echo $brg->harga ?>">
                </div>
                <div class="form-grup mb-2">
                    <label>Stok</label>
                    <input class="form-control" type="text" name="stok" value="<?php echo $brg->stok ?>">
                </div>
                <div style="text-align: right">
                    <a href="<?php echo site_url('admin/data_barang') ?>" class="btn btn-primary" >Kembali</a>
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    <div class="col-md-8"></div>
</div>