<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($max) {
  $result = 0;
  for($i = 1; $i <= $max; $i++ ){
    $result = $i * 2;
}
  return $result;
}
echo sum(10);
?>

<?php
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
  echo $a + $b;
}
echo f(1,5);
?>

<?php
/*$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。*/

$arr = array(1, 3, 5, 7, 9);

  echo array_product($arr);
  echo "\n";
?>

<?php
/*【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array
という関数を実装しようとしています。途中の部分を完成させてください。*/

function max_array($arr){
  $arr = array(20, 7, 15, 4);
  $max_number = $arr[0];
  foreach($arr as $a){
  }
  return $max_number;
}
 echo max_array($arr);
?>

<?php
//次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$str = "<h1>HTMLを取り除く</h1><!-- コメントアウト --><p>テストテキスト</p>";
echo strip_tags($str);
?>

<?php
//array_push
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
?>

<?php
//array_merge
$array1 = [1, 2];
$array2 = [10,11];
$array = array_merge($array1, $array2);
print_r($array);

?>

<?php
// mktime
date_default_timezone_set('Asia/Tokyo');
$today_month = 3;
$today_day = 23;
$today_year = 2020;
$timestamp = mktime(0, 0, 0, $today_month, $today_day, $today_year);
$today_day += 45;
$new_timestamp = mktime(0, 0, 0, $today_month, $today_day, $today_year)
?>

<?php
//date
echo date("Y/m/d H:i:s") . "\n";
?>


