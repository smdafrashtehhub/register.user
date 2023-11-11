<?php
$x='ahmad';
define('y'.$x,'$x');
define('z',8);
$t=4;
echo z;
echo yahmad;
echo PHP_VERSION;
echo __LINE__;
echo __FILE__;
echo gettype($x);
var_dump(is_bool($t));
$s=9.4;
echo floor($s);
echo ceil($s);
$a='ali';
$b="{$a} reza";
echo $b;
echo $b[-2];
$q=4;
$w=42;
$e=20;;
switch ($q) {
    case 1:
        echo "good";
        break;
    case 4:
        echo "95</br>";
        break;

}
for($i=1; $i<=8 ; $i++)
{
    for($j=1;$j<=$i; $j++)
        echo "*";
    echo "</br>";
}

for($i=9 ; $i>=1; $i--)
{
    for($j=$i ; $j>=1 ; $j--)
        echo "*";
    echo "<br>";
}
$str="samad afrashteh ok";
$arr=[1,3,'fd',2];
echo count($arr)."<br>";
echo is_array($arr)."<br>";
echo substr("samad",1,3)."<br>";
echo in_array(3,$arr)."<br>";
echo str_replace(' ',3,$str)."<br>";
echo implode('*',$arr)."<br>";
echo strlen($str)."<br>";
var_dump( explode(" ",$str));

$arr1=[1,2,3,1,6];
$arr2=['ali'=>20,'reza'=>28,'ahmad'=>12,'samad'=>33];
$arrmerge=array_merge($arr2,$arr1);
print_r($arrmerge);
echo strpos($str,'afrashteh');
$str1="samad %d afrashteh %s";
echo sprintf($str1,33,'good');
$tr=trim($str1,"a");
var_dump($tr);
echo "</br>time=".time();
echo "</br>time=".date('d-m-y')."<br>";
array_shift($arr1);
print_r($arr1);
echo strtoupper($str);
print_r(array_values($arr2));
echo "<br>".md5($str)."<br>";
array_pop($arr2);
print_r($arr2);
echo ucfirst($str);
echo str_repeat($str,3);

require('file.php');
echo ++$x;
print_r(array_unique($arr1));
echo array_search('12',$arr2);
array_unshift($arr1,$arr2);
echo "<br>";
print_r($arr1);
echo "<br>".end($arr1);
echo "<br>".base64_encode($str);
echo "<br>".base64_decode('c2FtYWQgYWZyYXNodGVoIG9r');
echo "<br>".max($arr2);
echo "<br>".gettype($t);
echo "<br>".array_pop($arr2);
echo "<br>".array_push($arr2,'samad');
echo "<br>".strtotime("+1 day")."<br>";
print_r($arr2);
echo chr(344);
print_r(array_reverse($arr1));
echo date('d/m/y g:i:sa',time()+24*60*60);
date_default_timezone_set('Asia/Tehran');
echo date('d/m/y g:i:sa',time()+24*60*60);

$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo "<br>".$myJSON."<br>";
$x = json_decode($myJSON);
print_r($x);