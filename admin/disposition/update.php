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
    $sql = mysqli_query($koneksi, "SELECT * FROM disposition WHERE id_disposition = '$id'");
    if (mysqli_num_rows($sql)==0) {
        header("location:../disposition.php");
    } else {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
            <form class="" action="./update_proses.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id_disposition']; ?>">
                <table border="1">
                    <tr>
                        <td>Id Disposition</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="id_disposition" value="<?php echo $row['id_disposition']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Disposition At</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="disposition_at" value="<?php echo $row['disposition_at'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Reply At</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="reply_at" value="<?php echo $row['reply_at'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Desciption</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="desciption" value="<?php echo $row['desciption'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Notification</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="notification" value="<?php echo $row['notification'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Mail Id</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="mailid" value="<?php echo $row['mailid'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>User Id</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="userid" value="<?php echo $row['userid'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <input Description="text" name="status" value="<?php echo $row['status'];?>">
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
