<?php

//ファイルを変数に入れる
$csv_file = file_get_contents('minecraftItem.csv');

//変数を改行ごとの配列に変換
$aryHoge = explode("\n", $csv_file);

$aryCsv = [];
foreach ($aryHoge as $key => $value){
    if($key == 0) continue; //1行目が見出しなど、取得したくない場合
    if(!$value) continue; //空白行が含まれていたら除外
    $aryCsv[] = explode(",", $value);
}

//配列に格納されたか確認
print_r($aryCsv);
?>

