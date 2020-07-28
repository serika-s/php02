<?php
echo 'hello php!';
echo "\n";


//　テキストの例題 (1~10までの和)
function sum(){
    $result = 0;
    for($i = 1; $i <= 10; $i++ ){
        $result += $i;
    }
    return $result;
}
echo sum();
echo "\n";


//　04課題１
//  引数に数値を指定して実行すると、数値を２倍にして返す関数
function product($i){
    $result = $i * 2;
    return $result;
}
//　関数を実行
echo product(100);
echo "\n";


//  04課題２
//　$a と $b を仮引数に持ち、$aと$bを足した結果を返す関数
function f($a , $b){
    $result = $a + $b;
    return $result;
}
//　関数を実行
echo f(3 , 4);
echo "\n";


//　04課題３
//　$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function product2($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
        }
    return $result;
}

echo product2(array(1, 3, 5, 7, 9));
echo "\n";


//　04課題４
//　配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
      if($max_number < $a){
         $max_number = $a;
      }
    }
return $max_number;
}
echo max_array(array(1, 2, 3, 4, 5));
echo "\n";


//　04課題５
//　❶strip_tags　指定した文字列からHTMLタグを取り除く関数
$str = "<p>2020/07/19</p>"
       ."<h2> ブログタイトル がここに入ります</h2>";
       
#strip_tagsを使用してHTMLタグを取り除く   
echo strip_tags($str);

echo "\n";

//　❷array_push　１つ以上の要素を配列の最後に追加する関数
$color = ['black' , 'white' , 'yellow'];

#array_pushを使用して要素を追加する
array_push($color, 'pink' , 'orange');

print_r($color);
echo "\n";

//　❸array_merge　配列の要素の最後に1つまたは複数の文字列を結合する関数
#配列を作成
$array1 = [1, 2, 3];
$array2 = ['black', 'white', 'blue'];
$array3 = [4, 5, 6];

#array_mergeをしようして配列を結合
$array = array_merge($array1, $array2, $array3);

print_r($array);
echo "\n";

//　❹time, mktime　UNIXタイムスタンプを取得することができる関数
//　time関数（現在時刻のUNIXタイムスタンプを取得）/ int time(void)
#現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ:'.time();
echo "\n";

#３日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '３日後のUnixタイムスタンプ:'.$nweek;
echo "\n";

// mktime関数（指定した日時のUNIXタイムスタンプを取得）/ int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
#指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1 ,2020);
echo $timestamp;
echo "\n";

//　❺dstring date 　指定したフォーマットで日時として取得する関数 / string date ( string $format [, int $timestamp = time() ] )
#現在日付をフォーマットする
echo date('Y/m/d');
echo "\n";

#現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";

#３日後の日時を取得（タイムスタンプ利用）
echo date('Y/m/d' , $nweek);
echo "\n";

