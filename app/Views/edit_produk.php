<?= $this->extend('layout/headerfooter'); ?>

<?= $this->section('content'); ?>
<section class="tambahproduk" id="tambahproduk">
    <div class="row">
        <form action="<?= site_url('update_produk/' . $katalog['id']); ?>" method="post">
            <div class="form-card">
                <input name="namaproduk" type="text" placeholder="Nama Produk" value="<?= $katalog['namaproduk']; ?>">
                <textarea name="bahan" id="bahan" cols="30" rows="10" placeholder="Deskripsi"><?= $katalog['bahan']; ?></textarea>
                <input name="gambar" type="text" placeholder="Gambar" value="<?= $katalog['gambar']; ?>">
                <input name="harga" type="text" placeholder="Harga" value="<?= $katalog['harga']; ?>">
                <button type="submit">Update</button>
            </div>
        </form>

    </div>
</section>
<?= $this->endSection(); ?>