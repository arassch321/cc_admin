<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}

require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

class Pakaian
{

    private $tableMan = array(
        "baju_man",
        "celana_man",
        "sepatu_man"
    );
    private $tableWoman = array(
        "baju_woman",
        "celana_woman",
        "sepatu_woman"
    );

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPakaianMan()
    {
        $this->db->query("SELECT * FROM " . $this->tableMan[0] . "
        UNION 
        SELECT * FROM " . $this->tableMan[1] . "
        UNION 
        SELECT * FROM " . $this->tableMan[2] . "
        ");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getAllPakaianWoman()
    {
        $this->db->query("SELECT * FROM " . $this->tableWoman[0] . "
        UNION 
        SELECT * FROM " . $this->tableWoman[1] . "
        UNION 
        SELECT * FROM " . $this->tableWoman[2] . "
        ");
        $this->db->execute();
        return $this->db->rowCount();
    }
}
class User
{

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsersCount()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
