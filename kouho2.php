    
    <?php
    $listItem = $_POST['listItem'];
    $freeItem = $_POST['freeItem'];
    
//     echo $listItem;
//     echo $freeItem;
    
    if($listItem=="noselect"){
        echo $listItem."選択されていません";
    }else{
        echo $freeItem."選択失敗しているみたい";
    }
?>
<br>    
<html>
  <a href="kouho.php" >もどる</a>
</html>
    
    