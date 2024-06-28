<?php
session_start();
include('db_con.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE usename = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['userid'] = $id;
            $_SESSION['username'] = $username;
            // $_SESSION['role'] = $role;

            // if ($role == 'admin') {
            //     header("Location: admin_dashboard.php");
            // } else {
            //     header("Location: user_dashboard.php");
            // }
            // exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
    $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASIGI: Masuk</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/public/css/loginn.css">
</head>

<body>
    <div class="wrapper">
        <form action="/app/Views/auth/Admin/layout1.html" method="get">
            <img src="/public/img/logo-black-shadow.png" alt="logo-putih">
            <h1>Selamat Datang</h1>
            <p>Mari kelola masjid dengan efisien dan amanah, dalam era digitalisasi.</p>
            <div class="input-box">
                <input type="text" placeholder="Nama Pengguna" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Kata Sandi" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label for="">
                    <input type="checkbox"> Ingat saya
                </label>
                <a href="" class="forgot-password">Lupa kata sandi?</a>
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
    </div>
</body>

</html>