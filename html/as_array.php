<?php
// $hash["one"]が"いち",$hash["two"]が"に"、$hash["three"]が"さん"となる連想配列を作成
$hash = array("one" => "いち", "two" => "に", "three" => "さん");
$hash["four"] = "し";
print_r($hash);
//$hashの各要素を取り出して処理
foreach($hash as $key => $val)
  print("$key is $val.");
?>