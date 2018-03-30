
### lab1:PHP 程式嵌入 HTML 網頁

```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>我的第一個PHP程式</title>
  </head>
  <body>
    <?php
      echo("Hello World!");
      phpinfo();
    ?>
  </body>
</html>
```

### lab2:

[1]PHP 程式放在外部檔案 demo.inc 

```
<?php
  echo("Hello World!");
  phpinfo();
?>
```
[2]使用include_once()函式呼叫 demo.inc

```
<!doctype html> 
<html>
  <head>
    <meta charset="utf-8">
    <title>我的第一個PHP程式</title>
  </head>
  <body>
    <?php
      include_once("demo.inc");
    ?>
  </body>
</html>
```

### 程式碼撰寫慣例 

>* 英文字母大小寫

	 PHP 會區分變數名稱與常數名稱的英文字母大小寫，不會區分內建函式或保留字的英文字母大小寫。

>* 空白字元::PHP 會忽略多餘的空白字元。

>* 分號::PHP 程式的每行敘述結尾要加上分號  (;)

>* 單行註解:PHP 提供  //  和  #  兩種單行註解符號

>* 多行註解:PHP 提供  /* */  一種符號

>* 保留字

### lab3:

```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>我的第一個PHP程式</title>
  </head>
  <body>
    <?php
      echo("<h1><b><i>Hello World!</i></b></h1>");
    ?>
  </body>
</html>
```

## PHP的資料型態與運算子

PHP 支援下列八種型別： 

 純量型別  (scalar type) : 整數 integer | 浮點數 (float、double) | 布林 boolean | 字串 string | 

 特殊型別  (special type) :: NULL  資源  (resource) 
 
>* 資料型態為 NULL 的變數:只有一種值－常數 NULL 

>*  資源(resource)資料型態::代表的是一種特殊值，用來指向 PHP 程式的外部資源
```
$my_resource = mysql_connect();
```


複合型別 (compound type) ::陣列  (array) | 物件  (object) 


#### 字串  (string) :由字母、數字、文字、符號所組成的單字、片語或句子

可使用下列四種方法指定字串： 

>* 單引號字串  (single quoted string)   echo('C:\\Win');  echo('生日快樂！');

>* 雙引號字串  (double quoted string)    $str = "Mary";//將變數str設定為字串 "Mary" (變數的名稱前面必須加上$)

>* heredoc 語法 :由 <<< 運算子開始+ 一個識別字(STR1) + 換行+ 字串+最後以同一個識別字(STR1)結尾
```
<?php
      echo <<< STR1
My name is Jean.<br>
Happy birthday to You!
STR1;
    ?>
```
>* nowdoc 語法 

### 檢查是否為某種資料型態的函式

gettype(arg) 

is_integer(arg)、is_int(arg)、is_long(arg) 、is_float(arg)、is_real(arg)、is_bool(arg)、is_string(arg)、is_null(arg)

is_resource(arg)、 is_array(arg)、 is_object(arg)、 is_numeric(arg)、 is_scalar(arg) 

### 資料型態的轉換


## 變數與常數

### 使用者自訂常數:

使用 define()  函式  define("PI", 3.14); 

### 預先定義的常數predefined constant

 PHP 內建數個預先定義的常數  (predefined constant)

` __LINE__ `  檔案的行數

`  __FILE__ `檔案名稱與完整路徑
  
`  __DIR__ `檔案所在的目錄
  
 ` __FUNCTION__` 函式名稱

`  __CLASS__` 類別名稱
  
`  __METHOD__` 方法名稱

 ` __NAMESPACE__` 命名空間名稱

``` 
//constants.php
<!doctype html>
<html>
	<head>
	  <meta charset="utf-8">
	</head>
  <body>
    <?php
      echo __FILE__;
      echo "<br>";
      echo __DIR__;
    ?>
  </body>
</html>
```

## PHP的運算子

>* 算術運算子

>* 字串運算子(.):連接字串
```
$a = "PHP" . "7";		//將變數a的值設定為字串 "PHP7"
$b = "PHP" . 7;		//將變數b的值設定為字串 "PHP7”
```

>* 遞增/遞減運算子

>* 比較運算子

>* 邏輯運算子: AND | OR | XOR

>* 位元運算子::^

>* 指派運算子

>* 條件運算子  ? :  是一個三元運算子

>* 錯誤控制運算子  @  ::在運算式的前面加上錯誤控制運算子  @  時，運算式所可能產生的錯誤訊息將會被忽略
```

```
>* 執行運算子  `  `  ::用途是執行 shell 命令

```
//exe_op.php
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $a = `dir`;
      echo "<pre>$a</pre>"; 
    ?>
  </body>
</html>

```

## 運算子的優先順序 

##  PHP 的輸出函式

>* echo str1 [, str2 [, str3…]]
```
//output1.php
<?php
 echo '<i>Hello!</i><br>';
 echo '生日', '快樂', '<br>';
 echo '<a href="defualt.htm">回首頁</a>';
?>
```
>* print str

>* var_dump(var1 [, var2 [, var3…]])

PHP var_dump 函式的功能是用來印出變數的相關訊息於螢幕上，例如變數的值或是變數的種類，var_dump 可以判斷一般字串變數以及陣列變數

使用方式很簡單，僅需將要印出的變數填入 var_dump 函式即可，函式會直接輸出結果，沒有返回值。
```
//var_dump.php
<!doctype html> 
<html>
	<head>
		<meta charset="utf-8">
	</head>	
  <body>
    <?php
      $a = 1.1;
      $b = TRUE;
      $c = 'Hello!';
      var_dump($a, $b, $c);
    ?>
  </body>
</html>

```

var_dump 函式可一次處理多個變數
```
<?php
　$EX_A = array(8,9,array('apple','orange'));
　$EX_B = 6.8;
　var_dump($EX_A,$EX_B);
?>
```
