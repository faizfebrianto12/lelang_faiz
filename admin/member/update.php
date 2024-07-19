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
    <!-- css inti -->
		<link rel="stylesheet" href="../css/style.css">
    <!-- css sendiri -->
        <link rel="stylesheet" href="../style3.css">
        <link rel="stylesheet" href="../../styleform.css">
        <style>
            .input {
                width: 100%;
            }

            .j {
                width: 100%;
            }
        </style>
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

           
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

          
          </div>
        </nav>
        <main id="main" class="main">

<div class="pagetitle">
  <h1>Data Member</h1>
  <h2><a href="../paket.php">Kembali</a><h2>
 
</div><!-- End Page Title -->


                <h4>Update Data Paket</h4></br>
    <center>
        <div class="add">
            <div class="container">
                <div class="box-kamar">
                <?php
    include __DIR__. '/koneksi.php';
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_paket WHERE id_paket = '$id'");
    if (mysqli_num_rows($sql)==0) {
        header("location:../paket.php");
    } else {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
                <form class="" action="./update_proses.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id_paket']; ?>">
                    <table border="1" cellpadding="4">
                        <tr>
                            <td>Id Paket</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="form-input" name="id_paket" value="<?php echo $row['id_paket']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td align="center">:</td>
                            <td>
                            <select name="jenis" id="" class="j" value="<?php echo $row['jenis']; ?>">
                            <option>Pilih Jenis</option>
                            <option value="kiloan" class="j">Kiloan</option>
                            <option value="selimut" class="j">Selimut</option>
                            <option value="bed_cover" class="j">Bed Cover</option>
                            <option value="kaos" class="j">Kaos</option>
                            <option value="lain" class="j">Lain</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Paket</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="form-input" name="nama_paket" value="<?php echo $row['nama_paket']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="form-input" name="harga" value="<?php echo $row['harga']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Id Outlet</td>
                            <td align="center">:</td>
                            <td>
                            <select class="input" name="id_outlet">

<?php
require __DIR__. './koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM tb_outlet");
while ($row = mysqli_fetch_assoc($sql)) {
?>
<option><?php echo $row['id_outlet'] ?></option>
<?php
}
?>
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
    </section>
        

    <script src="../js/popper.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>