<?php
echo "hello php!";
echo "\n";

$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

echo "課題2 : "; 
$array_mouth =["january","febrary","march","april","may","june","july","august","september","october","november","december"]; 
echo $array_mouth[7];
echo "\n"; 

$hello = "Hello,";
$name = "jun'";
$worid = "s World!";
echo $hello . $name . $worid;
echo "\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;
echo "\n";

$_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $_calendar ["December"];
echo"\n";
$value = 6;
echo $value + 2;
echo"\n";

$integer = 20;
$strigs = "abc";
echo $integer;
echo $strigs;
echo "\n";

$new_integer = $integer + 10;
echo $new_integer;
echo"\n";

$array = [2017,2018,2019,2020];
echo $array[0];
echo $array[2];
echo"\n";

$array2 = ["spring","summer","autumn","winter"];
echo $array2[2];
echo"\n";

$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
  ]; 

  echo $animals["dog"];
  echo"\n";
  
  $result = true ;
  if ($result == true) {
    echo "成功しました";
  } else {
    echo"失敗しました";
  }
  echo"\n";
  
  $value = 6;
  echo $value + 2;
  echo"\n";
  
  $value = 6;
  echo $value - 2;
  echo"\n";
  
  $value = 6;
  echo $value *2;
  echo"\n";
  
 $value = "aaa";
 $value2 = "bbb";
 echo $value . "bbb";
 echo"\n";

$value = 10;
$result = $value == 20;
var_dump($result);
echo"\n";

$value = 10;
$result = $value < 20;
var_dump($result);
echo"\n";

$value = 10;
$result = $value > 20;
var_dump($result);
echo"\n";

$a = "20";
$b = 20;
$result = $a == $b;
var_dump($result);
echo"\n";
$result = $a === $b;
var_dump($result);
echo"\n";

$value = 10;
++$value;
echo $value;
echo"\n";

$value = 10;
--$value;
echo $value;
echo"\n";

$value = 10;
$value += 5;
echo $value;
echo"\n";

$value = 10;
$value -= 5;
echo $value;
echo"\n";

$value = "apple";
$value .= "orange";
echo $value;
echo"\n";

$value = 10;
$result = ($value < 20) ? '$valueは20より小さい' :
'$valueは20と等しいかまたは大きい';
echo $result;
echo"\n";

