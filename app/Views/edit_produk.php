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

    <style>
        :root {
            --primary: #0bbd67;
            --secondary: #f3dc1e;
            --ketiga: #f49a1f;
            --bg: #ffffff;
            --abu: #f7f9f6;
            --bahan: #8d8d8d;
            --abu2: #ababab;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: var(--bg);
            /* min-height: 2000px; */
        }

        /* navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            background-color: white;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .navbar .navbar-logo,
        .back {
            font-size: 25px;
            font-weight: 600;
            color: var(--primary);
        }

        .navbar .navbar-nav a {
            color: black;
            display: inline-block;
            margin: 0 2rem;
            font-size: 16px;
        }

        .navbar .navbar-nav a:hover {
            color: var(--primary);
            font-weight: 600;
        }

        .navbar .navbar-extra a {
            color: black;
            margin: 0 1rem;
        }

        .navbar .navbar-extra i {
            font-size: 30px;
        }

        .about .row {
            flex-wrap: wrap;
        }

        .about .row .content {
            object-position: center;
        }

        .navbar .navbar-extra a:hover {
            color: var(--primary);
        }

        #menu {
            display: none;
        }

        /* edit */
        .wrapper {
            padding: 10%;
            background-color: var(--primary);

        }

        .wrapper .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
            margin-bottom: 1rem;
            justify-content: center;
            gap: 4rem;
        }

        .wrapper .row .inputbox {
            border: 1px solid var(--bg);
            width: 450px;
            height: 430px;
            border-radius: 10px;
            padding: 25px;
            background: var(--bg);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .wrapper .row .inputbox h1 {
            font-weight: 500;
            color: var(--primary);
            text-align: center;
            margin-bottom: 1.2rem;
        }

        .wrapper .row .inputbox input {
            border: 1px solid var(--primary);
            border-radius: 5px;
            height: 35px;
            width: 100%;
            margin-bottom: 15px;
            font-family: "Poppins", sans-serif;
            color: black;
            font-weight: 400;
            padding-left: 15px;
        }

        .wrapper .row .inputbox textarea {
            border: 1px solid var(--primary);
            border-radius: 5px;
            height: 100px;
            width: 100%;
            margin-bottom: 15px;
            font-family: "Poppins", sans-serif;
            color: black;
            font-weight: 400;
            padding-left: 15px;
            padding-top: 10px;
        }

        .wrapper .row .inputbox button {
            height: 35px;
            width: 150px;
            border-radius: 5px;
            background: var(--primary);
            font-family: "Poppins", sans-serif;
            color: var(--bg);
            font-weight: 500;
            float: right;
            cursor: pointer;
        }

        /* footer */
        footer {
            display: flex;
            border-top: 1px solid var(--primary);
            background-color: var(--bg);
            padding: 1rem 0;
            justify-content: space-around;
        }

        footer .credit h3 {
            font-weight: 400;

        }

        footer .social {
            padding: 1rem 0;
        }

        footer .social a {
            color: black;
            margin: 1rem;
        }

        footer .social a:hover {
            color: var(--primary);
        }
    </style>

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

    <!-- Edit Start -->
    <div class="wrapper">
        <div class="row">
            <form action="<?= site_url('update_produk/' . $katalog['id']); ?>" method="post">
                <div class="inputbox">
                    <h1>Edit Produk</h1>
                    <input type="text" name="namaproduk" placeholder="Nama Produk" value="<?= $katalog['namaproduk']; ?>">
                    <textarea name="bahan" id="bahan" cols="30" rows="10" placeholder="Deskripsi"><?= $katalog['bahan']; ?></textarea>
                    <input name="gambar" type="text" placeholder="Gambar" value="<?= $katalog['gambar']; ?>">
                    <input name="harga" type="text" placeholder="Harga" value="<?= $katalog['harga']; ?>">
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit End -->


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