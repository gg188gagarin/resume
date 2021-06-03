<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

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
                <input class="inputcolor" type="text" name="firstname" placeholder="First Name" required>
                <p></p>
                <input  class="inputcolor" type="text" name="lastname" placeholder="Last Name" required>
            </div>
            <label>Enter your email</label>
            <input class="inputcolor"  type="text" name="email" placeholder="Email" required>

            <label>Password</label>
            <input  class="inputcolor" type="text" name="password" placeholder="Password" required>
            <p></p>
            <input  class="inputcolor" type="text" name="confpassword" placeholder="Confirm Password" required>
            <p></p>
            <div class="agreement">
                <input  class="inputcolor" type="checkbox" name="agreemeent"/>Agreement
            </div>
            <p></p>
            <button class="registernow" type="submit" name="form_auth_submit" href="?tab=Login">Register Now</button>

        </form>
    </div>


</body>
</html>