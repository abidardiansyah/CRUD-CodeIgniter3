<?php
class Barang extends CI_Controller
{
    public function __construct()
    /** Apabila  semua controller dalam class Barang membutuhkan koneksi datbase, cukup kunakan construct */
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $autoload['helper'] = array('form');
        $this->load->library('form_validation');
    }


    /** Apabila setiap function dalam class Barang membutuhkan koneksi datbase, cukup kunakan construct */





    public function index()
    {


        $data['judul'] = "Halaman Home";
        $this->load->view('templates/header', $data);
        /*** code sendiri */
        $recordGudang = $this->Barang_model->getDataGudang();
        /*** code sendiri */
        $DATA = array('barang' => $recordGudang);
        /*** code sendiri */
        $this->load->view('barang/index', $DATA);
        $this->load->view('templates/footer');
    }

    public function Aksitambah()
    {
        $data['judul'] = 'Form Tambah Data';

        $this->Barang_model->tambahDataBarang();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('barang');
        $this->load->view('templates/header', $data);
        $this->load->view('barang/tambah');
        $this->load->view('templates/footer');
    }
    public function hapus($kode)
    /*** code sendiri */
    {
        $this->Barang_model->hapusDataBarang($kode);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }
    public function AksiDeleteData($kode)
    /*** code sendiri */
    {
        $this->Barang_model->DeleteDataGudang($kode);
        redirect(base_url());
    }
}
