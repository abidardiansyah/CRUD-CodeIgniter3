<?php
class Barang_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('gudang')->result_array();
    }
    public function getDataGudang()
    {
        $this->db->select('*');
        $this->db->from('gudang');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambahDataBarang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "kode" => $this->input->post('kode', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis" => $this->input->post('jenis', true),
            "stock" => $this->input->post('stock', true),
            "merek" => $this->input->post('merek', true),
            "lokasi" => $this->input->post('lokasi')

        ];

        $this->db->insert('gudang', $data);
    }
    public function hapusDataBarang($kode)
    {
        $this->db->where('kode', $kode);
        $this->db->delete('gudang');
    }
    public function DeleteDataGudang($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('gudang');
    }
}
