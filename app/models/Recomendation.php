<?php
$loc = dirname(__FILE__) . "/../..";
require_once "$loc/app/config/config.php";
require_once "$loc/app/config/Database.php";

class Recomendation
{

    // private $table = 'celana_man';
    private $db;
    private $baju = 'baju_man';
    private $baju2 = 'baju_woman';
    private $idbaju = 'id_baju_man';
    private $idbaju2 = 'id_baju_woman';

    private $celana = 'celana_man';
    private $celana2 = 'celana_woman';
    private $idcelana = 'id_celana_man';
    private $idcelana2 = 'id_celana_woman';

    private $sepatu = 'sepatu_man';
    private $sepatu2 = 'sepatu_woman';
    private $idsepatu = 'id_sepatu';
    private $idsepatu2 = 'id_sepatu_woman';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRecomendation()
    {
        if ($_SESSION['gender_user'] == 'p') {
            $this->baju = $this->baju2;
            $this->celana = $this->celana2;
            $this->sepatu = $this->sepatu2;
            $this->idbaju = $this->idbaju2;
            $this->idcelana = $this->idcelana2;
            $this->idsepatu = $this->idsepatu2;
        }

        $this->db->query("SELECT * from (
SELECT " . $this->idbaju . " AS id, nama, gambar,'clothes' as Source
  FROM " . $this->baju . "
  ORDER BY RAND()
  LIMIT 4) AS a
UNION 
SELECT * from (
SELECT " . $this->idcelana . " AS id, nama, gambar,'pants' as Source
  FROM  " . $this->celana . "
   ORDER BY RAND()
  LIMIT 4) AS b
UNION 
SELECT * from (
SELECT " . $this->idsepatu . " AS id, nama, gambar, 'shoes' as Source
  FROM  " . $this->sepatu . "
   ORDER BY RAND()
  LIMIT 4) AS c
  ORDER BY RAND()");
        return $this->db->resultSet();
    }

    public function getCelanaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_celana_man=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $query = "INSERT INTO buku (judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES(:judul, :penerbit, :pengarang, :tahun, :kategori_id, :harga)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBuku($data)
    {
        $query = "UPDATE buku SET judul=:judul, penerbit=:penerbit, pengarang=:pengarang, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBuku($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBuku()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
