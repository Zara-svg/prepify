<?= $this->extend('layout/headerfooter'); ?>

<?= $this->section('content'); ?>

<!-- katalog start -->
<section class="header" id="header">
    <h2>Menu Hari Ini</h2>
    <div class="search">
        <label for="search-box"><i data-feather="search"></i></label>
        <input type="search" id="search-box" placeholder="Mau makan apa?">
    </div>

</section>

<section class="produk" id="produk">
    <div class="row">
        <?php foreach ($katalog as $key => $post) : ?>
            <div class="produk-card">
                <img src="/img/<?php echo $post['gambar'] ?>" alt="ayam kecap" class="produk-card-img">
                <h3 class="produk-card-title"><?php echo $post['namaproduk'] ?></h3>
                <p class="produk-card-bahan"><?php echo $post['bahan'] ?></p>
                <h4 class="produk-card-harga"><?php echo $post['harga'] ?></h4>
                <div class="produk-icon">
                    <div class="star">
                        <i class="stars" class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <a href=""><i class='bx bxs-basket' style='color:#0bbd67'></i></a>
                    <a href="<?= site_url('edit_produk/' . $post['id']) ?>"> <i class='bx bxs-edit-alt' style='color:#0bbd67'></i></a>
                    <a href="<?= site_url('delete_produk/' . $post['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?'); ">
                    <i class='bx bx-trash' style='color:#0bbd67'></i>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <a href="/tambah_produk" class="icontp"><i class='bx bx-plus-circle' style='color:#0bbd67'></i></a>
</section>
<!-- katalog end -->



<?= $this->endSection(); ?>