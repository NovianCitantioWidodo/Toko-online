<?php
class Data_barang extends CI_Controller
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

    public function tambah_aksi()
    {
        $nama_barang    = $this->input->post('nama_barang');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = ''){
        } else {
            $config['upload_path']  = '.uploads/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
        }
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')) {
            echo "Gambar gagal diupload!";
        } else {
            $gambar = $this->upload->data('file_name');
        }

        $data = array(
            'nama_barang' => $nama_barang,
            'keterangan'  => $keterangan,
            'kategori'    => $kategori,
            'harga'       => $harga,
            'stok'        => $stok,
            'gambar'      => $gambar
        );

        $this->Modelbarang->tambah_barang($data, 'tb_barang');
        redirect('admin/data_barang');
    }

    public function edit($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->Modelbarang->edit_barang($where, 'tb_barang')->result();

        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function update($id_barang)
    {
            $nama_barang    = $this->input->post('nama_barang');
            $keterangan     = $this->input->post('keterangan');
            $kategori       = $this->input->post('kategori');
            $harga          = $this->input->post('harga');
            $stok           = $this->input->post('stok');

        $where = array(
            'id_barang'        => $id_barang
        );
     
        $data = array(
            'nama_barang'      => $nama_barang,
            'keterangan'       => $keterangan,
            'kategori'         => $kategori,
            'harga'            => $harga,
            'stok'             => $stok,
        );

        $this->Modelbarang->update_barang($where, $data, 'tb_barang');
        redirect('admin/data_barang');
    }

    public function hapus($id_barang)
    {
        $where = array(
            'id_barang' => $id_barang
        );
        $this->Modelbarang->hapus_barang($where, 'tb_barang');
        redirect('admin/data_barang');
    }

    public function detail($id_barang)
    {
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->Modelbarang->detail_barang($where, 'tb_barang')->result();

        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/detail_barang', $data);
        $this->load->view('admin/_partials/footer');
    }
}

?>