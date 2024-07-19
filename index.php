<?php
    session_start();
    $koneksi = mysqli_connect('localhost', 'root', '', 'lelang_faiz');
    if (empty($_SESSION['username'])) {
        include './koneksi.php';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang || Rahyan</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="../admin/css/fontawesome/css/all.min.css">
</head>

<body>
    <nav>
        <div class="logo">
            <i class="fa-sharp fa-solid fa-bolt"></i>
            <h1>Lelang Faiz</h1>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#hubungi">Hubungi Kami</a></li>
                <li><a href="login.php">Masuk</a></li>
                <li><a href="loginadmin.php">Petugas</a></li>
            </ul>
        </div>
    </nav>

    <div class="top-wrapper">
        <div class="top-container">
            <div class="top-content">
                <h1>Lelang Faiz</h1>
                <p>Pastinya Aman Dan Terpercaya</p>
            </div>
            <img src="Auction.gif" width="40%" alt="">
        </div>
    </div>

    <section id="tentang">
    <div class="about-wrapper">
        <div class="about-container">
            <div class="about-heading">
                <div class="about-heading-text">
                    <h1>Tentang Kami</h1>
                    <p><span>Lelang Faiz</span> adalah Website Lelang online yang bisa anda gunakan untuk menjual barang anda dengan online yang pastinya aman dan terpercaya.</p>
                </div>
            </div>
        </div>
    </div>
    </section>

   <div class="order-wrapper">
        <div class="order-container">
            <div class="order-heading">
                <h1>Registrasi disini!</h1>
            </div>
            <div class="order-form">
            <form action="./masyarakat_proses.php" method="post">
                    <div class="box-order">
                        <div class="input-box">
                            <span class="details">Id User</span>
                            <input class="input" name="id_user" type="text">
                        </div>
                        <div class="input-box">
                            <span class="details">Nama Lengkap</span>
                            <input class="input" name="nama_lengkap" type="text">
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input class="input" name="username" type="text">
                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input class="input" name="password" type="text">
                        </div>
                        <div class="input-box">
                            <span class="details">Nomor Telepon</span>
                            <input class="input" name="telp" type="text">
                        </div>
                        <input type="submit" value="Kirim" class="order-btn" name="konsul">
                    </div>
            </form>
            </div>
        </div>
    

        <section id="hubungi">
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>Lelang Faiz</h2>
                <p>Solusi Untuk Menjual Barang Anda!</p>
            </div>
            <div class="footer-center">
                <h2>Menu</h2>
                <ul>
                    <li><a href="obat.html">Tentang Kami</a></li>
                    <li><a href="kontak.html">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h2>Hubungi Kami</h2>
                <ul>
                    <li>
                        <div class="fr-list">
                        <a href="tel:082152911426">
                        <p><i class="fa fa-solid fa-phone"></i>
                        082152911426</p>
                        </a>
                        </div>
                    </li>
                    <li>
                        <div class="fr-list">
                        <a href="mailto:golistrik@gmail.com">
                        <p><i class="fa fa-solid fa-envelope"></i>
                        lelangfaiz@gmail.com</p>
                        </a>
                        </div>
                    </li>
                    <li>
                        <div class="fr-list">
                        <a href="https://goo.gl/maps/cBWZEKyBcafUdPW68">
                        <p><i class="fa fa-sharp fa-solid fa-location-dot"></i>
                            Jl.Mangadel No.28, Makassar</p>
                        </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </section>
        <div class="footer-end">
        <span>Copyright &copy; I Gede Faiz Febrianto 2023</span>
        </div>
    </footer>
</body>

</html>

<!-- #3670D3-->