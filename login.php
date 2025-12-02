<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>تسجيل الدخول</title>

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
        padding: 25px;
        width: 300px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255,255,255,0.05);
        text-align: center;
    }

    input {
        width: 90%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #30363d;
        border-radius: 5px;
        background: #0d1117;
        color: #fff;
    }

    input:focus {
        border-color: #58a6ff;
        outline: none;
    }

    button {
        width: 95%;
        padding: 10px;
        border: none;
        background: #238636;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        font-size: 16px;
    }

    button:hover {
        background: #2ea043;
    }
</style>

</head>
<body>

<div class="box">
    <h2>تسجيل الدخول</h2>

    <form action="check.php" method="POST">
        <input type="text" name="username" placeholder="اسم المستخدم" required><br>
        <input type="password" name="password" placeholder="كلمة المرور" required><br>
        <button type="submit">دخول</button>
    </form>
</div>

</body>
</html>
