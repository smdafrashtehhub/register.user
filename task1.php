
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["family"]);
    $website = test_input($_POST["phon_number"]);
    $comment = test_input($_POST["age"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$error=1;
idvalidate($_REQUEST['id']);
namevalidate(strlen($_REQUEST['name']));
familyvalidate(strlen($_REQUEST['family']));
phonvalidate(strlen((string)$_REQUEST['phon_number']));
agevalidate($_REQUEST['age']);
passvalidate($_REQUEST['password']);


function passvalidate($password)
{
    if($password=='')
    {
        echo "enter password <br>";
        $GLOBALS['error']=0;
    }

}
function idvalidate($id)
{

    if($id=='')
    {
        echo "enter id <br>";
        $GLOBALS['error']=0;
    }
    else if(is_int($id))
    {
        echo "id must be integer<br>";
        $GLOBALS['error']=0;
    }
}


function namevalidate($namelen)
{
    if($namelen>40)
    {
        echo "max length name must be less than 40 <br>";
        $GLOBALS['error']=0;
    }
    if($namelen==0)
    {
        echo "enter name <br>";
        $GLOBALS['error']=0;
    }
}
function familyvalidate($familylen)
{
    if($familylen>40)
    {
        echo "max length family must be less than 40 <br>";
        $GLOBALS['error']=0;
    }
    if($familylen==0)
    {
        echo "enter family <br>";
        $GLOBALS['error']=0;
    }
}
function phonvalidate($phonlen)
{
    if($phonlen>11)
    {
        echo "max length phon must be 11 <br>";
        $GLOBALS['error']=0;
    }
    if($phonlen==0)
    {
        echo "enter phon_number <br>";
        $GLOBALS['error']=0;
    }
}
function agevalidate($age)
{

    if($age=='')
    {
        echo "enter age <br>";
        $GLOBALS['error']=0;
    }
    else if($age<18)
    {
        echo "min age must be 18 <br>";
          $GLOBALS['error']=0;

    }
    }
    if($error==1)
    {
//        echo "ok";
        $users=['id'=>$_REQUEST['id'],'name'=>$_REQUEST['name'],'family'=>$_REQUEST['family'],'phon_number'=>$_REQUEST['phon_number'],'age'=>$_REQUEST['age'],'gender'=>$_REQUEST['gender'],'password'=>md5($_REQUEST['password'])];
//        $infile=file_get_contents('file.txt')."\n".'id=>'.$_REQUEST['id'].' '.'name=>'.$_REQUEST['name'].' '.'family=>'.$_REQUEST['family'].' '.'phon_number=>'.$_REQUEST['phon_number'].' '.'age=>'.$_REQUEST['age'].' '.'gender=>'.$_REQUEST['gender'].' '.'password=>'.md5($_REQUEST['password']);
//        $openfilew=fopen('file.txt','w');
        $data=json_decode(file_get_contents('file.txt'),true);
        $data[]=$users;
//        fwrite($openfilew,file_get_contents('file.txt').json_encode($users));
        file_put_contents('file.txt',json_encode($data)) ;
//        fclose($openfilew);

        $openfiler=fopen('file.txt','r');
        $filesize=filesize('file.txt');
        $filetext=fread($openfiler,$filesize);
        echo $filetext;
        fclose($openfiler);


    }
