
# PHP陣列相關函式

```
array() 創建陣列。 
array_change_key_case() 返回其鍵均為大寫或小寫的陣列。 
array_chunk() 把一個陣列分割為新的陣列塊。 
array_combine() 通過合併兩個陣列來創建一個新陣列。 
array_count_values() 用於統計陣列中所有值出現的次數。 
array_diff() 返回兩個陣列的差集陣列。 
array_diff_assoc() 比較鍵名和鍵值，並返回兩個陣列的差集陣列。 
array_diff_key() 比較鍵名，並返回兩個陣列的差集陣列。 
array_diff_uassoc() 通過使用者提供的回呼函數做索引檢查來計算陣列的差集。 
array_diff_ukey() 用回呼函數對鍵名比較計算陣列的差集。 
array_fill() 用給定的值填充陣列。 
array_filter() 用回呼函數過濾陣列中的元素。 
array_flip() 交換陣列中的鍵和值。 
array_intersect() 計算陣列的交集。 
array_intersect_assoc() 比較鍵名和鍵值，並返回兩個陣列的交集陣列。 
array_intersect_key() 使用鍵名比較計算陣列的交集。 
array_intersect_uassoc() 帶索引檢查計算陣列的交集，用回呼函數比較索引。 
array_intersect_ukey() 用回呼函數比較鍵名來計算陣列的交集。 
array_key_exists() 檢查給定的鍵名或索引是否存在於陣列中。 
array_keys() 返回陣列中所有的鍵名。 
array_map() 將回呼函數作用到給定陣列的單元上。 
array_merge() 把一個或多個陣列合併為一個陣列。 
array_merge_recursive() 遞迴地合併一個或多個陣列。 
array_multisort() 對多個陣列或多維陣列進行排序。 
array_pad() 用值將陣列填補到指定長度。 
array_pop() 將陣列最後一個單元彈出（出棧）。 
array_product() 計算陣列中所有值的乘積。 
array_push() 將一個或多個單元（元素）壓入陣列的末尾（入棧）。 
array_rand() 從陣列中隨機選出一個或多個元素，並返回。 
array_reduce() 用回呼函數反覆運算地將陣列簡化為單一的值。 
array_reverse() 將原陣列中的元素順序翻轉，創建新的陣列並返回。 
array_search() 在陣列中搜索給定的值，如果成功則返回相應的鍵名。 
array_shift() 刪除陣列中的第一個元素，並返回被刪除元素的值。 
array_slice() 在陣列中根據條件取出一段值，並返回。 
array_splice() 把陣列中的一部分去掉並用其它值取代。 
array_sum() 計算陣列中所有值的和。 
array_udiff() 用回呼函數比較資料來計算陣列的差集。 
array_udiff_assoc() 帶索引檢查計算陣列的差集，用回呼函數比較資料。 
array_udiff_uassoc() 帶索引檢查計算陣列的差集，用回呼函數比較資料和索引。 
array_uintersect() 計算陣列的交集，用回呼函數比較資料。 
array_uintersect_assoc() 帶索引檢查計算陣列的交集，用回呼函數比較資料。 
array_uintersect_uassoc() 帶索引檢查計算陣列的交集，用回呼函數比較資料和索引。 
array_unique() 刪除陣列中重複的值。 
array_unshift() 在陣列開頭插入一個或多個元素。 
array_values() 返回陣列中所有的值。 
array_walk() 對陣列中的每個成員應用使用者函數。 
array_walk_recursive() 對陣列中的每個成員遞迴地應用使用者函數。 
arsort() 對陣列進行逆向排序並保持索引關係。 
asort() 對陣列進行排序並保持索引關係。 
compact() 建立一個陣列，包括變數名和它們的值。 
count() 計算陣列中的元素數目或物件中的屬性個數。 
current() 返回陣列中的當前元素。 
each() 返回陣列中當前的鍵／值對並將陣列指標向前移動一步。 
end() 將陣列的內部指標指向最後一個元素。 
extract() 從陣列中將變數導入到當前的符號表。 
in_array() 檢查陣列中是否存在指定的值。 
key() 從關聯陣列中取得鍵名。 
krsort() 對陣列按照鍵名逆向排序。 
ksort() 對陣列按照鍵名排序。 
list() 把陣列中的值賦給一些變數。 
natcasesort() 用“自然排序”演算法對陣列進行不區分大小寫字母的排序。 
natsort() 用“自然排序”演算法對陣列排序。 
next() 將陣列中的內部指標向前移動一位。 
pos() current() 的別名。 
prev() 將陣列的內部指標倒回一位。 
range() 建立一個包含指定範圍的元素的陣列。 
reset() 將陣列的內部指標指向第一個元素。 
rsort() 對陣列逆向排序。 
shuffle() 把陣列中的元素按隨機順序重新排列。 
sizeof() count() 的別名。 
sort() 對陣列排序。 
uasort() 使用使用者自訂的比較函數對陣列中的值進行排序並保持索引關聯。 
uksort() 使用使用者自訂的比較函數對陣列中的鍵名進行排序。 
usort() 使用使用者自訂的比較函數對陣列中的值進行排序。
```

### 執行下列程式並說明下列程式功能為何?
```
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
```
輸出結果

Array ( [0] => 10 [1] => 8 [2] => 6 [3] => 5 [4] => 3 [5] => 2 )

使用for迴圈，實現冒泡排序
