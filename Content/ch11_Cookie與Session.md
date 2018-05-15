# Cookie管理 與 Session管理 


### Cookie管理 


```
1、瞭解Cookie 
2、創建Cookie 
3、讀取Cookie 
4、刪除Cookie 
5、Cookie的生命週期 

```

```
Cookie是一種在遠端流覽器端存儲資料並以此來跟蹤和識別用戶的機制。
簡單地說，Cookie是Web伺服器暫時存儲在使用者硬碟上的一個文字檔，並隨後被Web流覽器讀取。
當用戶再次訪問Web網站時，網站通過讀取Cookies檔記錄這位元訪客的特定資訊（如上次訪問的位置、花費的時間、用戶名和密碼等），
從而迅速作出回應，如在頁面中不需要輸入使用者的ID和密碼即可直接登錄網站等。

文本檔的命令格式如下：
用戶名@網站地址[數字].txt

```

### Cookie的功能
```
Web伺服器可以應用Cookies包含資訊的任意性來篩選並經常性維護這些資訊，以判斷在HTTP傳輸中的狀態。

Cookie常用於以下3個方面：
記錄訪客的某些資訊。如可以利用Cookie記錄使用者訪問網頁的次數，或者記錄訪客曾經輸入過的資訊，
另外，某些網站可以使用Cookie自動記錄訪客上次登錄的用戶名。 

在頁面之間傳遞變數。流覽器並不會保存當前頁面上的任何變數資訊，當頁面被關閉時頁面上的所有變數資訊將隨之消失。

如果使用者聲明一個變數id=8，要把這個變數傳遞到另一個頁面，可以把變數id以Cookie形式保存下來，然後在下一頁通過讀取該Cookie來獲取變數的值。

將所查看的Internet頁存儲在Cookies暫存檔案夾中，可以提高以後流覽的速度。 

```

11.1.3.讀取Cookie 

```
<?php
date_default_timezone_set("Etc/GMT-8");
if(!isset($_COOKIE["visittime"])){		//如果Cookie不存在
 	setcookie("visittime",date("y-m-d H:i:s")); 	//設置一個Cookie變數
	echo "歡迎您第一次訪問網站！"."<br>";		//輸出字串
}else{			//如果Cookie存在
	setcookie("visittime",date("y-m-d H:i:s"),time()+60); 	//設置帶Cookie失效時間的變數
    echo "您上次訪問網站的時間為：".$_COOKIE["visittime"];	//輸出上次訪問網站的時間
	echo "<br>";			//輸出回車符
}
	echo "您本次訪問網站的時間為： ".date("y-m-d H:i:s");	//輸出當前的存取時間
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
```


### 創建Cookie

在PHP中通過setcookie()函數創建Cookie。

```
setcookie()語法格式：
bool setcookie(string name[,string value[,int expire[, string path[,string domain[,int secure]]]]])
```

>* name== Cookie的變數名 可以通過$_COOKIE["cookiename"]調用變數名為cookiename的Cookie
>* value==Cookie變數的值，該值保存在用戶端，不能用來保存敏感性資料
>* 可以通過$_COOKIE["values"]獲取名為values的值 
>* expire ==Cookie的失效時間，expire是標準的UNIX時間標記，可以用time()函數或mktime()函數獲取，單位為秒 
>*  如果不設置Cookie的失效時間，那麼Cookie將永遠有效，除非手動將其刪除 
>* 

### Cookie的生命週期 
```
 如果Cookie不設定時間，就表示它的生命週期為流覽器會話的期間，只要關閉IE流覽器，Cookie就會自動消失。
 這種Cookie被稱為會話Cookie，一般不保存在硬碟上，而是保存在記憶體中。
 
 如果設置了過期時間，那麼流覽器會把Cookie保存到硬碟中，再次打開IE流覽器時會依然有效，直到它的有效期超時。
    
雖然Cookie可以長期保存在用戶端流覽器中，但也不是一成不變的。
因為流覽器最多允許存儲300個Cookie檔，而且每個Cookie檔支援最大容量為4KB；
每個功能變數名稱最多支援20個Cookie，如果達到限制時，流覽器會自動地隨機刪除Cookies。 

```
 
### Session管理 


```
1、瞭解Session 
2、創建會話 
3、Session設置時間 
4、通過Session判斷用戶的操作許可權 


```


```
1．什麼是Session
   Session譯為“會話”，其本義是指有始有終的一系列動作/消息，如打電話時從拿起電話撥號到掛斷電話這一系列過程可以稱為一個Session。
   在電腦專業術語中，Session是指一個終端使用者與交互系統進行通信的時間間隔，通常指從註冊進入系統到登出退出系統所經過的時間。因此，Session實際上是一個特定的時間概念。
2．Session工作原理
   當啟動一個Session會話時，會生成一個隨機且唯一的session_id，也就是Session的檔案名，此時session_id存儲在伺服器的記憶體中，當關閉頁面時此id會自動登出，重新登錄此頁面，會再次生成一個隨機且唯一的id。
3．Session的功能
     Session在Web技術中非常重要。由於網頁是一種無狀態的連接程式，因此無法得知使用者的流覽狀態。通過Session則可記錄使用者的有關資訊，以供使用者再次以此身份對Web伺服器提交要求時作確認。例如，在電子商務網站中，通過Session記錄使用者登錄的資訊，以及使用者所購買的商品，如果沒有Session，那麼使用者每進入一個頁面都需要登錄一次用戶名和密碼。
   另外，Session會話適用於存儲信息量比較少的情況。如果使用者需要存儲的信息量相對較少，並且對存儲內容不需要長期存儲，那麼使用Session把資訊存儲到伺服器端比較合適。  

```


```
創建一個會話需要通過以下步驟：
啟動會話→註冊會話→使用會話→刪除會話
1．啟動會話
   啟動PHP會話的方式有兩種：一種是使用session_start()函數，另一種是使用session_register()函數為會話登錄一個變數來隱含地啟動會話。 
在PHP中有兩種方法可以創建會話。
  通過session_start ()函數創建會話。語法格式如下：
bool session_start(void) ;
  通過session_register()函數創建會話。
    session_register()函數用來為會話登錄一個變數來隱含地啟動會話，但要求設置php.ini檔的選項，將register_globals指令設置為on，然後重新啟動Apache伺服器。

```


```
2．註冊會話
   會話變數被啟動後，全部保存在陣列$_SESSION中。通過陣列$_SESSION創建一個會話變數很容易，只要直接給該陣列添加一個元素即可。
例如，啟動會話，創建一個Session變數並賦予空值，代碼如下：
<?php 
session_start();	//啟動Session				
$_SESSION["admin"] = null; //聲明一個名為admin的變數，並賦空值	
?>
3．使用會話
   首先需要判斷會話變數是否有一個會話ID存在，如果不存在，就創建一個，並且使其能夠通過全域陣列$_SESSION進行訪問。如果已經存在，則將這個已註冊的會話變數載入以供使用者使用。
例如，判斷存儲用戶名的Session會話變數是否為空，如果不為空，則將該會話變數賦給$myvalue，代碼如下：
<?php
if ( !empty ( $_SESSION['session_name']))	//判斷用於存儲用戶名的Session會話變數是否為空
 	 $myvalue = $_SESSION['session_name'] ;//將會話變數賦給一個變數$myvalue
?>

```


```
4．刪除會話
   刪除會話的方法主要有刪除單個會話、刪除多個會話和結束當前會話3種，下面分別進行介紹。
（1）刪除單個會話
   刪除會話變數，同陣列的操作一樣，直接註銷$_SESSION陣列的某個元素即可。
例如，註銷$_SESSION['user']變數，可以使用unset()函數，代碼如下
unset ( $_SESSION['user'] ) ;
（2）刪除多個會話
   如果想要一次登出所有的會話變數，可以將一個空的陣列賦值給$_SESSION，代碼如下：
$_SESSION = array() ; 
（3）結束當前會話
   如果整個會話已經結束，首先應該登出所有的會話變數，然後使用session_destroy()函數清除結束當前的會話，並清空會話中的所有資
源，徹底銷毀Session，代碼如下：
session_destroy() ;

```

Session設置時間 

```
在大多數論壇中都可在登錄時對登錄時間進行選擇，如保存一個星期、保存一個月等。這時就可以通過Cookie設置登錄的失效時間。 
1．用戶端沒有禁止Cookie
（1）使用session_set_cookie_params()設置Session的失效時間，此函數是Session結合Cookie設置失效時間
（2）使用setcookie()函數可對Session設置失效時間
2．用戶端禁止Cookie
   當用戶端禁用Cookie時，Session頁面間傳遞會失效，可以將用戶端禁止Cookie想像成一家大型連鎖超市，如果在其中一家超市內辦理了會員卡，但是超市之間並沒有聯網，那麼會員卡就只能在辦理的那家超市使用。解決這個問題有4種方法：
（1）在登錄之前提醒用戶必須打開Cookie，這是很多論壇的做法。
（2）設置php.ini文件中的session.use_trans_sid = 1，或者編譯時打開-enable-trans-sid選項，讓PHP自動跨頁面傳遞session_id。
（3）通過GET方法，隱藏表單傳遞session_id。
（4）使用檔或者資料庫存儲session_id，在頁面間傳遞中手動調用。  
 

```

通過Session判斷用戶的操作許可權 
```
在大多網站的開發過程中，需要對管理員和普通使用者對操作網站的許可權進行劃分。下面通過具體的實例進行講解。
     首先通過使用者登錄頁面提交的用戶名來驗證用戶操作網站的許可權 。

```
[1]表單

```
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>博客用戶登錄</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
body{ font-size:12px;}
-->
</style>
</head>
<body>
<script language="javascript">
	function check(form){
		if(form.user.value==""){
			alert("請輸入用戶名");form.user.focus();return false;		
		}
		if(form.pwd.value==""){
			alert("請輸入密碼");form.pwd.focus();return false;
		}
		form.submit();
	}
</script>
<form name="form1" method="post" action="default.php">
  <table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/login.jpg"><table width="521" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="262" height="218">&nbsp;</td>
            <td width="259">&nbsp;</td>
          </tr>
          <tr>
            <td height="24" align="right">用戶名：</td>
            <td height="24" align="left"><input name="user" type="text" id="user" size="20"></td>
          </tr>
          <tr>
            <td height="24" align="right">密&nbsp;&nbsp;碼：</td>
            <td height="24" align="left"><input name="pwd" type="password" id="pwd" size="20"></td>
          </tr>
          <tr align="center">
            <td height="24" colspan="2"><input type="submit" name="Submit" value="提交" onClick="return check(form);">
            &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="重填"></td>
          </tr>
          <tr>
            <td height="76" align="right"><span class="style1">超級用戶：tsoft<br>
  密&nbsp;&nbsp;&nbsp;&nbsp;碼：111&nbsp;&nbsp;</span></td>
            <td><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;普通用戶：zts<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;&nbsp;碼：000</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
```

default.php

```
<?php
session_start();
$_SESSION['user']=$_POST['user'];
$_SESSION['pwd']=$_POST['pwd'];
if($_SESSION['user']==""){
  echo "<script language='javascript'>alert('請通過正確的途徑登錄本系統！');history.back();</script>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../CSS/style.css" rel="stylesheet">
<title>通過SESSION判斷用戶的操作許可權</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
*{ font-size:12px;}
-->
</style>
</head>
<body >

<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="258" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center"><TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    <TD  style="WIDTH: 140px; COLOR: red;">當前用戶:&nbsp;<?php if($_SESSION['user']=="tsoft" && $_SESSION['pwd']=="111"){echo "管理員";}else{echo "普通用戶";}?>&nbsp;&nbsp;</TD>
                    <TD width="70"><a href="#">博客首頁</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >我的文章</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >我的相冊</a></TD>
                    <TD width="70">|&nbsp;<a href="#">音樂線上</a></TD>
                    <TD width="70">|&nbsp;<a href="#">修改密碼</a></TD>
                    <?php
					  if($_SESSION['user']=="tsoft" && $_SESSION['pwd']=="111"){
					?>
                    <TD width="70">|&nbsp;<a href="default.php">用戶管理</a></TD>
                    <?php  
					  }
					?>
                </TR>
            </TABLE>
              <br>
              <br>
 女人永遠也不知道男人為什麼不對她說“我愛你”這3個字?     <br>
 <br>
 <br> <br>
因為他們知道並不是不想說，只是他們自己明白，一萬句我愛你用在身上也不夠。 <br>
</TD>
          </TR>
      </TABLE>
      歡迎訪問博客網 請使用IE 6.0 在1024×768解析度下流覽本網站&nbsp;<a href="safe.php">註銷用戶</a></TD>
    </TR> 
</TABLE> 
</body>
</html>

```
```
<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pwd']);
session_destroy();
header("location:index.php");
?>
```

### Session高級應用 


```
1、Session暫存檔案 
2、Session緩存 
3、Session資料庫存儲 
```


```
在伺服器中，如果將所有用戶的Session都保存到臨時目錄中，會降低伺服器的安全性和效率，打開伺服器存儲的網站會非常慢。
【例11.4】 使用PHP函數session_save_path()存儲Session暫存檔案，可緩解因暫存檔案的存儲導致伺服器效率降低和網站打開緩慢的問題。 
```


```
Session的緩存是將網頁中的內容臨時存儲到IE用戶端的Temporary Internet Files資料夾下，並且可以設置緩存的時
間。當第一次流覽網頁後，頁面的部分內容在規定的時間內就被臨時存儲在用戶端的暫存檔案夾中，這樣在下次訪問這個頁面
時，就可以直接讀取緩存中的內容，從而提高網站的流覽效率。
   Session緩存的完成使用的是session_cache_limiter()函
數，其語法如下：
string session_cache_limiter ( [string cache_limiter])
  參數cache_limiter為public或private。同時Session緩存並不是指在伺服器端而是用戶端緩存，在伺服器中沒有顯示。
  緩存時間的設置，使用的是session_cache_expire()函數，其語法如下：
int session_cache_expire ( [int new_cache_expire])
  參數cache_expire是Session緩存的時間數位，單位是分鐘。


```


```
資料庫存儲所使用PHP中的session_set_save_handler()函數 。語法格式如下：
bool session_set_save_handler ( string open, string close, string read, string write, string destroy, string gc)

  open(save_path,session_name) ==>找到Session存儲位址，取出變數名稱 

  close()==>不需要參數，關閉資料庫 

  read(key)==> 讀取Session鍵值，key對應session_id 

  write(key,data)==>其中data對應設置的Session變數 
  
  destroy(key)==>註銷Session對應Session鍵值 

  gc(expiry_time)==>清除過期Session記錄 

```


```
    一般應用參數直接使用變數，但是此函數中參數為6個函數，而且在調用時只是調用函數名稱的字串，下面將分別講解這6個參數（函
數），最後將把這些封裝進類中，等學習完物件導向程式設計後就會有一個非常清晰的印象。 
（1）封裝session_open()函數，連接資料庫，代碼如下：
function _session_open($save_path,$session_name)
{
     global $handle;
     $handle = mysql_connect('localhost','root','root') or die('資料庫連接失敗');		//連接MySQL資料庫
     mysql_select_db('db_database11',$handle) or die('資料庫中沒有此庫名');		//找到資料庫
     return(true);
}


```


```
（2）封裝session_close()函數，關閉資料庫連接，代碼如下：
function _session_close()
{
	global $handle;
	mysql_close($handle);
	return(true);
} 
說明：在這個參數中不需要任何參數，所以不論是Session存儲到資料庫還是檔中，只需返回true即可。但是如果是MySQL資料庫，最好是將資料庫關閉，以保證以後不會出現麻煩。 


```


```
（3）封裝session_read()函數，在函數中設定當前時間的UNIX時間
戳，根據$key值查找Session名稱及內容，代碼如下：
function _session_read($key)
{
	global $handle;	//全域變數$handle連接資料庫
	$time = time();		 //設定當前時間	
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
	$result = mysql_query($sql,$handle);
	$row = mysql_fetch_array($result);
	if ($row){
		return($row['session_data']);			//返回Session名稱及內容
	}else{
		return(false);
	}
}
說明：存儲進資料庫中的session_expiry是UNIX時間戳記。 


```


```
（4）封裝session_write()函數，函數中設定Session失效時間，查找到Session名稱及內容，如果查詢結果為空，則將頁面中Session根據session_id、session_name、失效時間插入資料庫中；如果查詢結果不為空，則根據$key修改資料庫中Session存儲資訊，返回執行結果，代碼如下：
function _session_write($key,$data)
{
	global $handle;
	$time = 60*60;   //設置失效時間
 	$lapse_time = time() + $time; //得到UNIX時間戳記			$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
	$result = mysql_query($sql,$handle);
	if (mysql_num_rows($result) == 0 ) { 	//沒有結果
	$sql = "insert into tb_session values('$key','$data',$lapse_time)";//插入資料庫sql語句
		$result = mysql_query($sql,$handle);
	}else{
		$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";	 //修改資料庫sql語句		$result = mysql_query($sql,$handle);
	}
	return($result);
} 


```



```
（5）封裝session_destroy()函數，根據$key值將資料庫中Session刪除，代碼如下：
function _session_destroy($key)
{
	global $handle;
	$sql = "delete from tb_session where session_key = '$key'";			//刪除資料庫sql語句
	$result = mysql_query($sql,$handle);
	return($result);
} 


```



```
（6）封裝session_gc()函數，根據給出的失效時間刪除過期Session，代碼如下：
function _session_gc($expiry_time)
{
	global $handle;
	$lapse_time = time();						//將參數$expiry_time賦值為當前時間戳記
	$sql = "delete from tb_session where expiry_time < $lapse_time";	//刪除資料庫sql語句
	$result = mysql_query($sql,$handle);
	return($result);
}
以上為session_set_save_handler()函數的6個參數（函數）。


```


