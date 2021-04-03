<?php
class Keranjang extends CI_Controller
{
    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('keranjang');
        $this->load->view('_partials/footer');
    }

    public function tambah_keranjang($id_barang)
    {
        $barang = $this->Modeldata->find($id_barang);

        $data = array(
            'id'        => $barang->id_barang,
            'qty'       => 1,
            'price'     => $barang->harga,
            'name'      => $barang->nama_barang
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('keranjang');
    }

    public function pembayaran()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('_partials/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Modelinvoice->invoice();
        if ($is_processed){
            $this->cart->destroy();
            $this->load->view('_partials/header');
            $this->load->view('_partials/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('_partials/footer');
        } else {
            echo "Maaf, Pesanan anda gagal diproses !";
        }
    }
}

?>