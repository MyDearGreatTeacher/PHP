
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




lab2:
----------------------------------




----------------------------------
lab2:
----------------------------------





