# 文件處理 


```
1、打開/關閉文件 
2、讀寫文件 
3、操作檔 
```


文件處理概述
```
檔處理包括讀取、關閉、重寫等，掌握檔的處理需要讀者理清思路，掌握檔處理的關鍵步驟和常用函數，完全可以運用自如。
     例如，訪問一個檔需要3步：打開文件、讀寫文件和關閉文件。其他的操作要麼是包含在讀寫檔中（如顯示內容、寫入內容等），要麼與檔自身的屬性有關係
（如文件遍歷、文件改名等）。 

```



```

1．打開文件
     在PHP中使用fopen()函數打開檔，fopen()函數的語法如下：
resource fopen ( string filename, string mode [, bool use_include_path]);
filename是要打開的包含路徑的檔案名，可以是相對路徑，也可以是絕對路徑。如果沒有任何首碼則表示打開的是本地檔。
mode是打開檔的方式，可取的值如表13.1所示。
use_include_path是可選的，該參數在設定檔php.ini中指定一個路徑，如F:\AppServ\ www\mess.php，如果希望伺服器在這個路徑下打開所指定的檔，可以設置為1或 true。
```
```
2．關閉文件
     對檔的操作結束後應該關閉這個檔，否則可能引起錯誤。在PHP中使用
fclose()函數關閉檔，該函數的語法如下：
bool fclose ( resource handle ) ;
    該函數將參數handle指向的檔關閉，如果成功，返回true，否則返回
false。其中的檔指標必須是有效的，並且是通過fopen()函數成功打開的文
件。例如：
<?php
	$f_open =fopen("../file.txt.","rb");	   //打開文件
	…    //對檔進行操作
	fclose($f_open)	 //操作完成後關閉檔				
?>


```

讀寫文件

```

1．從檔中讀取資料
    從檔中讀取資料，可以讀取一個字元、一行字串或整個檔，還可以讀取
任意長度的字串。
1）讀取整個文件：readfile()、file()和file_get_contents()
（1）readfile()函數
       readfile()函數用於讀入一個檔並將其寫入到輸出緩衝，如果出現錯誤則
返回false。函數語法如下：
int readfile(string filename)
      使用readfile()函數，不需要打開/關閉檔，不需要echo/print等輸出語
句，直接寫出檔路徑即可。
（2）file()函數
        file()函數也可以讀取整個檔的內容，只是file()函數將檔內容按行存
放到陣列中，包括分行符號在內。如果失敗則返回false。函數語法如下：
array file(string filename)
（3）file_get_contents()函數
      該函數將檔內容（filename）讀入一個字串。如果有offset和maxlen參數，將在
參數offset所指定的位置開始讀取長度為maxlen的內容。如果失敗，返回false。函數語法
如下：
string file_get_contents(string filename[,int offset[,int maxlen]])
該函數適用於二進位物件，是將整個檔的內容讀入到一個字串中的首選方式。 


```



```
2）讀取一行資料：fgets()和fgetss()
（1）fgets()函數
       fgets()函數用於一次讀取一行資料。函數語法如下：
string fgets( int handle [, int length] )
handle是被打開的文件，
length是要讀取的數據長度。
    函數能夠實現從handle指定文件中讀取一行並返回長度最大值為
length-1個位元組的字串。在遇到分行符號、EOF或者讀取了length-1
個位元組後停止。如果忽略length參數，那麼讀取資料直到行結束。
（2）fgetss()函數
       fgetss()函數是fgets()函數的變體，用於讀取一行資料，同時，
fgetss()函數會過濾掉被讀取內容中的html和php標記。函數語法如下
string fgetss ( resource handle [, int length [, string 
allowable_tags]] )
     該函數能夠從讀取的文件中過濾掉任何html和php標記。可以使用
allowable_tags參數來控制哪些標記不被過濾掉。

```



```
3）讀取一個字元：fgetc()
    在對某一個字元進行查找、替換時，需要有針對性地對某個
字符進行讀取，在PHP中可以使用fgetc()函數實現此功能。函
數語法如下：
string fgetc ( resource handle )
該函數返回一個字元，該字元從handle指向的檔中得到。遇
到EOF則返回false。 
4）讀取任意長度的字串：fread()
     fread()可以從檔中讀取指定長度的資料，函數語法如下：
string fread ( int handle, int length )
參數handle為指向的文件資源，length是要讀取的位元組數。當
函數讀取length個位元組或到達EOF時停止執行。 

```



```

2．將資料寫入檔
    寫入資料也是PHP中常用的檔操作，在PHP中使用fwrite()和
file_put_contents()函數向檔中寫入資料。fwrite()函數也稱為
fputs()，它們的用法相同。fwrite()函數的語法如下：
int fwrite ( resource handle, string string [, int length] )
該函數把內容string寫入文件指針handle處。如果指定了長度length，
則寫入length個位元組後停止。如果檔內容長度小於length，則會輸出
全部檔內容。
file_put_contents()函數是PHP 5新增的函數，其語法為：
int file_put_contents ( string filename, string data [, int 
flags])
filename為寫入資料的檔。data為要寫入的資料。flags可以是
FILE_USE_INCLUDE_PATH、FILE_APPEND或LOCK_EX，
LOCK_EX為獨佔鎖定。
注意：使用file_put_contents()函數和依次調用fopen()、fwrite()、
fclose()函數的功能一樣。 


```

# 檔案操作

```

除了可以對檔內容進行讀寫，對檔本身同樣也可以進行操作，如複製、
重命名、查看修改日期等。PHP內置了大量的檔操作函數。
bool copy( string path1, string path2)：將文件從path1複製到path2。如果成功，返
回true，失敗則返回false。例如：copy('tm.txt','../tm.txt')
bool rename(string filename1,string filename2)：把name1重命名為Name2。例如
：rename('1.txt','tm.txt')
bool unlink( string filename )刪除檔，成功返回true，失敗則返回False。例如：
unlink(‘./tm.txt’)
int fileatime( string filename )返回檔最後一次被訪問的時間，時間以UNIX時間戳記的
方式返回。例如：fileatime('1.txt')
int filemtime( string filename )返回檔最後一次被修改的時間，時間以UNIX時間戳記的
方式返回。例如：date('Y-m-d H:i:s', filemtime('1.txt'))
int filesize( string filename )取得檔filename的大小（bytes）。例如：filesize('1.txt')
array pathinfo(string name [, int options])返回一個陣列，包含檔name的路徑資訊。
有dirname、basename和extension。可以通過option設置要返回的資訊，有
PATHINFO_DIRNAME、PATHINFO_BASENAME和PATHINFO_EXTENSION。默認為返
回全部。例如：$arr = pathinfo('/tm/sl/12/5/1.txt');foreach($arr as $method => 
$value){echo $method.“: ”.$value.“<br>”;}string realpath ( string filename )返回
文件filename的絕對路徑。如c:\tmp\…\1.txtrealpath('1.txt')array stat ( string filename )返回一個陣列，包括檔的相關資訊，如上面提到的檔大小、最後修改時間等$arr = stat('1.txt');foreach($arr as $method => $value){echo $method.": ".$value."<br>";}


```

# 目錄處理 


```
1、打開/關閉目錄 
2、流覽目錄
3、操作目錄 
```

打開/關閉目錄 

```
1．打開目錄
PHP使用opendir()函數來打開目錄，函數語法如下：
resource opendir ( string path)
函數opendir()的參數path是一個合法的目錄路徑，成功執行後返回目錄的指標；如果path不是一個合法的目錄或者因為許可權或檔案系統錯誤而不能打開目錄，則返回false並產生一個E_WARNING級別的錯誤資訊。可以在opendir()前面加上“@”符號來抑制錯誤資訊的輸出。
2．關閉目錄
關閉目錄使用closedir()函數，函數語法如下：
void closedir ( resource handle )
參數handle為使用opendir()函數打開的一個目錄指標。 



```



```

<?php  
$path = "D:\\AppServ\\www\\tm\\sl\\12" ;
if (is_dir($path)){						//檢測是否是一個目錄
	if ($dire = opendir($path))				//判斷打開目錄是否成功
		echo $dire;					//輸出目錄指標
}else{
	echo '路徑錯誤';
	exit();
}
…									//其他操作
closedir($dire);							//關閉目錄
?> 


```

流覽目錄


```
在PHP中流覽目錄中的檔使用的是scandir()函數，函數語法如下：
array scandir ( string directory [, int sorting_order ])
該函數返回一個陣列，包含directory中的所有檔和目錄。參數sorting_order指定排序順序，預設按字母昇冪排序，如果添加了該參數，則變為降冪排序。 



```

操作目錄


```
目錄是特殊的檔，也就是說，對檔的操作處理函數（如重命名）多數同樣適用於目錄。但還有一些特殊的函數只是針對目錄的 。

```

# 文件處理的高級應用


```
1、遠端檔訪問 
2、文件指針 
3、鎖定文件 


```

遠端檔訪問

```
PHP支持URL格式的檔調用，只要在php.ini中配置一下即可。在PHP中找到allow_url_fopen，將該選項設為ON。重啟伺服器後即可使用HTTP或FTP的URL格式。如：
fopen('http://127.0.0.1/tm/sl/index.php','rb'); 



```


文件指針 


```
1．rewind()函數
該函數將文件handle的指標設為檔流的開頭，語法如下：
bool rewind ( resource handle )
2．fseek()函數
fseek()函數實現檔指標的定位，語法如下：
int fseek ( resource handle, int offset [, int whence] )
handle參數為要打開的文件。offset為指針位置或相對whence參數的偏移量，可以是負值。whence的值包括以下3種：
   SEEK_SET，位置等於offset位元組。
   SEEK_CUR，位置等於當前位置加上offset位元組。 
   SEEK_END，位置等於檔案結尾加上offset位元組。
如果忽略whence參數，系統預設為SEEK_SET。
3．feof()函數
該函數判斷檔指標是否在檔案結尾，語法如下：
bool feof ( resource handle )
如果檔指標到了檔結束的位置，就返回true，否則返回false。
4．ftell()函數
ftell()函數返回當前指標的位置，語法如下：
int ftell ( resource handle )



```

鎖定文件 


```

在向一個文字檔寫入內容時，需要先鎖定該檔，以防止其他使用者同時修改此檔內容。

在PHP中鎖定檔的函數為flock()，語法如下：
bool flock ( int handle, int operation)
參數handle為一個已經打開的檔指標，operation的參數如下
LOCK_SH取得共用鎖定（讀取程式）
LOCK_EX取得獨佔鎖定（寫入程式）
LOCK_UN釋放鎖定
LOCK_NB防止flock()在鎖定時堵塞

```



```



```



```



```

