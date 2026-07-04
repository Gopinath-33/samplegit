<?php
require_once 'config.php';

if (isset($_SESSION['staff_id'])) {
    header("Location: login.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, full_name, department, password FROM staff WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $staff = $result->fetch_assoc();
        if (password_verify($password, $staff['password'])) {
            $_SESSION['staff_id'] = $staff['id'];
            $_SESSION['staff_name'] = $staff['full_name'];
            $_SESSION['staff_department'] = $staff['department'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "No account found with this email.";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Staff Leave Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-wrap">
        <div class="brand-row">
            <div class="brand-badge">SL</div>
            <span>Staff Leave Management System</span>
        </div>

        <div class="auth-card">
            <h1>Welcome back</h1>
            <p class="sub">Sign in to manage your leave requests</p>

            <?php if ($error): ?>
            <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" id="loginForm" novalidate>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="you@company.com" autocomplete="username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" autocomplete="current-password">
                </div>
                <button type="submit" class="btn-primary">Sign In</button>
            </form>

            <p class="auth-footer">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>

    <script src="js/auth.js"></script>
</body>
</html>