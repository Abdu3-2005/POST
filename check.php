<?php

$users = array(
    "ahmed" => "123",
    "aml" => "435",
    "bassam" => "8274",
    "bushra" => "8348",
    "saleh" => "7887",
    "somaiah" => "2340"
);

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($users[$username]) && $users[$username] == $password) {

    echo "
    <form id='f' action='welcome.php' method='POST'>
        <input type='hidden' name='username' value='$username'>
        <input type='hidden' name='password' value='$password'>
    </form>
    <script>document.getElementById('f').submit();</script>
    ";

} else {

    echo "
    <div style='
        font-family: Tahoma;
        background:#161b22;
        padding:25px;
        border-radius:10px;
        width:320px;
        margin:100px auto;
        text-align:center;
        color:#ff6b6b;
        box-shadow:0 0 15px rgba(255,255,255,0.05);
    '>
        <h2>❌ الدخول غير مصرح به</h2>
        <p style='color:white;'>اسم المستخدم أو كلمة المرور غير صحيحة</p>
        <a href=\"login.php\" style=\"
            display:inline-block;
            margin-top:15px;
            padding:10px 20px;
            background:#238636;
            color:white;
            text-decoration:none;
            border-radius:5px;
        \">الرجوع</a>
    </div>
    ";

}

?>
