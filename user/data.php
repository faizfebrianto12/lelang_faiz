<?php
require __DIR__.'./koneksi.php';
$get1 = mysqli_query($koneksi,"select * from tb_barang");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi,"select * from history_lelang");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi,"select * from tb_masyarakat");
$count3 = mysqli_num_rows($get3);

?>

<?php
    session_start();
    $koneksi = mysqli_connect('localhost', 'root', '','lelang_faiz');
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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <style>
        .input button{
            border: none;
            color: black;
        }

        .buttonkutai {
            background-color: white;
            color: black;
            width: 160px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid transparent;
            box-shadow: 2px 2px 2px black;
            margin-top: 20px;
        }
        .berita {
            padding-top: 10px;
            text-align: center;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
            color: Black;
        }
        .fontpantai{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
            font-weight: bold;
        }
        
        .backgroundkuta{
            margin-top:  -30px;
            margin-left: 70px;
            margin-right: 70px;
            width: 250px;
            height: 190px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundtetta{
            margin-top: -30px;
            margin-left: 30px;
            margin-right: 100px;
            width: 250px;
            height: 190px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundbromo{
            margin-top: -30px;
            margin-right: 90px;
            width: 250px;
            height: 190px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundkuta4{
            margin-top:  7px;
            margin-left: 70px;
            margin-right: 70px;
            width: 230px;
            height: 150px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundtetta5{
            margin-top: 7px;
            margin-left: 30px;
            margin-right: 100px;
            width: 230px;
            height: 150px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundbromo6{
            margin-top: 7px;
            margin-right: 90px;
            width: 230px;
            height: 150px;
            border-radius: 15px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: #fff;
        }
        .backgroundjekadah{
            margin-right: 20px;
            width: 270px;
            height: 210px;
            border-radius: 20px;
            box-shadow: -1px -1px 5px 1px black;
            background-color: transparent;
        }
        
        .gambarkuta{
            margin-left: 300px;
            margin-top: 15px;
            border-radius: 20px;
            width: 250px;
        }
        .paragrafkuta{
            padding-left: 10px; 
            color: white;
        }
        .paragraftetta{
            padding-left: 20px;
            color: white;
        }
        .textkuta{
            padding-left: 40px;
            text-align: justify;
            width: 220px;
        }
        .rata{
            display: flex;
            
        }

.button {
    background-color: rgb(0, 80, 253);
    color: white;
    width: 200px;
    text-decoration: none;
    margin-top: 20px;
    height: 30px;
    border-radius: 2px;
    border: 3px solid transparent;
    box-shadow: 2px 2px 2px white;
}
.tombol-aktif:active {
    background-color: black;
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

            

            <!-- Divider -->
            <hr class="sidebar-divider">

           
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="data.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pelelangan</span></a>
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
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
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
                    <a id="user" class="nav-link scrolito action">Hai, <i><?php echo $_SESSION['userweb']; ?></i> !</a>

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
                        <h1 class="h3 mb-0 text-gray-800">Pelelangan</h1>
                    </div><br><br><br>

                    <div class="rata">
   <div>
       <div class="backgroundkuta">
           <div>
           <img class="gambarkuta">
           </div>
           <div class="paragrafkuta textkuta">
           <h3 class="fontpantai">Barang</h3></br>
           <div class="col">
            <div class="card bg-info text-white"><h5>Total Data : <?=$count1;?></h5></div>
        </div><br>
              <div>
              <ul class="">
                <button class="input"><a href="barang.php">Tampilkan</a></button>
              </ul>
            </div>
            </div>
       </div>
    </div>

    <div>
        <div class="backgroundtetta">
            <div>
            <img class="gambarkuta">
            </div>
            <div class="paragraftetta textkuta">
            <h3 class="fontpantai">History</h3></br>
            <div class="col">
            <div class="card bg-info text-black"><h5>Total Data : <?=$count2;?></h5></div>
        </div>
               <div><br>
               <ul class="">
                <button class="input"><a href="historylelang.php">Tampilkan</a></button>
              </ul>
             </div>
             </div>
        </div>
     </div>
     <div>
        <div class="backgroundbromo">
            <div>
            <img class="gambarkuta">
            </div>
            <div class="paragrafkuta textkuta">
            <h3 class="fontpantai">Masyarakat</h3></br>
            <div class="col">
            <div class="card bg-info text-black"><h5>Total Data : <?=$count3;?></h5></div>
        </div>
               <div><br>
               <ul class="">
                <button class="input"><a href="user.php">Tampilkan</a></button>
              </ul>
             </div>
             </div>
        </div>
     </div>
     
</div><br><br>

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