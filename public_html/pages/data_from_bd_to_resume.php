<?php
    session_start();
    //require_once 'connection.php';
    // подключаемся к серверу

$host = "localhost";
$username = "root";
$password = "root";
$database = "my_db";
    $conn = mysqli_connect($host, $username, $password, $database)
    or die("Ошибка " . mysqli_error($conn));
    $query = "SELECT * FROM resume_data WHERE type = 'editable'";
    $result= mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
    $content = mysqli_fetch_array($result);
    if(count($content) == 0){
        $query = "SELECT * FROM resume_data WHERE type = 'default'";
        $result= mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
        $content = mysqli_fetch_array($result);
    }
$str = $content['skills'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar_photo">
            <img src="../storage/2.png" alt="" class="personPhoto">
        </div>
        <div class="sidebar_information">
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">CONTACT</p>
                <div class="sidebar_content">
                    <p><?php echo $content['phone_number']."<br>".$content['email']."<br>".$content['location']."<br>"; ?>
                    <?php echo "<a href=".$content['personal_website'].">"."</a>"; ?>
                    </p>
                </div>
            </div>
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">EDUCATION</p>
                    <div class="sidebar_content">
                        <p>
                            <?php echo $content['education']; ?>
                        </p>
                    </div>
            </div>
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">SKILLS</p>
                <div class="sidebar_content">

                    <?php
                        $skills = explode(" ", $str);
                        for($i = 0; $i < count($skills); $i++) {
                            echo "<ol>$skills[$i]</ol>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mainInformation">
        <div class="mainInformation__name">
            <h1 class="header_id">Mike Zakrevskyi</h1>
            <p class="header_id_2">PHP-TRAINEE</p>
        </div>
        <p class="mainInformation__profile">
        <h2 class="headers_main_content">PROFILE</h2>
        <div>
            <p class="main_content"><?php echo $content['profile']."<br>"; ?></p>
        </div>
<p class="mainInformation__profExp">
        <h2 class="headers_main_content">PROFESSIONAL EXPERIENCE</h2>
            <p class="main_content"><?php echo $content['prof_exp']."<br>"; ?> </p>
            <p class="main_content">You stand on the shore and feel the salty smell of the wind that blows from the sea,
                and you believe that you are free and life has just begun, and your friend's lips burn with a kiss, soaked
                with tears.I have not been to the sea.Okay do not pour! I've never been to the sea. You've never been to the
                sea.
                You've knocked on the door of heaven, pumped tequila, and literally seen yourself off for the last time, and
                you've never been to the sea. I didn't know that in heaven there's nowhere without it. How infinitely
                beautiful
                it is. About the sunset they saw. About how the sun, sinking into the waves, became scarlet like blood,
                and felt that the sea absorbed the energy of the luminary into itself, and the sun was tamed, and the fire
                was already burning out in the depths. And you. What will you tell them.You have never been to the sea.
                In the sky there is only talk of the sea and of the sunset. </p>
            <p class="main_content">You stand on the shore and feel the salty smell of the wind that blows from the sea,
                and you believe that you are free and life has just begun, and your friend's lips burn with a kiss, soaked
                with tears.I have not been to the sea.Okay do not pour! I've never been to the sea. You've never been to the
                sea.
                You've knocked on the door of heaven, pumped tequila, and literally seen yourself off for the last time, and
                you've never been to the sea. I didn't know that in heaven there's nowhere without it. How infinitely
                beautiful
                it is. About the sunset they saw. About how the sun, sinking into the waves, became scarlet like blood,
                and felt that the sea absorbed the energy of the luminary into itself, and the sun was tamed, and the fire
                was already burning out in the depths. And you. What will you tell them.You have never been to the sea.
                In the sky there is only talk of the sea and of the sunset. </p>
    </div>
</div>



<div id="centeredmenu2">
    <ul>
        <li><a href="?tab=Resume">Sample resume </a></li>
        <li><a href="?tab=resume_form">Update your resume </a></li>
    </ul>
</div>

</body>
</html>