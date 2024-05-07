<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <a href="<?= base_url() ?>" class="navbar-logo">Prepify.id</a>

        <div class="navbar-nav">
            <a href="<?= base_url() ?>">Beranda</a>
            <a href="<?= base_url('katalog') ?>">Katalog</a>
            <a href="<?= base_url('ulasan') ?>">Ulasan</a>
            <a href=""></a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="shopping-cart-button"><i class='bx bxs-basket'></i></a>
            <a href="#" id="user"><i class='bx bx-user-circle'></i></a>
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- navbar end -->

    <?= $this->renderSection('content'); ?>


    <!-- Footer start -->
    <footer>
        <a href="<?= base_url() ?>" class="back">Prepify.id</a>
        <div class="social">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
        </div>
        <!-- <div class="link">
            <a href="#">Instagram</a>
            <a href="#">WhatsApp</a>
            <a href="#">Twitter</a>
        </div> -->
        <div class="credit">
            <h3>Cook Your Own Meal!</h3>
            <p>Created by <a href="">Nurkhalifah Azzahra</a>. | &copy; 2024</p>
        </div>
    </footer>
    <!-- Footer end -->
    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>