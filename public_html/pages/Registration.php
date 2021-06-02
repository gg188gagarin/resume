<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/Registration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>

<p></p>
<p></p>

<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Register</p>
        <form class="form_auth_style" action="../functionaity%20/register.php" method="POST">
            <label>Create your account. It`s free and only takes a minute</label>
            <div class="namesurname">
                <input type="text" name="firstname" placeholder="First Name" required>
                <p></p>
                <input type="text" name="lastname" placeholder="Last Name" required>
            </div>
            <label>Enter your email</label>
            <input type="text" name="email" placeholder="Email" required>

            <label>Password</label>
            <input type="text" name="password" placeholder="Password" required>
            <p></p>
            <input type="text" name="confpassword" placeholder="Confirm Password" required>
            <p></p>
            <div class="agreement">
                <input type="checkbox" name="agreemeent"/>Agreement
            </div>
            <p></p>
            <button class="registernow" type="submit" name="form_auth_submit" href="?tab=Login">Register Now</button>

        </form>
    </div>


</body>
</html>