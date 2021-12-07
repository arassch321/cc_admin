<?php
$data['title'] = "Katalog";

$data['css'] =
    array(
        "sidebar",
        "paduan-pakaian",
        "katalog"
    );
$data['script'] =
    array("data", "dom", "scriptMix");
$data['mix_page'] = 'clothes';
$data['dataname'] = 'baju_man';

$root = "../..";

require_once "$root/app/views/templates/header.php";
require_once "$root/app/views/templates/sidebar.php";
require_once "$root/app/models/ClothMan.php";

$cloth_man = new ClothMan();
$data['items'] = $cloth_man->getAllBaju();

?>

<style>
    .item-container {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        gap: 20px;
        padding: 30px;
    }

    .item {
        text-align: center;
        width: 210px;
    }

    .item img {
        width: 100%;
    }

    .item h3 {
        max-height: 50px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;

    }

    .item button {
        padding: 10px;
    }
</style>
<div class="item-container">
    <?php
    foreach ($data['items'] as $e) {
    ?>
        <div class="item card">
            <?php
            echo cl_image_tag('/fashion-design/' . $e['gambar']);
            ?>
            <h3><?= $e['nama'] ?></h3>
            <p class="price">Rp <?= number_format($e['harga'], 2, ',', '.') ?></p>
            <p> <button data-id="<?= $e['id'] ?>" data-item="<?= $data['mix_page'] ?>" class="btn-add ">+</button>
            </p>
        </div>
    <?php
    }
    ?>
</div>
<?php
require_once "$root/app/views/templates/footer.php";
