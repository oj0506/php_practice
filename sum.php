<?php
function times($num){
    $result = 0;
    $result = $num * 2;
    return $result;
}
echo times(2);
echo "\n";
function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(1,2);
echo "\n";

function kakezan($arr){
  $result = 1;
  foreach($arr as $a){
    $result *= $a;
  }
  return $result;
}
echo kakezan(array(1,3,5,7,9));
echo "\n";

function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    } 
  }
  return $max_number;
}
echo max_array(array(10,15,-10,20,30));
echo "\n";

$str = "<h1>strip_tags関数</h1>"
. "<p>タグを取り除く</p>";
echo strip_tags($str)."￥n";

$stack = array("orange","banana");
array_push($stack,"apple","melon");
print_r($stack);

$array1 = [1,2,3];
$array2 = [10,20,30];
$array3 = [100,200,300];
$array = array_merge($array1,$array2,$array3);
print_r($array);

$time = mktime(9);
var_dump(date('Y年m月d日h時i分s秒',$time));
print $time;

date_default_timezone_set('Asia/Tokyo');
echo date("y/m/t");