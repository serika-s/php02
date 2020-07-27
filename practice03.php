<?php
echo 'hello php!';

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

for ($i =  1; $i <= 10000; $i++) {
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
for ($i = 1; $i <= 100; $i++){
    if ($i % 5 == 0){
    echo $i;
    echo "\n";
    }
}
echo "\n";
