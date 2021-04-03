<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum login !
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['barang'] = $this->Modelbarang->tampil_barang()->result();
        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('admin/_partials/footer');
    }
}

?>