<?= $this->extend('layout/template'); ?>

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
                        <i data-feather="star" class="star-full"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <a href=""><i class='bx bxs-basket' style='color:#0bbd67'></i></a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <a href="/tambah_produk" class="icontp"><i class='bx bx-plus-circle' style='color:#0bbd67'></i></a>
</section>

<!-- katalog end -->



<?= $this->endSection(); ?>