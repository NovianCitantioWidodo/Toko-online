<div class="container-fluid">
    <div class="card">
    <div class="card-header">Detail Product</div>
    <div class="card-body">
        <?php foreach ($barang as $brg) : ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo site_url('assets/uploads/img/'.$brg->gambar) ?>" alt="" class="card-img-top">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th>Nama Produk</th>
                        <td><?php echo $brg->nama_barang ?></td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td><?php echo $brg->keterangan ?></td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td><?php echo $brg->kategori ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td><?php echo $brg->harga ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td><?php echo $brg->stok ?></td>
                    </tr>
                </table>
                
                <div style="text-align: right">
                    <?php echo anchor('admin/data_barang','<div class="btn btn-primary"> Kembali</div>') ?>
                    <?php echo anchor('admin/data_barang/edit/'.$brg->id_barang,'<div class="btn btn-warning"><i class="fa fa-fw fa-edit"></i> Edit</div>') ?>
                    <?php echo anchor('admin/data_barang/hapus/'.$brg->id_barang,'<div class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Hapus</div>') ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>