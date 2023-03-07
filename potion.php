<?php

//ファイルを変数に入れる
$csv_file = file_get_contents('potion.csv');

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


$img = array('p000.png','p001.png','p002.png','p003.png','p004.png','p005.png','p006.png','p007.png',
                'p008.png','p009.png','p010.png','p011.png','p012.png','p013.png','p014.png','p015.png');

     
?>

<html>
  <h3>2.ポーション検索</h3>
  <link rel ="stylesheet" href="css.css">
  <form action="" method="post">

    <input type="text"  list="keywords" name = "potion">
    <datalist id="keywords" >
      <option>奇妙なポーション</option>
      <option>治癒のポーション</option>
      <option>再生のポーション</option>
      <option>力のポーション</option>
      <option>暗視のポーション</option>
      <option>透明化のポーション</option>
      <option>跳躍のポーション</option>
      <option>耐火のポーション</option>
      <option>俊敏のポーション</option>
      <option>タートルマスターのポーション</option>
      <option>水中呼吸のポーション</option>
      <option>低速落下のポーション</option>
      <option>毒のポーション</option>
      <option>鈍化のポーション</option>
      <option>負傷のポーション</option>
      <option>弱化のポーション</option>

    </datalist>
    <input type="submit" value="検索">
  </form>

  
  
  <?php
   
    $potion =filter_input(INPUT_POST,'potion');
    

//上段材料、下段の瓶、効果、時間、延長、強化　の宣言
  list($matl1,$matl2,$efc,$time,$ext,$reinfo) = array(1,2,3,4,5,6);

  if(isset($potion)){
    $arySearch = array_search($potion,array_column($aryCsv,0));
    if($arySearch !== false){
        //上段材料
        $result_matl1 = $aryCsv[$arySearch][$matl1];
        //下段の瓶
        $result_matl2 = $aryCsv[$arySearch][$matl2];
        //効果
        $result_efc = $aryCsv[$arySearch][$efc];
        //時間
        $result_time = $aryCsv[$arySearch][$time];
        //延長
        $result_ext = $aryCsv[$arySearch][$ext];
        //強化
        $result_reinfo = $aryCsv[$arySearch][$reinfo];
        
        echo "<font><b>$potion</b></font>"."の作り方<br><br>";
        echo "<img src=\"img/$img[$arySearch]\"><br><br>";
        echo "　上段の材料：".$result_matl1."<br>";
        echo "　 下段の瓶 ：".$result_matl2."<br>";
        echo "　　効　果　：".$result_efc."<br>";
        echo "　　時　間　：".$result_time."<br>";
        echo "　　延　長　：".$result_ext."<br>";
        echo "　　強　化　：".$result_reinfo."<br><br>";
        
    }else{
        $alert = "<script type ='text/javascript'>alert('入力内容を確認してください');</script>";
        echo $alert;;
    }
 }

?>
<a href="main.php">メイン画面に戻る</a>
</html>
