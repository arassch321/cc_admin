<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

class PantsMan
{

    private $table = 'celana_man';
    private $table2 = 'celana_woman';
    private $id = 'id_celana_man';
    private $id2 = 'id_celana_woman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCelana()
    {
        if ($_SESSION['gender_user'] == 'p') {
            $this->table = $this->table2;
            $this->id = $this->id2;
        };

        $this->db->query("SELECT * ," . $this->id . " as id FROM " . $this->table . " ");
        return $this->db->resultSet();
    }

    public function getCelanaById($id)
    {
        if ($_SESSION['gender_user'] == 'p') {
            $this->table = $this->table2;
            $this->id = $this->id2;
        };

        $this->db->query('SELECT * ,' . $this->id . ' as id FROM ' . $this->table . ' WHERE ' . $this->id . '=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
