<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || SURAT FAIZ</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .pass {
            margin-top: -14px;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title">

                </div>
            </div>

            <form method="post" class="form">
                <label for="username" style="padding-top: 13px">&nbsp;
                Username
                </label>
                <input id="username" class="form-content" type="text"
                name="username" autocompletes="on" onchange="upperCase()" required/>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px">&nbsp;
                Password
                </label>
                <input id="user-password" class="form-content" type="password"
                name="password" required/></br>
                <label for="user-password">Show password</label>
                <input type="checkbox" class="pass" onclick="faiz()">
                <div class="form-border"></div> 
                <input id="submit-btn" type="submit" name="masuk" values="login">
                

            </form>
        </div>
    </div>

    <?php
        if (isset($_POST['masuk'])) {
            session_start();
            include './koneksi.php';

            $username = $_POST['username'];
            $password = $_POST['password'];

            $cekuser = mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE username = '$username' AND password = '$password'");
            $level = mysqli_num_rows($cekuser);
            if($level>0) {
                $ambildatarole = mysqli_fetch_array($cekuser);
                $role = $ambildatarole['id_level'];

                if($role=='1'){
                    $_SESSION['userweb']=$username;
                    $_SESSION['id_level'] = '1';
                    header ("location:admin/index.php");
                }
                else{
                    $_SESSION['userweb']=$username;
                    $_SESSION['id_level'] = '2';
                    header ("location:petugas/index.php");
                }
            }
            else{
                echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
            }
        }
    ?>
    <script src="show.js"></script>
</body>
</html>