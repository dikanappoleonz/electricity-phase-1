<?php
    session_start();
    
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3 align="center">Selamat Datang di Dashboard</h3>
    <div align="center">
        <form action="" method="POST">
            <button type="submit" name="logout">logout</button>
        </form>
    </div>
</body>
</html>