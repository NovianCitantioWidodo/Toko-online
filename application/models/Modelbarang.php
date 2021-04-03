<?php
class Modelbarang extends CI_Model
{
    public function tampil_barang()
    {
        return $this->db->get('tb_barang');
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_barang($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_barang($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
?>