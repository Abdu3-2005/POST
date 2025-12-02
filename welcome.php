<?php
$username = $_POST['username'];
$password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>مرحباً</title>

<style>
    body {
        background: #0d1117;
        font-family: Tahoma;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #fff;
    }

    .box {
        background: #161b22;
        padding: 30px;
        width: 330px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255,255,255,0.05);
        text-align: center;
    }

    p {
        font-size: 16px;
        margin: 8px 0;
    }
</style>

</head>
<body>

<div class="box">
    <h2>مرحباً يا <?php echo $username; ?> 👋</h2>

    <p><b>اسم المستخدم:</b> <?php echo $username; ?></p>
    <p><b>كلمة المرور:</b> <?php echo $password; ?></p>
</div>

</body>
</html>
