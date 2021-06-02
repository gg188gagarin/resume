<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="../css/Login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>

<p></p><p></p>
<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Welcome</p>
        <form class="form_auth_style" action="#" method="post">
            <label>Login</label>
            <input type="email" name="auth_email" placeholder="Enter your username " required>
            <label>Password</label>
            <input type="password" name="auth_pass" placeholder="Enter your password" required>
            <p></p>
            <button class="registernow" type="submit" name="form_auth_submit">Log in</button>
            <p></p>
            <button class="registernow" type="submit" name="form_auth_submit"
                    href="/public_html/Registration/registration.php"> Register
            </button>
        </form>
    </div>
</div>
</body>
</html>