<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}

require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

class ShoesMan
{

    private $table = 'sepatu_man';
    private $table2 = 'sepatu_woman';
    private $id = 'id_sepatu';
    private $id2 = 'id_sepatu_woman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSepatu()
    {
        if ($_SESSION['gender_user'] == 'p') {
            $this->table = $this->table2;
            $this->id = $this->id2;
        };

        $this->db->query("SELECT *, " . $this->id . " as id FROM " . $this->table . " ");
        return $this->db->resultSet();
    }
    public function getSepatuById($id)
    {
        if ($_SESSION['gender_user'] == 'p') {
            $this->table = $this->table2;
            $this->id = $this->id2;
        };

        $this->db->query('SELECT *, ' . $this->id . ' as id FROM ' . $this->table . ' WHERE ' . $this->id . '=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
