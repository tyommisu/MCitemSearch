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

//配列に格納されたか確認
//print_r($aryCsv);

?>

<html>
  <form action="" method="post">
    リストから検索<br>
    <select name = "listItem">
    　　　<option value="noselect">--選択してください--</option>
      <optgroup label="建築・装飾ブロック">
<option>花崗岩</option>
<option>磨かれたブロック</option>
<option>閃緑岩</option>
<option>安山岩</option>
<option>鍾乳石ブロック（ドリップストーンブロック）</option>
<option>粗い土（荒れた土）</option>
<option>板材</option>
<option>原石ブロック</option>
<option>アメジストブロック</option>
<option>鉱石ブロック</option>
<option>切込み入りの銅</option>
<option>錆止めされた銅ブロック</option>
<option>泥だらけのマングローブの根</option>
<option>木ブロック</option>
<option>遮光ガラス（着色ガラス）</option>
<option>砂岩</option>
<option>模様入りのブロック</option>
<option>研がれた砂岩</option>
<option>白色の羊毛（白のウール）</option>
<option>色付きの羊毛</option>
<option>ハーフブロック</option>
<option>レンガ系ブロック</option>
<option>本棚</option>
<option>苔むしたブロック</option>
<option>プルプァブロック</option>
<option>プルプァの柱</option>
<option>雪ブロック</option>
<option>粘土ブロック</option>
<option>ジャック・オ・ランタン</option>
<option>グロウストーン</option>
<option>固めた泥</option>
<option>深層岩タイル（ディープスレートタイル）</option>
<option>スイカ</option>
<option>クォーツブロック</option>
<option>クォーツの柱（柱状のクォーツのブロック）</option>
<option>色付きのテラコッタ</option>
<option>干草の俵</option>
<option>氷塊</option>
<option>色付きのガラス（ステンドグラス）</option>
<option>プリズマリン（海晶ブロック）</option>
<option>プリズマリンレンガ（海晶レンガ）</option>
<option>ダークプリズマリン（暗海晶ブロック）</option>
<option>シーランタン（海のランタン）</option>
<option>マグマブロック</option>
<option>ネザーウォートブロック</option>
<option>赤いネザーレンガ</option>
<option>骨ブロック</option>
<option>コンクリートパウダー</option>
<option>青氷</option>
<option>階段</option>
<option>乾燥した昆布ブロック</option>
<option>松明</option>
<option>エンドロッド（果てのロッド）</option>
<option>チェスト</option>
<option>作業台</option>
<option>かまど</option>
<option>はしご</option>
<option>雪（積雪）</option>
<option>ジュークボックス</option>
<option>フェンス（柵）</option>
<option>魂の松明</option>
<option>鉄格子</option>
<option>鎖（チェーン）</option>
<option>ガラス板</option>
<option>ネザーレンガのフェンス（ネザーレンガの柵）</option>
<option>エンチャントテーブル</option>
<option>エンダーチェスト</option>
<option>塀（壁）</option>
<option>金床</option>
<option>カーペット</option>
<option>色付きのカーペット</option>
<option>色付きガラス板（ステンドグラス窓）</option>
<option>シュルカーボックス</option>
<option>色付きのシュルカーボックス</option>
<option>足場</option>
<option>絵画（絵）</option>
<option>看板</option>
<option>ベッド</option>
<option>色付きのベッド</option>
<option>額縁</option>
<option>輝く額縁（発光する額縁）</option>
<option>植木鉢</option>
<option>防具立て</option>
<option>旗</option>
<option>エンドクリスタル（果てのクリスタル）</option>
<option>機織り機（織機）</option>
<option>コンポスター</option>
<option>樽</option>
<option>燻製器</option>
<option>溶鉱炉</option>
<option>製図台</option>
<option>矢細工台</option>
<option>砥石（石臼）</option>
<option>鍛冶台</option>
<option>石切台（ストーンカッター）</option>
<option>ランタン</option>
<option>焚き火</option>
<option>養蜂箱（ハチの巣箱）</option>
<option>ハニカムブロック</option>
<option>ロードストーン（ロデストーン）</option>
<option>リスポーンアンカー</option>
<option>ろうそく</option>
<option>色付きのろうそく</option>
</optgroup>
<optgroup label="レッドストーン">
<option>レッドストーントーチ（レッドストーンのたいまつ）</option>
<option>レッドストーンリピーター（レッドストーン反復装置）</option>
<option>レッドストーンコンパレーター</option>
<option>ピストン</option>
<option>粘着ピストン（吸着ピストン）</option>
<option>スライムブロック</option>
<option>ハチミツブロック（ハチのブロック）</option>
<option>オブザーバー（観察者）</option>
<option>ホッパー</option>
<option>ディスペンサー（発射装置）</option>
<option>ドロッパー</option>
<option>書見台</option>
<option>的（ターゲット）</option>
<option>レバー</option>
<option>避雷針</option>
<option>日照センサー</option>
<option>トリップワイヤーフック</option>
<option>トラップチェスト</option>
<option>TNT</option>
<option>レッドストーンランプ</option>
<option>音符ブロック（音ブロック）</option>
<option>ボタン</option>
<option>感圧板</option>
<option>ドア</option>
<option>鉄のトラップドア</option>
<option>木製のトラップドア</option>
<option>フェンスゲート（柵のゲート）</option>
</optgroup>
<optgroup label="運送">
<option>パワードレール（加速レール）</option>
<option>ディテクターレール（感知レール）</option>
<option>レール</option>
<option>アクティベーターレール</option>
<option>トロッコ</option>
<option>アイテム付きトロッコ</option>
<option>アイテム付きの棒</option>
<option>ボート</option>
<option>チェスト付きのボート</option>
</optgroup>
<optgroup label="素材・その他アイテム">
<option>ビーコン</option>
<option>コンジット</option>
<option>鉱石</option>
<option>鉄・金インゴット</option>
<option>原石</option>
<option>ネザライトインゴット</option>
<option>棒</option>
<option>ボウル（おわん）</option>
<option>小麦</option>
<option>バケツ</option>
<option>革</option>
<option>紙</option>
<option>本</option>
<option>スライムボール</option>
<option>染料</option>
<option>骨粉</option>
<option>砂糖</option>
<option>カボチャの種</option>
<option>スイカの種</option>
<option>金塊・鉄塊</option>
<option>エンダーアイ</option>
<option>ファイヤーチャージ（発火剤）</option>
<option>本と羽根ペン</option>
<option>白紙の地図（まっさらな地図）</option>
<option>ロケット花火</option>
<option>花火の星</option>
<option>革の馬鎧</option>
<option>旗の模様（何かの模様）</option>
</optgroup>
<optgroup label="食料">
<option>キノコシチュー</option>
<option>パン</option>
<option>金のリンゴ</option>
<option>ケーキ</option>
<option>クッキー</option>
<option>パンプキンパイ</option>
<option>ウサギシチュー</option>
<option>ビートルートスープ</option>
<option>ハチミツ入りの瓶（ハニーボトル）</option>
<option>怪しげなシチュー（あやしいシチュー）</option>
</optgroup>
<optgroup label="道具">
<option>火打石と打ち金</option>
<option>シャベル</option>
<option>ツルハシ</option>
<option>斧</option>
<option>クワ</option>
<option>コンパス</option>
<option>リカバリーコンパス</option>
<option>釣竿</option>
<option>時計</option>
<option>望遠鏡</option>
<option>ハサミ</option>
<option>リード</option>
</optgroup>
<optgroup label="武器・防具">
<option>カメの甲羅</option>
<option>弓</option>
<option>矢</option>
<option>剣</option>
<option>ヘルメット</option>
<option>チェストプレート（胸当て）</option>
<option>レギンス（脚甲）</option>
<option>ブーツ</option>
<option>光の矢</option>
<option>ポーションの矢</option>
<option>盾</option>
<option>クロスボウ</option>
<option>ガラス瓶</option>
<option>発酵したクモの目</option>
<option>ブレイズパウダー</option>
<option>マグマクリーム</option>
<option>醸造台（調合台）</option>
<option>大釜</option>
<option>きらめくスイカの薄切り（輝くスイカ）</option>
<option>金のニンジン</option>
</optgroup>

    </select>
    <br><br>
    フリ―ワード検索<br>
    <input type="text"  list="keywords" name = "freeItem">
    <datalist id="keywords" >
<option>花崗岩</option>
<option>磨かれたブロック</option>
<option>閃緑岩</option>
<option>安山岩</option>
<option>鍾乳石ブロック（ドリップストーンブロック）</option>
<option>粗い土（荒れた土）</option>
<option>板材</option>
<option>原石ブロック</option>
<option>アメジストブロック</option>
<option>鉱石ブロック</option>
<option>切込み入りの銅</option>
<option>錆止めされた銅ブロック</option>
<option>泥だらけのマングローブの根</option>
<option>木ブロック</option>
<option>遮光ガラス（着色ガラス）</option>
<option>砂岩</option>
<option>模様入りのブロック</option>
<option>研がれた砂岩</option>
<option>白色の羊毛（白のウール）</option>
<option>色付きの羊毛</option>
<option>ハーフブロック</option>
<option>レンガ系ブロック</option>
<option>本棚</option>
<option>苔むしたブロック</option>
<option>プルプァブロック</option>
<option>プルプァの柱</option>
<option>雪ブロック</option>
<option>粘土ブロック</option>
<option>ジャック・オ・ランタン</option>
<option>グロウストーン</option>
<option>固めた泥</option>
<option>深層岩タイル（ディープスレートタイル）</option>
<option>スイカ</option>
<option>クォーツブロック</option>
<option>クォーツの柱（柱状のクォーツのブロック）</option>
<option>色付きのテラコッタ</option>
<option>干草の俵</option>
<option>氷塊</option>
<option>色付きのガラス（ステンドグラス）</option>
<option>プリズマリン（海晶ブロック）</option>
<option>プリズマリンレンガ（海晶レンガ）</option>
<option>ダークプリズマリン（暗海晶ブロック）</option>
<option>シーランタン（海のランタン）</option>
<option>マグマブロック</option>
<option>ネザーウォートブロック</option>
<option>赤いネザーレンガ</option>
<option>骨ブロック</option>
<option>コンクリートパウダー</option>
<option>青氷</option>
<option>階段</option>
<option>乾燥した昆布ブロック</option>
<option>松明</option>
<option>エンドロッド（果てのロッド）</option>
<option>チェスト</option>
<option>作業台</option>
<option>かまど</option>
<option>はしご</option>
<option>雪（積雪）</option>
<option>ジュークボックス</option>
<option>フェンス（柵）</option>
<option>魂の松明</option>
<option>鉄格子</option>
<option>鎖（チェーン）</option>
<option>ガラス板</option>
<option>ネザーレンガのフェンス（ネザーレンガの柵）</option>
<option>エンチャントテーブル</option>
<option>エンダーチェスト</option>
<option>塀（壁）</option>
<option>金床</option>
<option>カーペット</option>
<option>色付きのカーペット</option>
<option>色付きガラス板（ステンドグラス窓）</option>
<option>シュルカーボックス</option>
<option>色付きのシュルカーボックス</option>
<option>足場</option>
<option>絵画（絵）</option>
<option>看板</option>
<option>ベッド</option>
<option>色付きのベッド</option>
<option>額縁</option>
<option>輝く額縁（発光する額縁）</option>
<option>植木鉢</option>
<option>防具立て</option>
<option>旗</option>
<option>エンドクリスタル（果てのクリスタル）</option>
<option>機織り機（織機）</option>
<option>コンポスター</option>
<option>樽</option>
<option>燻製器</option>
<option>溶鉱炉</option>
<option>製図台</option>
<option>矢細工台</option>
<option>砥石（石臼）</option>
<option>鍛冶台</option>
<option>石切台（ストーンカッター）</option>
<option>ランタン</option>
<option>焚き火</option>
<option>養蜂箱（ハチの巣箱）</option>
<option>ハニカムブロック</option>
<option>ロードストーン（ロデストーン）</option>
<option>リスポーンアンカー</option>
<option>ろうそく</option>
<option>色付きのろうそく</option>
<option>レッドストーントーチ（レッドストーンのたいまつ）</option>
<option>レッドストーンリピーター（レッドストーン反復装置）</option>
<option>レッドストーンコンパレーター</option>
<option>ピストン</option>
<option>粘着ピストン（吸着ピストン）</option>
<option>スライムブロック</option>
<option>ハチミツブロック（ハチのブロック）</option>
<option>オブザーバー（観察者）</option>
<option>ホッパー</option>
<option>ディスペンサー（発射装置）</option>
<option>ドロッパー</option>
<option>書見台</option>
<option>的（ターゲット）</option>
<option>レバー</option>
<option>避雷針</option>
<option>日照センサー</option>
<option>トリップワイヤーフック</option>
<option>トラップチェスト</option>
<option>TNT</option>
<option>レッドストーンランプ</option>
<option>音符ブロック（音ブロック）</option>
<option>ボタン</option>
<option>感圧板</option>
<option>ドア</option>
<option>鉄のトラップドア</option>
<option>木製のトラップドア</option>
<option>フェンスゲート（柵のゲート）</option>
<option>パワードレール（加速レール）</option>
<option>ディテクターレール（感知レール）</option>
<option>レール</option>
<option>アクティベーターレール</option>
<option>トロッコ</option>
<option>アイテム付きトロッコ</option>
<option>アイテム付きの棒</option>
<option>ボート</option>
<option>チェスト付きのボート</option>
<option>ビーコン</option>
<option>コンジット</option>
<option>鉱石</option>
<option>鉄・金インゴット</option>
<option>原石</option>
<option>ネザライトインゴット</option>
<option>棒</option>
<option>ボウル（おわん）</option>
<option>小麦</option>
<option>バケツ</option>
<option>革</option>
<option>紙</option>
<option>本</option>
<option>スライムボール</option>
<option>染料</option>
<option>骨粉</option>
<option>砂糖</option>
<option>カボチャの種</option>
<option>スイカの種</option>
<option>金塊・鉄塊</option>
<option>エンダーアイ</option>
<option>ファイヤーチャージ（発火剤）</option>
<option>本と羽根ペン</option>
<option>白紙の地図（まっさらな地図）</option>
<option>ロケット花火</option>
<option>花火の星</option>
<option>革の馬鎧</option>
<option>旗の模様（何かの模様）</option>
<option>キノコシチュー</option>
<option>パン</option>
<option>金のリンゴ</option>
<option>ケーキ</option>
<option>クッキー</option>
<option>パンプキンパイ</option>
<option>ウサギシチュー</option>
<option>ビートルートスープ</option>
<option>ハチミツ入りの瓶（ハニーボトル）</option>
<option>怪しげなシチュー（あやしいシチュー）</option>
<option>火打石と打ち金</option>
<option>シャベル</option>
<option>ツルハシ</option>
<option>斧</option>
<option>クワ</option>
<option>コンパス</option>
<option>リカバリーコンパス</option>
<option>釣竿</option>
<option>時計</option>
<option>望遠鏡</option>
<option>ハサミ</option>
<option>リード</option>
<option>カメの甲羅</option>
<option>弓</option>
<option>矢</option>
<option>剣</option>
<option>ヘルメット</option>
<option>チェストプレート（胸当て）</option>
<option>レギンス（脚甲）</option>
<option>ブーツ</option>
<option>光の矢</option>
<option>ポーションの矢</option>
<option>盾</option>
<option>クロスボウ</option>
<option>ガラス瓶</option>
<option>発酵したクモの目</option>
<option>ブレイズパウダー</option>
<option>マグマクリーム</option>
<option>醸造台（調合台）</option>
<option>大釜</option>
<option>きらめくスイカの薄切り（輝くスイカ）</option>
<option>金のニンジン</option>

     </datalist><br><br>
     <input type="submit" value="検索"><br><br>
    </form>
    
    <?php
    $listItem = $_POST['listItem'];
    $freeItem = $_POST['freeItem'];
   
    
    if(($listItem!="noselect")&&($freeItem=="")){
        $mainItem = $listItem;
    }elseif (($listItem=="noselect")&&($freeItem!="")){
        $mainItem = $freeItem;
    }else{
        $alert = "<script type ='text/javascript'>alert('入力内容を確認してください');</script>";
        echo $alert;
    }

//材料のリスト
    list( $matl1,$matl2,$matl3,$matl4,$matl5)= array(2,4,6,8,10);
//個数のリスト
    list( $qty1,$qty2,$qty3,$qty4,$qty5) = array(3,5,7,9,11);
//備考のリスト
// list( $note1,$note2,$note3,$note4,$note5) = array(12,13,14,15,16);



if(isset($mainItem)){
    $arySearch = array_search($mainItem,array_column($aryCsv,0));
    if($arySearch !== false){
        //材料1
        $result_matl1 = $aryCsv[$arySearch][$matl1];
        //材料1の個数
        $result_qty1 = $aryCsv[$arySearch][$qty1];
        //材料2
        $result_matl2 = $aryCsv[$arySearch][$matl2];
        $result_qty2 = $aryCsv[$arySearch][$qty2];
        //材料3
        $result_matl3 = $aryCsv[$arySearch][$matl3];
        $result_qty3 = $aryCsv[$arySearch][$qty3];
        //材料4
        $result_matl4 = $aryCsv[$arySearch][$matl4];
        $result_qty4 = $aryCsv[$arySearch][$qty4];
        //材料5
        $result_matl5 = $aryCsv[$arySearch][$matl5];
        $result_qty5 = $aryCsv[$arySearch][$qty5];
        
        echo "<font><b>$mainItem</b></font>"."の材料<br>";
        echo "　材料1：".$result_matl1." / ".$result_qty1."個<br>";
        if($result_matl2!=""){
            echo "　材料2：".$result_matl2." / ".$result_qty2."個<br>";
            if($result_matl3!=""){
                echo "　材料3：".$result_matl3." / ".$result_qty3."個<br>";
                if($result_matl4!=""){                    
                    echo "　材料4：".$result_matl4." / ".$result_qty4."個<br>";
                    if($result_matl5!=""){
                        echo "　材料5：".$result_matl5." / ".$result_qty5."個<br>";
                    }                
                }
            }
        }
    }else{
        $alert = "<script type ='text/javascript'>alert('アイテム名を確認してください');</script>";
        echo $alert;;
    }
 }

?>


