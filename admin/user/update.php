<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    
</head>

<body>

    <center>
        <?php
    include __DIR__. '/koneksi.php';
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
    if (mysqli_num_rows($sql)==0) {
        header("location:../user.php");
    } else {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
            <form class="" action="./update_proses.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id_user']; ?>">
                <table border="1">
                    <tr>
                        <td>Id User</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="id_user" value="<?php echo $row['id_user']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" value="<?php echo $row['username'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="password" value="<?php echo $row['password'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="fullname" value="<?php echo $row['fullname'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="level" value="<?php echo $row['level'];?>">
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
    </center>

</body>

</html>
