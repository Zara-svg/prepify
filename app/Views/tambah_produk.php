<?= $this->extend('layout/headerfooter'); ?>
<?= $this->section('content'); ?>

<section class="tambahproduk" id="tambahproduk">
    <div class="row">
        <form action="<?= site_url('katalog_store'); ?>" method="post">
            <div class="form-card">
                <input name="gambar" type="text" placeholder="Gambar">
                <input name="namaproduk" type="text" placeholder="Nama Produk">
                <textarea name="bahan" id="bahan" cols="30" rows="10" placeholder="Deskripsi"></textarea>
                <input name="harga" type="text" placeholder="Harga">
                <button type="submit">Tambah</button>
            </div>
        </form>

    </div>
</section>

<?= $this->endSection(); ?>