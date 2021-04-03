<?php
class Modelkategori extends CI_Model
{
    public function data_kemeja()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'kemeja'));
    }
    
    public function data_celana()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'celana'));
    }
    
    public function data_sepatu()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'sepatu'));
    }
    
    public function data_jaket()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'jaket'));
    }
    
    public function data_topi()
    {
        return $this->db->get_where('tb_barang', array('kategori'=>'topi'));
    }
}

?>