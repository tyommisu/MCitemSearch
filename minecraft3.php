<?php

if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $mainItem = $_POST['mainItem'];
}

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

//文字化けを解消（変換後のエンコーディング：UTF-8、変換前のエンコーディング：SJIS）
$aryCsv = mb_convert_encoding($aryCsv,"UTF-8","SJIS");

//配列に格納されたか確認
//print_r($aryCsv);

?>

<html>
  <form action="" method="post">
		<label>クラフトしたいアイテム<br>
		<input type="text" name="mainItem" ></label>  
		<input type="submit" value="検索する">
		
		
  </form>
  
<!-- //<p id="result">調べたいアイテムを入力してください</p> -->
</html>

<?php 

//材料のリスト
list( $matl1,$matl2,$matl3)= array(2,4,6);
//個数のリスト
list( $qty1,$qty2,$qty3) = array(3,5,7);
//備考のリスト
list( $note1,$note2,$note3) = array(12,13,14);


if(isset($mainItem)){
    $search= $mainItem;
    $arySearch = array_search($search,array_column($aryCsv,0));
    if($arySearch !== false) {
        //全体
//        $result = $aryCsv[$arySearch];
        //材料1
        $result_matl1 = $aryCsv[$arySearch][$matl1];
        //材料1の個数
        $result_qty1 = $aryCsv[$arySearch][$qty1];
        //var_dump($result_matl2);
        $result_note1 = $aryCsv[$arySearch][$note1];

        //材料2
        $result_matl2 = $aryCsv[$arySearch][$matl2];
        $result_qty2 = $aryCsv[$arySearch][$qty2];
        $result_note2 = $aryCsv[$arySearch][$note2];
        
        //材料3
        $result_matl3 = $aryCsv[$arySearch][$matl3];
        $result_qty3 = $aryCsv[$arySearch][$qty3];
        $result_note3 = $aryCsv[$arySearch][$note3];
         
        echo "【".$mainItem."】"."の材料<br>";
        echo "　材料1：".$result_matl1." / ".$result_qty1."個<br>";
        echo "　材料2：".$result_matl2." / ".$result_qty2."個<br>";
        echo "　材料3：".$result_matl3." / ".$result_qty3."個<br>";

        echo "【備考】<br>";
        echo "・".$result_note1."<br>";
        echo "・".$result_note2."<br>";
        echo "・".$result_note3."<br>";
        
    }else
    {
        $alert = "<script type ='text/javascript'>alert('アイテム名を確認してください');</script>";
        echo $alert;
    }
}
?>


