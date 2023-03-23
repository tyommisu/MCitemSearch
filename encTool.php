<?php

//ファイルを変数に入れる
$csv_file = file_get_contents('encTool.csv');

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
  <h3>装備・ツールからエンチャント検索</h3>
  <link rel ="stylesheet" href="css.css">
  <form action="" method="post">

    <input type="text"  list="keywords" name = "enctool">
    <datalist id="keywords" >
	<option>ツルハシ</option>
	<option>シャベル</option>
	<option>斧</option>
	<option>クワ</option>
	<option>剣</option>
	<option>弓</option>
	<option>釣り竿</option>
	<option>ニンジン付き棒</option>
	<option>エンチャント本</option>
	<option>クロスボウ</option>
	<option>ヘルメット</option>
	<option>チェストプレート</option>
	<option>レギンス</option>
	<option>ブーツ</option>
	<option>盾</option>
	<option>エリトラ</option>
	<option>ハサミ</option>
	<option>火打ち石と打ち金</option>
	<option>トライデント</option>

    </datalist>
    <input type="submit" value="検索">
  </form>

  
  
  <?php
   
  $enctool =filter_input(INPUT_POST,'enctool');  

  if(isset($enctool)){
      //array_search("検索値","検索する配列")　→　配列の中で何番目の値か
      //array_column($配列,$取り出すカラム名の文字列　→配列の中で文字列が何番目か
      //　　 1.array_column($aryCsv,0) …　$aryCsvの配列データの中で[0]のデータを配列として出す
      //   2.array_search($enctool,array_column(　…　　1の[0]のデータのみを抽出した配列から$enctoolが何番目かを出す
      
    $arySearch = array_search($enctool,array_column($aryCsv,0));
    if($arySearch !== false){
//         //エンチャントがいくつあるか調査
        for($i=0; $i<11; $i++ ) {
            $count = ($i*3)+1;
                       
            if($aryCsv[$arySearch][$count]==""){
                break;
            }
        }
        
        //1つ目のアイテムでのエンチャント（レベル・競合）が何行目か、を繰り返す
        for($i2=0; $i2<$i; $i2++){
        
            $enc = ($i2*3)+1 ;
            $result_enc = $aryCsv[$arySearch][$enc];
            
            $maxlv = ($i2*3)+2;
            $result_maxlv = $aryCsv[$arySearch][$maxlv];
            
            $exist = ($i2*3)+3;
            $result_exist = $aryCsv[$arySearch][$exist];
            
            //エンチャント名の文字数を取得
            $encstr=mb_strlen($result_enc);
            $space_count= 9-$encstr;
            
            $result_space="";
            
            for($i3=0; $i3<$space_count; $i3++){
                $space = "　";
                $result_space .= $space;
                
            }
            
            if(($i2==0)&&($arySearch !== false)){
                echo "<b>$enctool</b>"."に付与できるエンチャント<br>";
                echo "<font size=2>　　※同じマーク（＊,〇）の付いているエンチャントは競合します。</font><br><br>";
            }
            
            $enc1 = array_search($result_enc,array_column($aryCsv,0));
            $enc2 = $aryCsv[$enc1][1];
            $encfile = $enc2.".php";
            
            echo "・"."<a href =\"enchant/$encfile\" >$result_enc</a>".$result_space."最大Lv.：".$result_maxlv.
                 "　  "."<font color=red>$result_exist</font><br>";
            
            //次のエンチャントの種類（ループ）に繰り越さないようリセット
            $result_space="";
        }
        
    }else{
        $alert = "<script type ='text/javascript'>alert('入力内容を確認してください');</script>";
        echo $alert;
    }
    
 }

?>
<br>
<a href="enchantSearch.php">エンチャント検索画面に戻る</a><br>
<a href="main.php">メイン画面に戻る</a>
</html>
