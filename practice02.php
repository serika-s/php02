<?php
echo 'hello php!';

// 02課題１
$a = 3;
$b = 7;
echo $a + $b;
echo "\n";

// 02課題２
$array_month = ["1月" , "2月" , "3月" , "4月" , "5月" , "6月" , "7月" , "8月" , "9月" , "10月" , "11月" , "12月"];
echo $array_month [7];
echo "\n";

// 02課題３
$hello = "Hello. ";
$name = "Serika";
$world = "'s World!";
echo $hello . $name . $world;
echo "\n";

// 02課題４
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;
echo "\n";

// 02課題５
$calender_2018 = [
"January" => "1月" , 
"February" => "2月" , 
"March" => "3月" , 
"April" => "4月" , 
"May" => "5月" , 
"June" => "6月" , 
"July" => "7月" , 
"August" => "8月" , 
"September" => "9月" , 
"October" => "10月" , 
"Nobember" => "11月" , 
"December" => "12月"];
echo $calender_2018 ["December"];
echo "\n";

// 03課題１
$name = "SERIKA";
if ($name = "SERIKA") {
    echo "私は SERIKA です";
}
else {
    echo"あなたの名前ではありません";
}
echo "\n";

// 03課題２
$total = 0;
echo $total;
echo "\n";

for ($i =  0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

// 03課題３
$fruits = array("apple" , "strawberry" , "orange" , "lemon" , "grape");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}
echo "\n";

// 03課題４
for ($i = 0; $i < 100; $i++){
    if ($i % 5 == 0){
    echo $i;
    }
}
echo "\n";
