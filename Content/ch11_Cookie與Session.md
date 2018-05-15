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

```


```

```


```

```
