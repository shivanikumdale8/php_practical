<?php
session_start();
$conn = new mysqli("localhost", "root", "", "voting_system");

// User Registration
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "<script>alert('Registration Successful! Please login.');</script>";
}

// User Login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: vote.php");
    } else {
        echo "<script>alert('Invalid username or password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Welcome to Online Voting System</h2>

    <div class="row justify-content-center mt-4">
        <!-- Registration Form -->
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h4 class="text-center">Register</h4>
                <form method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" required placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <button type="submit" name="register" class="btn btn-success w-100">Register</button>
                </form>
            </div>
        </div>

        <!-- Login Form -->
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h4 class="text-center">Login</h4>
                <form method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" required placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
