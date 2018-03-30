
# PHP陣列相關函式(依照功能劃分)
```
1.陣列的存在和意義：便於資料操作.允許用多種方法來運算元組和與之交互。陣列的本質是儲存，管理和操作一組變數
PHP 中的陣列實際上是一個有序圖。圖是一種把 values 映射到 keys的類型。此類型在很多方面做了優化，因此可以把它
當成真正的陣列來使用，或清單（向量），散列表（是圖的一種實現），字典，集合，棧，佇列以及更多可能性。因為可以
用另一個 PHP 陣列作為值，也可以很容易地模擬樹.

2.陣列的生成:
1> array();
3> compact(mixed varname [, mixed ...])	建立一個陣列，包括變數名和它們的值(由變數組成的陣列);
4> array range (mixed low, mixed high [,number step]) 建立一個包含指定範圍單元的陣列
5> array_fill( int start_index, int num, mixed value ) 用給定的值填充陣列 
6> array array_pad ( array input, int pad_size, mixed pad_value ):用值將陣列填補到指定長度

3.對陣列的處理；
1>
array_chunk( array input, int size [, bool preserve_keys] )：將一個陣列分割成多個
array array_count_values (array input)：統計陣列中所有的值出現的次數
array array_unique(array array)：移除數組中重複的值
int count (mixed var [,int mode]) :計算陣列中的單元數目或物件中的屬性個數(mode 為1 可以無限遞迴)
sizeof -- count() 的別名 

array array_map ( callback callback, array arr1 [, array ...] ):將回呼函數作用到給定陣列的單元上
bool array_walk ( array &array, callback funcname [, mixed userdata] ):對陣列中的每個成員應用使用者函數
bool array_walk_recursive ( array &input, callback funcname [, mixed userdata] )
對陣列中的每個成員遞迴地應用使用者函數(多維陣列也適用)

int array_unshift ( array &array, mixed var [, mixed ...] ):在陣列開頭插入一個或多個單元
mixed array_shift ( array &array ):將陣列開頭的單元移出陣列
int array_push ( array &array, mixed var [, mixed ...] ):將一個或多個單元壓入陣列的末尾（入棧）
mixed array_pop ( array &array ):將陣列最後一個單元彈出（出棧）

array array_slice ( array array, int offset [, int length [, bool preserve_keys]] )
:從陣列中取出一段
array array_splice ( array &input, int offset [, int length [, array replacement]] )
:把陣列中的一部分去掉並用其它值取代

mixed array_reduce ( array input, callback function [, int initial] ):用回呼函數反覆運算地將陣列簡化為單一的值
number array_product ( array array ):計算陣列中所有值的乘積
number array_sum ( array array ):將陣列中的所有值的和以整數或浮點數的結果返回。

2>查找數據;
bool array_key_exists ( mixed key, array search ):檢查給定的鍵名或索引是否存在於陣列中
bool isset ( mixed var [, mixed var [, ...]] ):檢測變數是否設置
bool in_array ( mixed needle, array haystack [, bool strict] ):檢查陣列中是否存在某個值
mixed array_search ( mixed needle, array haystack [, bool strict] ):在陣列中搜索給定的值，如果成功則返回相應的鍵名
mixed array_rand ( array input [, int num_req] ):從陣列中隨機取出一個或多個單元

3> 陣列指標操作
mixed reset ( array &array ): 將陣列的內部指標指向第一個單元
mixed end ( array &array ):將陣列的內部指標指向最後一個單元
mixed prev ( array &array ):將陣列的內部指標倒回一位
mixed next ( array &array ):將陣列中的內部指標向前移動一位
mixed current ( array &array ):回陣列中的當前單元
pos -- current() 的別名
mixed key ( array &array ):返回陣列中當前單元的鍵名
void list ( mixed varname, mixed ... ):把陣列中的值賦給一些變數
array each ( array &array ):回陣列中當前的鍵／值對並將陣列指標向前移動一步

3>陣列排序;
bool usort ( array &array, callback cmp_function ):使用使用者自訂的比較函數對陣列中的值進行排序
bool uksort ( array &array, callback cmp_function ):使用使用者自訂的比較函數對陣列中的鍵名進行排序
bool uasort ( array &array, callback cmp_function ):使用使用者自訂的比較函數對陣列中的值進行排序並保持索引關聯
bool sort ( array &array [, int sort_flags] ):對陣列排序
bool rsort ( array &array [, int sort_flags] ): 對陣列逆向排序
bool arsort ( array &array [, int sort_flags] ):對陣列進行逆向排序並保持索引關係
bool ksort ( array &array [, int sort_flags] ):對陣列按照鍵名排序
bool krsort ( array &array [, int sort_flags] ):對陣列按照鍵名逆向排序
bool natsort ( array &array ):用“自然排序”演算法對陣列排序
bool natcasesort ( array &array ):用“自然排序”演算法對陣列進行不區分大小寫字母的排序
bool shuffle ( array &array ):本函數打亂（隨機排列單元的順序）一個陣列。
bool array_multisort ( array ar1 [, mixed arg [, mixed ... [, array ...]]] ):對多個陣列或多維陣列進行排序

4。對陣列中資料處理;
array_values ( array input )：返回陣列的值;
array_keys(array input [, mixed search_value [, bool strict]]) 函數：返回陣列的索引;
1> 對陣列鍵名的處理;
array_change_key_case ( array input [, int case] ) [CASE_UPPER | CASE_LOWER[default]]
返回字串鍵名全為小寫或大寫的陣列
2> 資料處理;
array array_filter ( array input [, callback callback] ):用回呼函數過濾陣列中的單元;
array array_flip ( array trans ):交換陣列中的鍵和值.
array array_reverse ( array array [, bool preserve_keys] ):返回一個單元順序相反的陣列

5.陣列比較
1>.差集
array array_diff ( array array1, array array2 [, array ...] ):計算陣列的差集
array array_udiff ( array array1, array array2 [, array ..., callback data_compare_func] )
用回呼函數比較資料來計算陣列的差集
array array_diff_assoc ( array array1, array array2 [, array ...] ) :帶索引檢查計算陣列的差集
array array_diff_uassoc ( array array1, array array2 [, array ..., callback key_compare_func] )
用使用者提供的回呼函數做索引檢查來計算陣列的差集
array array_udiff_uassoc ( array array1, array array2 [, array ..., callback data_compare_func, callback key_compare_func] ): 帶索引檢查計算陣列的差集，用回呼函數比較資料和索引
array array_diff_key ( array array1, array array2 [, array ...] ):使用鍵名比較計算陣列的差集
array array_diff_ukey ( array array1, array array2 [, array ..., callback key_compare_func] )
:用回呼函數對鍵名比較計算陣列的差集

2.交集
array array_intersect ( array array1, array array2 [, array ...] ):計算陣列的交集
array array_uintersect ( array array1, array array2 [, array ..., callback data_compare_func] )
計算陣列的交集，用回呼函數比較資料.
array array_intersect_assoc ( array array1, array array2 [, array ...] ):帶索引檢查計算陣列的交集
array array_uintersect_assoc ( array array1, array array2 [, array ..., callback data_compare_func] )
帶索引檢查計算陣列的交集，用回呼函數比較資料
array array_intersect_uassoc ( array array1, array array2 [, array ..., callback key_compare_func] )
帶索引檢查計算陣列的交集，用回呼函數比較索引
array array_uintersect_uassoc ( array array1, array array2 [, array ..., callback data_compare_func, callback key_compare_func] ):帶索引檢查計算陣列的交集，用回呼函數比較資料和索引
array array_intersect_key ( array array1, array array2 [, array ...] ):使用鍵名比較計算陣列的交集
array array_intersect_ukey ( array array1, array array2 [, array ..., callback key_compare_func] )
:用回呼函數比較鍵名來計算陣列的交集
3.並集;
array array_merge ( array array1 [, array array2 [, array ...]] ):
將一個或多個陣列的單元合併起來，一個陣列中的值附加在前一個陣列的後面。返回作為結果的陣列。
array array_merge_recursive ( array array1 [, array ...] )
將一個或多個陣列的單元合併起來，一個陣列中的值附加在前一個陣列的後面。返回作為結果的陣列。 
array array_combine(array keys, array values)(php5) 函數;
將兩個陣列資料合併生成一個新的陣列。一個陣列值為新陣列的索引，一個陣列為陣列的值 ,必須是一維陣列;



6.陣列消除;
unset(array)

6.陣列和其他類型資料轉換;
int extract ( array var_array [, int extract_type [, string prefix]]):陣列中將變數導入到當前的符號表;

7.陣列相關函數;
explode(string separator, string string):將字元轉換為陣列;
implode(string separator, array array):將陣列轉換為字串;

8.陣列運行符;


陣列加
$a + $b $a 和 $b 的聯合。
陣列比較
$a == $b	如果 $a 和 $b 具有相同的鍵／值對則為 TRUE。
全等
$a === $b	如果 $a 和 $b 具有相同的鍵／值對並且順序和類型都相同則為 TRUE。
不等
$a != $b / $a <> $b	如果 $a 不等於 $b 則為 TRUE。	
不全等
$a !== $b	如果 $a 不全等於 $b 則為 TRUE。
```

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
