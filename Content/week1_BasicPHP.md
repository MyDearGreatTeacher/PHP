
### PHP
>* PHP是Hypertext Preprocessor（超文字前置處理器）的縮寫
>* PHP是一種伺服器端、跨平臺、HTML嵌入式的指令碼語言
>*  PHP獨特的語法混合了C語言、Java語言和Perl語言的特點，是一種被廣泛應用的開源式的多用途指令碼語言，尤其適合Web開發。

### 第一支php程式

```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>第一個PHP程式</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style>
</head>

<body>
<?php
	echo "歡迎進入龍大大的PHP學習中心！！";
?>
</body>
</html>
```

### PHP標記風格

PHP和其他幾種Web語言一樣，都是使用一對標記對將PHP代碼部分包含起來，以便和html代碼相區分。

PHP支持4種標記風格:

[1]XML風格{推薦使用}
```
<?php 
	echo "這是XML風格的標記"; 
?>
```
伺服器不能禁用。該風格的標記在XML、XHTML中都可以使用。 

[2]腳本風格
```
<script language="php">
	echo '這是腳本風格的標記'; 
</script>
```
[3]簡短風格
```
<? echo '這是簡短風格的標記'; ?>
```   
[4]ASP風格
```
<% 
echo '這是ASP風格的標記'; 
%>
```
```
如果要使用簡短風格和ASP風格，需要在php.ini中對其進行配置。
該文件在系統磁片Windows目錄下，如作業系統在C，那麼該文件的位置就是C:\Windows\php.ini。

如果用戶用的是AppServ安裝包，那麼通過選擇“開始”/
“程式”/appServ/Configuration Server/PHP Edit the php.ini configuration File命令，也可以打開php.ini文件，
然後將short_open_tag和asp_tags都設置為ON，重啟Apache伺服器即可。
```

### PHP注釋

>* 注釋==代碼的解釋和說明，用來說明代碼或函數的編寫人、用途、時間等。
>* 一般放到代碼的上方或代碼的尾部（放尾部時，代碼和注釋之間以<Tab>鍵進行分隔，以方便程式閱讀）
>* 注釋不會影響到程式的執行，因為在執行時，注釋部分會被解譯器忽略不計 

PHP支持3種風格的程式注釋

[1]C++風格的單行注釋（//）
```
<?php
echo '使用C++風格';	//這就是C++風格
?>
```
[2]C風格的多行注釋（/*…*/）
```
<?php
/*C
風格的
多行注釋
*/
echo '只會看到這句話。';
?>
```
注意：多行注釋是不允許進行嵌套操作的。

[3]Shell風格的注釋（#）
```
<?php
echo '這是Shell腳本風格的注釋';		#這裡的內容是看不到的
?>
```
注意：在單行注釋中的內容不要出現“?>”標誌，因為解譯器會認為PHP腳本結束，而去執行“?>”後面的代碼 


### PHP資料型態(DATA TYPE)
```
PHP一共支持8種原始類型：
  4種純量類型: boolean（布林型） integer（整型） float/double（浮點型） string（字串型）
  兩種複合類型: array（陣列） object（對象）
  兩種特殊類型: resource（資源） NULL(空值) 
```

###### boolean 布林型資料型態
```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>布林類型示例</title>
<style type="text/css">
<!--
body,td,th {
        font-size: 12px;
}
body {
        margin-left: 10px;
        margin-top: 10px;
        margin-right: 10px;
        margin-bottom: 10px;
}
-->
</style></head>
<body>
<div align="center">
<?php
        $boo = true;
        if($boo == true)
                echo '變數$boo為真!';
echo 'CTF{這不是答案}';
        else
                echo '變數$boo為假!!';
                echo 'CTF{Ohhhhhhhaaaaaa}';
?>
</div>
</body>
</html>

```
