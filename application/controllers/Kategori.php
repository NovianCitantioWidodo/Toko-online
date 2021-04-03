<?php
class Kategori extends CI_Controller
{
    public function kemeja()
    {
        $data['kemeja'] = $this->Modelkategori->data_kemeja()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('kemeja', $data);
        $this->load->view('_partials/footer');
    }
    
    public function celana()
    {
        $data['celana'] = $this->Modelkategori->data_celana()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('celana', $data);
        $this->load->view('_partials/footer');
    }
    
    public function sepatu()
    {
        $data['sepatu'] = $this->Modelkategori->data_sepatu()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('sepatu', $data);
        $this->load->view('_partials/footer');
    }
    
    public function jaket()
    {
        $data['jaket'] = $this->Modelkategori->data_jaket()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('jaket', $data);
        $this->load->view('_partials/footer');
    }
    
    public function topi()
    {
        $data['topi'] = $this->Modelkategori->data_topi()->result();
        $this->load->view('_partials/header');
        $this->load->view('_partials/sidebar');
        $this->load->view('topi', $data);
        $this->load->view('_partials/footer');
    }
}

?>