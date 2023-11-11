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
<form action="delete.php">
    <div class="mb-3 mt-3">
        <label for="number" class="form-label">id</label>
        <input type="number" class="form-control" name="id">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<?php
$data=json_decode(file_get_contents('file.txt'),true);
    $id=$_REQUEST['id'];
$data=array_filter($data,function($user) use($id)
{
    if($user['id']!=$id)
    return $user['id'];
});
file_put_contents('file.txt',json_encode($data));
?>
</html>