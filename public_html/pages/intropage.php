<!--удет служить в качестве страницы приветствия после того, как пользователь успешно авторизовался в системе-->

<div id="welcome">
    <h2>Добро пожаловать, <span> USER </span></h2>!
    <p><a href="logout.php">Выйти</a> из системы</p>
</div>

<?php

session_start();

if(!isset($_SESSION["session_username"])):
    header("location:logint.php");
else:
    ?>

    <?php include("includes/header.php"); ?>
    <div id="welcome">
        <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
        <p><a href="logout.php">Выйти</a> из системы</p>
    </div>

    <?php include("../functionaity /footer.php"); ?>

<?php endif; ?>