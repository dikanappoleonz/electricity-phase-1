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
