<?php

class Home extends CI_Controller
{
    public function __construct()
    /** Apabila  semua controller dalam class Barang membutuhkan koneksi datbase, cukup kunakan construct */
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }
    public function index()
    {


        $data['judul'] = "Halaman Home";
        $this->load->view('templates/header', $data);
        $recordGudang = $this->Barang_model->getDataGudang();
        $DATA = array('barang' => $recordGudang);
        $this->load->view('barang/index', $DATA);
        $this->load->view('templates/footer');
    }
}
