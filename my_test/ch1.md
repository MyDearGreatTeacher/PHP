
lab1:PHP 程式嵌入 HTML 網頁
----------------------------------

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
----------------------------------

----------------------------------
lab2:
----------------------------------

demo.inc
----------------------------------

```
<?php
  echo("Hello World!");
  phpinfo();
?>
```
使用include_once()函式呼叫 demo.inc

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
--- 


----------------------------------
lab3:
----------------------------------

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


----------------------------------
lab2:
----------------------------------




----------------------------------
lab2:
----------------------------------





