<?php
class Modeldata extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function find($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)
                           ->limit(1)
                           ->get('tb_barang');

        if($result->num_rows() > 0){
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_barang($id_barang)
    {
        $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');

        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return false;
        }
    }
}

?>