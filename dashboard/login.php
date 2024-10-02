<?php
    include "config/database.php";
    session_start();

    $message = "Masukkan Username dan Password";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user_login WHERE
        username='$username' AND password='$password'
        ";

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;

            header("location: index.php");

        } else {
            $login_message = "akun tidak ditemukan";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/login.css">
    <title>Electricity Monitoring - Login</title>
</head>
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            Monitoring Electricity
        </div>
        <!-- /.login logo -->
        <div class="card">
            <div class="card-body">
                <!--<p class="login-box-message"><?php echo $message ?></p> -->
                <p class="login-box-message">Masukkan Username dan Password</p>
                <form action="" method="POST">
                    <div class="input-data">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-data">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="button">
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>