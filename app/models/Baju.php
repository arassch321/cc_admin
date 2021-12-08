<?php
$loc = dirname(__FILE__) . "/../..";
require_once "$loc/vendor/autoload.php";


require_once "$loc/app/config/config.php";
require_once "$loc/app/config/Database.php";


class Baju
{

    private $table1 = 'baju_man';
    private $table2 = 'baju_woman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBaju()
    {
        $this->db->query("SELECT * FROM (
        SELECT id_baju_man AS id, nama, harga,'laki-laki' AS 'gender'
          FROM " . $this->table1 . ") AS a
        UNION 
        SELECT * FROM (
        SELECT id_baju_woman AS id, nama, harga,'perempuan' AS 'gender'
          FROM " . $this->table2 . ") AS b
        ");
        return $this->db->resultSet();
    }

    public function getBajuById($data)
    {
        if ($data['identifier'] == 'BM') {
            $table = $this->table1;
            $col_id = 'id_baju_man';
        } else {
            $table = $this->table2;
            $col_id = 'id_baju_woman';
        }
        $this->db->query('SELECT *, ' . $col_id . ' as id FROM ' . $table . ' WHERE ' . $col_id . '=:id');
        $this->db->bind('id', $data['id']);
        return $this->db->single();
    }

    public function tambahBaju($data)
    {
        if ($data['gender'] == 'laki-laki') {
            $table = $this->table1;
        } else {
            $table = $this->table2;
        }
        $tanggal = md5(date('Y-m-d h:i:s'));
        $foto_nama_new = $tanggal;
        $root = dirname(__DIR__, 2);

        $path = $root . '/pages/uploads/' . $foto_nama_new;
        if ($data['img_type'] == "image/jpg" || $data['img_type'] == 'image/jpeg' || $data['img_type'] == 'image/png' || $data['img_type'] == 'image/webp') //check file extension
        {
            if (!file_exists($path)) //check file not exist in your upload folder path
            {
                if ($data['img_size'] < 5000000) //check file size 5MB
                {
                    \Cloudinary\Uploader::upload($data['img_name'], array("folder" => "fashion-design/", "public_id" => $foto_nama_new));
                } else {
                    $errorMsg = "Your File To large Please Upload lower than 5MB Size"; //error message file size not large than 5MB
                    throw new Exception($errorMsg);
                }
            } else {
                $errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
            }
        } else {
            throw new Exception('Upload JPG , JPEG , PNG and WEBP File Format.....CHECK FILE EXTENSION');
        }
        $query = "INSERT INTO " . $table . " (nama, harga, gambar, link) VALUES(:nama, :harga, :gambar, :link)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $foto_nama_new);
        $this->db->bind('link', $data['link']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function tambahBajuEZ($data)
    {
        if ($data['gender'] == 'laki-laki') {
            $table = $this->table1;
        } else {
            $table = $this->table2;
        }
        $query = "INSERT INTO " . $table . " (nama, harga, gambar, link) VALUES(:nama, :harga, :gambar, :link)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('link', $data['link']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateDataBaju($data)
    {
        $bajoeh = $this->getBajuById($data);
        if ($data['gender'] == "laki-laki") {
            $table = $this->table1;
            $table_ = $this->table2;
            $col_id = 'id_baju_man';
            $col_id_x = 'id_baju_woman';
        } else {
            $table = $this->table2;
            $table_ = $this->table1;
            $col_id = 'id_baju_woman';
            $col_id_x = 'id_baju_man';
        }
        if (isset($data['img_file'])) {
            # code... Kalo ganti gambar
            $tanggal = md5(date('Y-m-d h:i:s'));
            $foto_nama_new = $tanggal;
            $root = dirname(__DIR__, 2);
            $path = $root . '/pages/uploads/' . $foto_nama_new;
            $directory = $root . '/pages/uploads/';
            if ($data['img_type'] == "image/jpg" || $data['img_type'] == 'image/jpeg' || $data['img_type'] == 'image/png' || $data['img_type'] == 'image/webp') //check file extension
            {
                if (!file_exists($path)) //check file not exist in your upload folder path
                {
                    if ($data['img_size'] < 5000000) //check file size 5MB
                    {
                        if (file_exists($directory . $bajoeh['gambar'])) //check file not exist in your upload folder path
                        {
                            \Cloudinary\Uploader::destroy('fashion-design/' . $bajoeh['gambar']);
                        }
                        \Cloudinary\Uploader::upload($data['img_name'], array("folder" => "fashion-design/", "public_id" => $foto_nama_new));
                    } else {
                        $errorMsg = "Your File To large Please Upload lower than 5MB Size"; //error message file size not large than 5MB
                        throw new Exception($errorMsg);
                    }
                } else {
                    $errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
                }
            } else {
                throw new Exception('Upload JPG , JPEG , PNG and WEBP File Format.....CHECK FILE EXTENSION');
            }

            if ($data['gender'] == $data['gender_old']) {
                $query = "UPDATE " . $table . " SET nama=:nama, harga=:harga, gambar=:gambar, link=:link WHERE " . $col_id . "=:id";

                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $this->db->bind('nama', $data['nama']);
                $this->db->bind('harga', $data['harga']);
                $this->db->bind('gambar', $foto_nama_new);
                $this->db->bind('link', $data['link']);
                $this->db->execute();
            } else {
                $this->tambahBaju($data);
                $this->db->query('DELETE FROM ' . $table_ . ' WHERE ' . $col_id_x . '=:id');
                $this->db->bind('id', $data['id']);
                $this->db->execute();
            }
            return $this->db->rowCount();
        } else {
            # code... kalo gak
            if ($data['gender'] == $data['gender_old']) {
                $query = "UPDATE " . $table . " SET nama=:nama, harga=:harga, link=:link WHERE " . $col_id . "=:id";

                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $this->db->bind('nama', $data['nama']);
                $this->db->bind('harga', $data['harga']);
                $this->db->bind('link', $data['link']);
                $this->db->execute();
            } else {
                $this->tambahBajuEZ($data);
                $this->db->query('DELETE FROM ' . $table_ . ' WHERE ' . $col_id_x . '=:id');
                $this->db->bind('id', $data['id']);
                $this->db->execute();
            }
            return $this->db->rowCount();
        }
    }

    public function deleteBaju($data)
    {
        $bajoeh = $this->getBajuById($data);

        if ($data['identifier'] == 'BM') {
            $table = $this->table1;
            $col_id = 'id_baju_man';
        } else {
            $table = $this->table2;
            $col_id = 'id_baju_woman';
        }
        $root = dirname(__DIR__, 2);
        $directory = $root . '/pages/uploads/';

        \Cloudinary\Uploader::destroy('fashion-design/' . $bajoeh['gambar']);

        $this->db->query('DELETE FROM ' . $table . ' WHERE ' . $col_id . '=:id');
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
