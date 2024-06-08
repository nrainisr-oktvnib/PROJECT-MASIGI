<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASIGI: Admin Dashboard</title>
    <link href="admin.css" rel="stylesheet">
</head>

<body>
    <div class="admin-wrapper">
        <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]); ?></h1>
        <p>This is the admin dashboard.</p>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>

</html>