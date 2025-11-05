<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <?php include 'bootstrap.php'; ?>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form method="POST" action="register_process.php">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register Account</button>
        </form>
    </div>
</body>
</html>