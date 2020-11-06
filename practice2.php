<?php
$height = 160;
if ($height < 150){
echo "150ｃｍ未満の方はご乗車できません";
} else {
echo "ご乗車になれます";
}
echo"\n";

$height = 230;
if ($height < 150) {
  echo"150cm未満の方はご乗車できません。";
  }else if ($height >= 200){
  echo"200cm以上の方はご乗車できません。";
  } else {
  echo"ご乗車になれます";  
  } 
  echo"\n";
  
  $weekday = "月曜";
  switch ($weekday) {
    case "月曜":
    echo "可燃ごみの日です。";
    break;
    case"水曜":
    echo "資源ごみの日です。";
    break;
    default:
    echo"回収はありません。";
    break;
    echo"\n";
  }
  
  $weekday = "木曜";
  switch($weekday) {
  case"月曜":
  case"木曜":
  echo"可燃ごみの日です。";
  break;
  case"水曜":
  echo"資源ごみの日です。";
  break;
  default:
  echo"回収はありません。";
  break;
  }
  echo"\n";
  
  $a = 3;
  $b = 3;
  $c = "3";
  
  var_dump($a == $b);
  var_dump($a !=  $b);
  var_dump($a > $b);
  
  for($i = 0; $i < 10; $i++){
    echo $i;
  }
  echo"\n";
  
$total =0;
echo $total;

for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;

$fruits = array("apple","orange","lemon",);
echo count($fruits);
echo"\n";

for($i = 0; $i <count($fruits); $i++) {
  echo"要素は" . $fruits[$i];
  echo"\n";
}

$animals = array("dog","cat","panda");
foreach($animals as $animals){
  echo"要素は" . $animals;
  echo"\n";
}

$name = "jun";
if($name == "taro") {
  echo "私は $name です";
} else{
  echo "あなたの名前ではありません";
}
echo"\n";
$total = 0;
for($i = 1;$i <= 10000; $i++ ){
  $total += $i;
}
echo $total;
echo"\n";

$fruits = ["apple", "orange", "banana", "grape", "melon"];
foreach ($fruits as $fruit) {
  echo  $fruit;
  echo"\n";
}
/* for文の始めの値を定義する */
  $start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  } echo"\n";
}  


