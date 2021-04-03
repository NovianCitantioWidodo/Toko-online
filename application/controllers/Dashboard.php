<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->Modeldata->tampil_data()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('_partials/footer');
    }

    public function utama()
    {
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('utama');
        $this->load->view('_partials/footer');
    }

    public function detail($id_barang)
    {
        $data['barang'] = $this->Modeldata->detail_barang($id_barang);
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('_partials/footer');
    }
}

?>