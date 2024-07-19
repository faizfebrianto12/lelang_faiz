<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
</head>

<body>
    <center>
        <form class="" action="./insert_proses.php" method="post">
            <table border="1">
                <tr>
                    <td>Id Disposition</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_disposition">
                    </td>
                </tr>
                <tr>
                    <td>Disposition At</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="disposition_at">
                    </td>
                </tr>
                <tr>
                    <td>Reply At</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="reply_at">
                    </td>
                </tr>
                <tr>
                    <td>Desciption</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="desciption">
                    </td>
                </tr>
                <tr>
                    <td>Notification</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="notification">
                    </td>
                </tr>
                <tr>
                    <td>Mail Id</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="mailid">
                    </td>
                </tr>
                <tr>
                    <td>User Id</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="userid">
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="status">
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
