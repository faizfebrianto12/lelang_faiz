<?php
    session_start();
    $koneksi = mysqli_connect('localhost','root','','surat');
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

    <title>Surat || Faiz</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="style5.css" rel="stylesheet">
    
    

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
                <div class="sidebar-brand-text mx-3">Surat Faiz <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
          

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Nav Item - Pages Collapse Menu -->
      
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="data.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Surat</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
        
       

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
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SURAT FAIZ</strong></p>
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
                                    src="img/undraw_profile.svg">
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


            <div class="content">
        <section class="section">
            <div class="box">
                <div class="box-container">
                    <h3>Mail</h3>
                    <i class="fa-regular fa-user"></i>
                </div>
            </div>

            <div class="section-content">
            <div class="box-content pasien">
            <table border="1">
            <thead>
                <tr align="center" style="background-color:#16a085;">
                    <td>Id Mail</td>
                    <td>Incoming At</td>
                    <td>Mail Code</td>
                    <td>Mail Date</td>
                    <td>Mail From</td>
                    <td>Mail To</td>
                    <td>Mail Subject</td>
                    <td>Description</td>
                    <td>File Upload</td>
                    <td>Mail TypeId</td>
                    <td>User Id</td>
                </tr>
            </thead>
            <tbody>
          <?php
          require __DIR__. '/koneksi.php';
          $sql = mysqli_query($koneksi, "SELECT * FROM mail");
          while ($row = mysqli_fetch_assoc($sql)) {
              ?>
                    <tr>
                        <td>
                            <?php echo $row['id_mail'] ?>
                        </td>
                        <td>
                            <?php echo $row['incoming_at'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_code'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_date'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_from'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_to'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_subject'] ?>
                        </td>
                        <td>
                            <?php echo $row['description'] ?>
                        </td>
                        <td>
                            <?php echo $row['file_upload'] ?>
                        </td>
                        <td>
                            <?php echo $row['mail_typeid'] ?>
                        </td>
                        <td>
                            <?php echo $row['userid'] ?>
                        </td>
                    </tr>
            </tbody>
            <?php

          }
         ?>
        </table>
        <br>
        <center>
          
        </center>
        <button class="b3"><a href="data.php">Kembali</a></button>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>