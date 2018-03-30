
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

### lab3:

--- 
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
--- 

----------------------------------
lab2:
----------------------------------




----------------------------------
lab2:
----------------------------------





