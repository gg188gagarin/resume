<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


</head>
<body>
<link rel="stylesheet" href="../css/Login.css">
<p></p><p></p>
<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Welcome</p>
        <form class="form_auth_style" action="#" method="post">
            <label>Login</label>
            <input class="inputcolor" type="email" name="auth_email" placeholder="Enter your username " required>
            <label>Password</label>
            <input class="inputcolor" type="password" name="auth_pass" placeholder="Enter your password" required>
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