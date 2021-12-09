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
}
