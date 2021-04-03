        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sm fa-fw fa-plus"></i> Tambah Barang</button>
            
            <table class="table table-bordered mt-3">
              <tr>
                <th>NO</th>
                <th class="text-center">NAMA BARANG</th>
                <th class="text-center">KETERANGAN</th>
                <th class="text-center">KATEGORI</th>
                <th class="text-center">HARGA</th>
                <th class="text-center">STOK</th>
                <th class="text-center" colspan="3">AKSI</th>
              </tr>

              <?php
                $no=1;
                foreach ($barang as $brg) : ?>
              <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $brg->nama_barang; ?></th>
                <th><?php echo $brg->keterangan; ?></th>
                <th><?php echo $brg->kategori; ?></th>
                <th>Rp <?php echo number_format($brg->harga, 0, ',', '.') ?></th>
                <th class="text-right"><?php echo $brg->stok; ?></th>
                <th class="text-center"><?php echo anchor('admin/data_barang/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-success"> <i class="fa fa-fw fa-search"></i> Detail</div>') ?></th>
                <th class="text-center"><?php echo anchor('admin/data_barang/edit/'.$brg->id_barang,'<div class="btn btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i> Edit</div>') ?></th>
                <th class="text-center"><?php echo anchor('admin/data_barang/hapus/'.$brg->id_barang,'<div class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i> Hapus</div>') ?></th>
              </tr>

              <?php endforeach; ?>
            </table>
          </div>
        </div>