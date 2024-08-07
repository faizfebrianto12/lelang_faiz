<?php
    session_start();
    $koneksi = mysqli_connect('localhost','root','','lelang_faiz');
    if (empty($_SESSION['username'])) {
        include './koneksi.php';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lelang || Faiz</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../style5.css" rel="stylesheet">
    <link rel="stylesheet" href="../style6.css">
    <link rel="stylesheet" href="styleform.css">
    <style>
        .j {
            width: 100%;
        }

        .input {
            width: 100%;
        }
    </style>

</head>

<body id="page-top">



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Lelang Faiz <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA LELANG</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Inti</h6>
                        <a class="collapse-item" href="../lelang.php">Lelang</a>
                        <a class="collapse-item" href="../historylelang.php">History Lelang</a>
                        <a class="collapse-item" href="../barang.php">Barang</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DATA AKUN</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data:</h6>
                        <a class="collapse-item" href="../masyarakat.php">Masyarakat</a>
                        <a class="collapse-item" href="../petugas.php">Petugas</a>
                        <a class="collapse-item" href="../level.php">Level</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="../img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>LELANG FAIZ</strong></p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro"></a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <a id="user" class="nav-link scrolito action">Admin, <i><?php echo $_SESSION['userweb']; ?></i> !</a>


                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Website || Faiz</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>     
                    </div>



                    <div class="row">

                       

            </div>
            <!-- End of Main Content -->


            <div class="pagetitle">
  <h1>Lelang</h1><br>
 <h5>Update Data</h5>

  <h5><a href="../lelang.php">Kembali</a><h5>
 
</div><!-- End Page Title -->
    <center>
        <div class="add">
            <div class="container">
                <div class="box-kamar">
                <?php
    include __DIR__. '/koneksi.php';
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_lelang WHERE id_lelang = '$id'");
    if (mysqli_num_rows($sql)==0) {
        header("location:../lelang.php");
    } else {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
                <form class="" action="./update_proses.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id_lelang']; ?>">
                    <table border="1" cellpadding="4">
                        <tr>
                            <td>Id Lelang</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="form-input" name="id_lelang" value="<?php echo $row['id_lelang']; ?>">
                            </td>
                        </tr>
                       
                        <tr>
                            <td>Tanggal Lelang</td>
                            <td align="center">:</td>
                            <td>
                                <input type="date" class="form-input" name="tgl_lelang" value="<?php echo $row['tgl_lelang']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Akhir</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="form-input" name="harga_akhir" value="<?php echo $row['harga_akhir']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Id Barang</td>
                            <td align="center">:</td>
                            <td>
                            <select class="input" name="id_barang" value="<?php echo $row['id_barang']; ?>">

<?php
require __DIR__. './koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_barang");
while ($row = mysqli_fetch_assoc($sql)) {
?>
<option><?php echo $row['id_barang'] ?></option>
<?php
}
?>
</select>
                            </td>
                        </tr>
                        <tr>
                            <td>Id User</td>
                            <td align="center">:</td>
                            <td>
                            <select class="input" name="id_user" value="<?php echo $row['id_user']; ?>">

<?php
require __DIR__. './koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat");
while ($row = mysqli_fetch_assoc($sql)) {
?>
<option><?php echo $row['id_user'] ?></option>
<?php
}
?>
</select>
                            </td>
                        </tr>
                        <tr>
                            <td>Id Petugas</td>
                            <td align="center">:</td>
                            <td>
                            <select class="input" name="id_petugas" value="<?php echo $row['id_petugas']; ?>">

<?php
require __DIR__. './koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_petugas");
while ($row = mysqli_fetch_assoc($sql)) {
?>
<option><?php echo $row['id_petugas'] ?></option>
<?php
}
?>
</select>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td align="center">:</td>
                            <td>
                            <select name="status" id="" class="j" value="<?php echo $row['status']; ?>">
                            <option>Pilih Status</option>
                            <option value="dibuka" class="j">Dibuka</option>
                            <option value="ditutup" class="j">Ditutup</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" name="submit" value="Input">
                                <input type="reset" name="reset" value="Clear">
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
    </center>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; I Gede Faiz Febrianto 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>