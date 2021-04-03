        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div style="text-align: center;" class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url('assets/img/slider1.jpg') ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url('assets/img/slider2.jpg') ?>" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          <div class="row text-center mt-4">
            <?php foreach($topi as $tpi) :?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
              <img class="card-img-top" src="<?php echo base_url('assets/uploads/img/'.$tpi->gambar) ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $tpi->nama_barang ?></h5>
                <small><?php echo $tpi->keterangan ?></small><br>
                <span class="badge badge-primary mb-2">Rp <?php echo number_format($tpi->harga, 0, ',', '.') ?></span><br>
                <?php echo anchor('keranjang/tambah_keranjang/'.$tpi->id_barang,'<div class="btn btn-success"><i class="fas fa-fw fa-sm fa-plus"></i> Keranjang</div>') ?>
                <?php echo anchor('keranjang/detail/'.$tpi->id_barang,'<div class="btn btn-primary"> Detail</div>') ?>
              </div>
            </div>
            
            <?php endforeach; ?>
          </div>

        </div>
        <!-- /.container-fluid -->
