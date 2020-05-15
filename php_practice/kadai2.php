<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
//A1
function sum($x){
    echo $x*2;
}
sum(10)."\n";

//A2
function sum1($x){
    return $x*2;
}
$num1=sum1(10);
echo $num1."\n";

//A3
function sum2($x){
    return $x*2;
}
echo sum2(10)."\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
    return $a + $b;
}
echo f(3,4)."\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9))."\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
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
 echo max_array(array(1, 15, 3, 99, 2));

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ</p>";
echo strip_tags($str) ."\n";

//array_push
$fluits = array("orange", "banana");
array_push($fluits, "apple", "kiwi");
print_r($fluits);

//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
$array = array_merge($array1, $array2, $array3);
 
print_r($array);

//time, mktime
echo '現在のUnixタイムスタンプ：'.time()."\n";
 
//5日後のタイムスタンプを取得
$nweek = time() + (5 * 24 * 60 * 60);
echo '5日後のUnixタイムスタンプ：'.$nweek."\n";

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 5, 1, 2020);
echo $timestamp."\n";;

//date
echo date('Y年m月d日 H時i分s秒')."\n";
?>