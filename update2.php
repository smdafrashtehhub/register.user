<?php

$userup = ['id1' => $_REQUEST['id1'], 'name1' => $_REQUEST['name1'], 'family1' => $_REQUEST['family1'], 'phon_number1' => $_REQUEST['phon_number1'], 'age1' => $_REQUEST['age1'], 'gender1' => $_REQUEST['gender1'], 'password1' => md5($_REQUEST['password1'])];
$data = json_decode(file_get_contents('file.txt'), true);
//echo "id".$data[0]['id'];
$id = $_REQUEST['idsearch'];
$data = array_filter($data, function ($user) use ($id) {
    return $user['id'] != $id;
});
$data[] = $userup;
print_r($data);
//    file_put_contents('file.txt',json_encode($data));
file_put_contents('file.txt',json_encode($data));