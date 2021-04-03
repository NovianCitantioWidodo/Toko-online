        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            
            <table class="table table-bordered mt-3">
              <tr>
                <th>NO</th>
                <th class="text-center">NAMA PEMESAN</th>
                <th class="text-center">ALAMAT</th>
                <th class="text-center">TANGGAL PESAN</th>
                <th class="text-center">BATAS PESANAN</th>
                <th class="text-center" colspan="3">AKSI</th>
              </tr>

              <?php
                foreach ($invoice as $inv) : ?>
              <tr>
                <th><?php echo $inv->id_invoice ?></th>
                <th><?php echo $inv->nama; ?></th>
                <th><?php echo $inv->alamat; ?></th>
                <th><?php echo $inv->tgl_pesan; ?></th>
                <th><?php echo $inv->batas_bayar; ?></th>
                <th class="text-center"><?php echo anchor('admin/invoice/detail/'.$inv->id_invoice,'<div class="btn btn-sm btn-success"> <i class="fa fa-fw fa-search"></i> Detail</div>') ?></th>
              </tr>

              <?php endforeach; ?>
            </table>
          </div>
        </div>