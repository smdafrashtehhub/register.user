<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="task1.php" method="post" >
    کد کاربری: <input type="number" name="id"><br><br>
    نام: <input type="text" name="name" maxlength="40" ><br><br>
    نام خانوادگی: <input type="text" name="family"><br><br>
    تلفن: <input type="number" name="phon_number"><br><br>
    سن: <input type="number" name="age"><br><br>
    رمز: <input type="password" name="password"><br><br>
    جنسیت:
    <input type="radio" name="gender" value="female">زن
    <input type="radio" name="gender" value="male">مرد<br><br>
    <button type="submit">ارسال</button>
</form>
</body>
</html>