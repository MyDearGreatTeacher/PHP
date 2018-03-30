
<?php
$arr = array(5,3,6,2,8,10);
for($i = count($arr)-1;$i>=0;$i--){
    for($j = 0 ; $j < $i ; $j++){
        if($arr[$j+1] > $arr[$j] ){
            $aa = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $aa;
        }
    }
}
print_r($arr);
?>

輸出結果

Array ( [0] => 10 [1] => 8 [2] => 6 [3] => 5 [4] => 3 [5] => 2 )
