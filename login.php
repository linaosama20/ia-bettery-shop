<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: Views/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battery Shop - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="glass-card p-5" style="width: 100%; max-width: 450px;">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2" style="background: linear-gradient(to right, #60a5fa, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; color: transparent;">⚡ Sign In</h2>
            <p class="text-muted small">Welcome back to Battery Shop</p>
        </div>
        
        <?php if(isset($_GET['msg']) && $_GET['msg'] === 'registered'): ?>
            <div class="alert alert-success bg-success text-white border-0 py-2 small text-center mb-4 rounded-3">Registration successful! Please login.</div>
        <?php endif; ?>

        <form action="Actions/login_process.php" method="POST">
            <div class="mb-4">
                <label class="form-label small fw-semibold text-muted ms-1">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>
            <div class="mb-5">
                <label class="form-label small fw-semibold text-muted ms-1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <button type="submit" name="login_btn" class="btn btn-primary w-100 py-3 fw-bold rounded-3">Login to Account</button>
        </form>
        <div class="text-center mt-4">
            <p class="small text-muted mb-0">New here? <a href="register.php" class="text-decoration-none" style="color: #60a5fa; font-weight: 600;">Create Account</a></p>
        </div>
    </div>
</div>
</body>
</html>