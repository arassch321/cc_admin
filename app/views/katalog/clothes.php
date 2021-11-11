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
        border-radius: 15px;
        border: solid 1px black;
    }

    .item img {
        width: 100%;
    }

    .item button {
        padding: 10px;
    }
</style>
<div class="item-container">
    <?php
    foreach ($data['items'] as $e) {
    ?>
        <div class="item">
            <img src="<?= base_url; ?>/uploads/<?= $e['gambar'] ?>.jpg" alt="">
            <button data-id="<?= $e['id_' . $data['dataname']] ?>" data-item="<?= $data['mix_page'] ?>" class="btn-add ">+</button>
        </div>
    <?php
    }
    ?>
</div>

<script>

</script>