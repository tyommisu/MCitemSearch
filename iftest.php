<?php
$matl1="1";
$matl2="";
$matl3="";
$matl4="";
$matl5="5";
$matl6="6";

if($matl1!=""){
    echo $matl1."<br>";
    if($matl2!=""){
        echo $matl2."<br>";
        if($matl3!=""){
            echo $matl3."<br>";
           if($matl4!=""){
               echo $matl4."<br>";
               if($matl5!=""){
                   echo $matl5."<br>";
                   if($matl6!=""){
                       echo $matl6."<br>";
                       echo "　材料1：".$matl6." / 個<br>";
                   }else{
                       echo "6つめのエラー<br>";
                   }
               }else{
                   echo "5つめのエラー<br>";
               }
           }else{
               echo "4つめのエラー<br>";
           }
        }else{
            echo "3つめのエラー<br>";
        }
    }else{
        echo "2つ目のエラー<br>";
    }
    
}else{
    echo "1つめのエラー<br>";
}

echo "最後尾文字";
?>
