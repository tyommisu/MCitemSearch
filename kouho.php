
<?php

// if($_SERVER['REQUEST_METHOD']=== 'POST'){
//     $mainItem = $_POST['mainItem'];
// }

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

?>


<html>
<!-- <input type="text" name="name" list="example"> -->
<!-- <datalist id="example"> -->
<!-- <option value="サンプル1"></option> -->
<!-- <option value="サンプル2"></option> -->
<!-- <option value="サンプル3"></option> -->
<!-- </datalist> -->

  <form action="" method="post">
    リストから検索<br>
    <select name = "listItem">
    　　　<option value="noselect">--選択してください--</option>
      <optgroup label="建築・装飾ブロック">
        <option>花崗岩</option>
        <option>磨かれたブロック</option>
      </optgroup>
      <optgroup label ="レッドストーン">
      　　<option>レットストーンリピーター</option>
        <option>ドロッパー</option>
      </optgroup>
    </select>
    <br><br>
    フリ―ワード検索<br>
    <input type="text"  list="keywords" name = "freeItem">
    <datalist id="keywords" >
        <option>花崗岩</option>
        <option>磨かれたブロック</option>
      　　<option>レットストーンリピーター</option>
        <option>ドロッパー</option>
     </datalist><br><br>
     <input type="submit" value="検索"><br><br>
    
    
    <?php
    $listItem = $_POST['listItem'];
    $freeItem = $_POST['freeItem'];
   
    
    if(($listItem!="noselect")&&($freeItem=="")){
        echo $listItem;
    }elseif (($listItem=="noselect")&&($freeItem!="")){
        echo $freeItem;
    }else{
        $alert = "<script type ='text/javascript'>alert('リスト、もしくはフリーワードのどちらか一方を必ず入力してください');</script>";
        echo $alert;
    }

    
    
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </form>
</html>