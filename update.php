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
<?php
$data=json_decode(file_get_contents('file.txt'),true);
?>
<form action="update.php" method="post" >
    کد کاربری: <input type="number" name="id1" value="<?php echo $data[0]['id']?>"><br><br>
    نام: <input type="text" name="name1" maxlength="40" value="<?php echo $data[0]['name']?>"><br><br>
    نام خانوادگی: <input type="text" name="family1" value="<?php echo $data[0]['family']?>"><br><br>
    تلفن: <input type="number" name="phon_number1" value="<?php echo $data[0]['phon_number']?>"><br><br>
    سن: <input type="number" name="age1" value="<?php echo $data[0]['age']?>"><br><br>
    رمز: <input type="text" name="password1" value="<?php echo $data[0]['password']?>"><br><br>
    جنسیت:
    <input type="radio" name="gender1" value="female" <?php if($data[0]['gender']=='female') echo'checked';?> >زن
    <input type="radio" name="gender1" value="male" <?php if($data[0]['gender']=='male') echo'checked';?>>مرد<br><br>
    <button type="submit">ارسال</button>
</form>
</body>
</html>

<?php
$userup=['id1'=>$_REQUEST['id1'],'name1'=>$_REQUEST['name1'],'family1'=>$_REQUEST['family1'],'phon_number1'=>$_REQUEST['phon_number1'],'age1'=>$_REQUEST['age1'],'gender1'=>$_REQUEST['gender1'],'password1'=>md5($_REQUEST['password1'])];
$data=json_decode(file_get_contents('file.txt'),true);
//echo "id".$data[0]['id'];
$id=$data[0]['id'];

$data=array_filter($data, function ($user) use($id)
{
    return $user['id']!=$id;
});
$data[]=$userup;

//-----------------------------------------------------------------2222222
//$data=array_filter($data, function ($user) use($id)
//    {
//        if($user['id']==25243)
//        {
//            return $_REQUEST[$id];
//        }
//    });
//{
//    echo "*".$user['id']."%".$id;
//    if($user['id']==$id)
//    {
//        echo "$".$_REQUEST['id1'];
//        $user['id'] = 66;
////        $user['id'] = $_REQUEST['id1'];
//        $user['name'] = $_REQUEST['name1'];
//        $user['family'] = $_REQUEST['family1'];
//        $user['phon_number'] = $_REQUEST['phon_number1'];
//        $user['age'] = $_REQUEST['age1'];
//        $user['gender'] = $_REQUEST['gender1'];
//        $user['password'] = $_REQUEST['password1'];
//        echo "^".$user['id'];
//        return $user['id'];
//
//    }
//    print_r($user);
//    echo $user['name'];
//    return $user['id'];
//});
print_r($data);
//    file_put_contents('file.txt',json_encode($data));
    file_put_contents('file.txt',json_encode($data));


?>