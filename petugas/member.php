<?php
    session_start();
    $koneksi = mysqli_connect('localhost','root','','laundry');
    if (empty($_SESSION['username'])) {
        include './koneksi.php';
    }
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Laundry || Erikha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="style4.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(profil.jfif);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	              <a href="index.php">About</a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="member.php">Member</a>
                </li>
                <li>
                    <a href="outlet.php">Outlet</a>
                </li>
                <li>
                    <a href="paket.php">Paket</a>
                </li>
              </ul>
	          </li>
              <li class="">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data Transaksi</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="detail.php">Detail Transaksi</a>
                </li>
                <li>
                    <a href="transaksi.php">Transaksi</a>
                </li>
	            </ul>
	          </li>
            <li>
	              <a href="user.php">Data User</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Surat | Erikha <i class="icon-heart" aria-hidden="true"></i>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
<a id="user">Admin, <i><?php echo $_SESSION['userweb']?></i>!</a>
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

          
          </div>
        </nav>

        <main id="main" class="main">

<div class="pagetitle">
  <h1> Member</h1><br>
  <h4><a href="member/insert.php">Tambah</a><h4>
 
</div><!-- End Page Title -->

     
        <table border="1" cellpadding="4">
            <tr bgcolor="blue"  class="text">
                <th>Id Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
    <?php
    include "koneksi.php";
    $query =mysqli_query($koneksi,"SELECT * FROM tb_member");
    while($result =mysqli_fetch_array($query)){
        ?>
        <tr bgcolor="transparent" class="text1">
            <td><?php echo $result['id_member']?></td>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['alamat']?></td>
            <td><?php echo $result['jenis_kelamin']?></td>
            <td><?php echo $result['tlp']?></td>
            <td>
            <button class="button"><a href="member/proses-delete.php?id=<?php echo $result['id_member']?>">Delete</a></button>
            <button class="button"><a href="member/update.php?id=<?php echo $result['id_member']?>">Update</a></button>
            <button class="button"><a href="member/cetak.php?id=<?php echo $result['id_member']?>">Cetak</a></button>
    </td>
       
        </tr>
        <?php
    }
        ?>
        </table>
        <br>
            </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>