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
                    <td>Id User</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_user">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="password">
                    </td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="fullname">
                    </td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="level">
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
