<?php

class Katalog extends Controller
{
    public function __construct()
    {
        // if ($_SESSION['session_login'] != 'sudah_login') {
        //     Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
        //     header('location: ' . base_url . '/login');
        //     exit;
        // }
    }
    public function index()
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'clothes';
        $data['dataname'] = 'baju_man';

        $data['css'] =
            array("sidebar");
        $data['items'] = $this->model('ClothMan')->getAllBaju();

        $data['script'] =
            array("data", "dom", "scriptMix");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('katalog/clothes', $data);
        $this->view('templates/footer', $data);
    }
    public function clothes()
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'clothes';
        $data['dataname'] = 'baju_man';
        $data['css'] =
            array("sidebar");
        $data['items'] = $this->model('ClothMan')->getAllBaju();

        $data['script'] =
            array("data", "dom", "scriptMix");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('katalog/clothes', $data);
        $this->view('templates/footer', $data);
    }
    public function pants()
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'pants';
        $data['dataname'] = 'celana_man';

        $data['css'] =
            array("sidebar");
        $data['items'] = $this->model('PantsMan')->getAllCelana();

        $data['script'] =
            array("data", "dom", "scriptMix");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('katalog/clothes', $data);
        $this->view('templates/footer', $data);
    }
    public function shoes()
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'shoes';
        $data['dataname'] = 'sepatu';
        $data['css'] =
            array("sidebar");
        $data['items'] = $this->model('ShoesMan')->getAllSepatu();

        $data['script'] =
            array("data", "dom", "scriptMix");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('katalog/clothes', $data);
        $this->view('templates/footer', $data);
    }

    public function getajaxclothes($id)
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'clothes';
        $data['dataname'] = 'baju_man';
        $data['css'] =
            array("sidebar");
        $data['item'] = $this->model('ClothMan')->getBajuById($id);

        $data['script'] =
            array("data", "dom");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('katalog/ajax', $data);
    }
    public function getajaxpants($id)
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'pants';
        $data['dataname'] = 'celana_man';
        $data['css'] =
            array("sidebar");
        $data['item'] = $this->model('PantsMan')->getCelanaById($id);

        $data['script'] =
            array("data", "dom");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('katalog/ajax', $data);
    }
    public function getajaxshoes($id)
    {
        $data['title'] = 'Katalog | Fashion Design';
        $data['mix_page'] = 'pants';
        $data['dataname'] = 'sepatu_man';
        $data['css'] =
            array("sidebar");
        $data['item'] = $this->model('ShoesMan')->getSepatuById($id);

        $data['script'] =
            array("data", "dom");
        // $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('katalog/ajax', $data);
    }
    public function cari()
    {
        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->model('KategoriModel')->cariKategori();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }
}
