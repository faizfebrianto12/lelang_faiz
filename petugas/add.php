
<?php
    session_start();
    $koneksi = mysqli_connect('localhost', 'root', '', 'surat');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Masuk || Admin</title>
    <link rel="stylesheet" href="pengguna8.css">
    <link rel="stylesheet" href="../../css/fontawesome/css/all.min.css">
</head>
<body>
    <aside>
        <nav>
            <div class="container">
                <div class="logo">
                    <i class="fa-solid fa-inbox"></i>
                    <h1>Letter</h1>
                </div>
                <ul>
                    <li><a href="../index.php">Dashboard</a></li>
                    <li><a href="../pengguna.php">Pengguna</a></li>
                    <li><a href="../suratm.php" class="active">Surat Masuk</a></li>
                    <li><a href="../suratk.php">Surat Keluar</a></li>
                </ul>
            </div>
        </nav>
    </aside>
    
    <!-- content -->
    <div class="content">
        <section class="section">
            <div class="box">
                <div class="box-container">
                <ul>
                    <li class="dropdown">
                        <a id="user">Hai, <i><?php echo $_SESSION['userweb']; ?></i> !</a>
                        <div class="dropdown-content">
                            <a id="userdrop"><i><?php echo $_SESSION['userweb']; ?></i></a>
                            <a href="../login.php" id="nav">Keluar <i class="fa-solid fa-right-from-bracket"></i></a>
                        </div>
                    </li>
                </ul>
                </div>
            </div>

            <p class="insert"><i class="fa-solid fa-chevron-left"></i><a href="../suratm.php">Kembali</a></p>
            <div class="section-content">
    <center>
        <div class="add">
            <div class="container">
                <div class="box-kamar">
                <form class="" action="./addproses.php" method="post">
                    <table border="1">
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td align="center">:</td>
                            <td>
                                <input type="date" class="kamar-input" name="mail_date" placeholder="yyyy-mm-dd">
                            </td>
                        </tr>
                        <tr>
                            <td>Kode Surat</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="kamar-input" name="mail_code">
                            </td>
                        </tr>
                        <tr>
                            <td>Pengirim</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="kamar-input" name="mail_from">
                            </td>
                        </tr>
                        <tr>
                            <td>Subjek</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="kamar-input" name="mail_subject">
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="kamar-input" name="description">
                            </td>
                        </tr>
                        <tr>
                            <td>Tipe Surat</td>
                            <td align="center">:</td>
                            <td>
                            <select class="kamar-input" name="mail_typeid">
                
                <?php
          require __DIR__. '../../../koneksi.php';
          $sql = mysqli_query($koneksi, "SELECT * FROM mail_type WHERE id = 1");
          while ($row = mysqli_fetch_assoc($sql)) {
              ?>
                <option><?php echo $row['id'] ?></option>
                <?php
        
          }
         ?>
                </select>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>Tipe User (Otomatis)</td>
                            <td align="center">:</td>
                            <td>
                                <input type="text" class="kamar-input" name="userid" value="2">
                            </td>
                        </tr>
                        <tr>
                            <td>File</td>
                            <td align="center">:</td>
                            <td>
                                <input type="file" class="kamar-input" name="file_upload">
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
        </div>
    </center>
        </div>
        <p class="s">Copyright © Muhammad Rahyan Noorfauzan</p>
    </section>
    </div>
</body>
</html>