<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume Form</title>
    <link rel="stylesheet" href="../css/res_reg_form(by%20login).css">
    <link rel="stylesheet" href="../css/menu.css">

</head>
<body>


<div class="form_auth_block">
    <div class="form_auth_block_content">
        <p class="form_auth_block_head_text">Update your resume</p>
        <form class="form_auth_style" action="../functionaity%20/res_expo_tobd.php" method="POST">
            <label>Phone number</label>
            <input  class="inputcolor" type="text" name="phone_number" placeholder="Enter your phone number " required>
            <label>Email</label>
            <input  class="inputcolor" type="email" name="email" placeholder="Enter your email " required>
            <label>Location</label>
            <input  class="inputcolor" type="text" name="location" placeholder="Enter your Location" required>
            <label>Personal website</label>
            <input  class="inputcolor" type="text" name="website" placeholder="Enter your Website" required>
            <label>Education</label>
            <input  class="inputcolor" type="text" name="education" placeholder="Enter your Education" required>
            <label>Skills</label>
            <input  class="inputcolor" type="text" name="skills" placeholder="Enter your Skills" required>
            <label>The number id of the resume update you want to select ( optional )</label>
            <input  class="inputcolor" type="text" name="nomber_res" placeholder="Enter your id" required>
            <p></p>
            <button class="registernow" type="submit" name="form_auth_submit" > Update
            </button>
        </form>
    </div>
</div>
</body>
</html>


