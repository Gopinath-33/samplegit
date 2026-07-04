<?php
require_once 'config.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee_id = trim($_POST['employee_id']);
    $full_name = trim($_POST['full_name']);
    $department = trim($_POST['department']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($employee_id === '' || $full_name === '' || $department === '' || $email === '' || $password === '') {
        $error = "Please fill all required fields.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        $check = $conn->prepare("SELECT id FROM staff WHERE email = ? OR employee_id = ?");
        $check->bind_param("ss", $email, $employee_id);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $error = "An account with this Employee ID or Email already exists.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $conn->prepare("INSERT INTO staff (employee_id, full_name, department, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $employee_id, $full_name, $department, $email, $phone, $hashedPassword);

            if ($stmt->execute()) {
                $success = "Account created successfully! You can now login.";
            } else {
                $error = "Something went wrong. Please try again.";
            }
            $stmt->close();
        }
        $check->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - Staff Leave Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-wrap">
        <div class="brand-row">
            <div class="brand-badge">SL</div>
            <span>Staff Leave Management System</span>
        </div>

        <div class="auth-card">
            <h1>Create your account</h1>
            <p class="sub">Register to start applying for leave</p>

            <?php if ($error): ?>
            <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <?php if ($success): ?>
            <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
            <?php endif; ?>

            <form method="POST" id="registerForm" novalidate>
                <div class="field-row">
                    <div class="field">
                        <label>Employee ID</label>
                        <input type="text" name="employee_id" placeholder="EMP1024" value="<?= htmlspecialchars($_POST['employee_id'] ?? '') ?>">
                    </div>
                    <div class="field">
                        <label>Department</label>
                        <select name="department">
                            <option value="">Select</option>
                            <?php
                            $depts = ['B.SC.CS', 'BCA', 'BBA', 'B.COM', 'AI & MI'];
                            $selectedDept = $_POST['department'] ?? '';
                            foreach ($depts as $d) {
                                $sel = $d === $selectedDept ? 'selected' : '';
                                echo "<option value=\"$d\" $sel>$d</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label>Full Name</label>
                    <input type="text" name="full_name" placeholder="Your full name" value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>">
                </div>

                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="you@company.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                </div>

                <div class="field">
                    <label>Phone</label>
                    <input type="tel" name="phone" placeholder="10-digit number" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                </div>

                <div class="field-row">
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Min. 6 characters">
                    </div>
                    <div class="field">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" placeholder="Re-enter password">
                    </div>
                </div>

                <button type="submit" class="btn-primary">Create Account</button>
            </form>

            <p class="auth-footer">Already have an account? <a href="login.php">Sign in</a></p>
        </div>
    </div>

    <script src="js/auth.js"></script>
</body>
</html>