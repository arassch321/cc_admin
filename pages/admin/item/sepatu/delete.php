<?php
$root = "../../../..";
require_once "$root/app/models/Sepatu.php";

$sepatu = new Sepatu();

if (isset($_GET['id'])) {
    $item['identifier'] = substr($_GET['id'], 0, 2);
    $id = substr($_GET['id'], 2, 3);
    $item['id'] = (int) $id;
    if ($sepatu->deleteSepatu($item) > 0) {
        $_SESSION['success'] = 'Berhasil menghapus data';

?>
        <script>
            location.replace("./");
        </script>
<?php
    }
}
