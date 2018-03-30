# 教科書章節

```
PHP7&MySQL跨裝置網站開發：
超威範例集(第二版)(附範例與資料庫光碟)
作者： 陳惠貞, 陳俊榮  
出版社：碁峰  

第11章　jQuery Mobile行動版網頁
```
# jQuery Mobile

```
jQuery Mobile是一個奠基於jQuery與jQuery UI，以HTML為基礎的統一使用者介面系統，
橫跨所有受歡迎的行動裝置平台，其輕量級的程式碼具有彈性且容易更換佈景主題設計。
```
jQuery Mobile官方網站 (http://jquerymobile.com/) 

## 使用jQuery Mobile開發的行動版網頁具有下列特點：
```
能夠在不同的行動裝置顯示相同的結果，達到跨平台、跨裝置、跨瀏覽器的目的。
為觸控裝置提供最佳化的使用者介面。
程式碼輕薄短小。
可更換或自訂佈景主題。
網頁主要是使用HTML5語法來撰寫，除非是一些進階的功能，否則就算不懂JavaScript，也能使用jQuery Mobile。
```
# jQuery Mobile行動版網站開發

使用jQuery Mobile 開發行動網站需要一些檔案：
```
jQuery Mobile 核心CSS 檔案 ( 例如jquery.mobile-XX.min.css，XX 為版本)
jQuery 核心JavaScript 檔案 ( 例如jquery-XX.min.js)
jQuery Mobile 核心JavaScript 檔案 ( 例如jquery.mobile-XX.min.js)
```
## 兩種方式來使用jQuery Mobile開發行動網站

方式1:下載jQuery 與jQuery Mobile 套件並複製到網站目錄
```
到http://jquery.com/download/  和http://jquerymobile.com/download/ 
下載jQuery 與jQuery Mobile 套件，例如jquery-2.2.3.min.js 和jquery.mobile-1.4.5.ZIP，
然後將解壓縮得到的檔案和資料夾複製到網站專案的根目錄。
```

方式2:使用CDN (Content Delivery Networks){本次專案使用的方式}
```
直接在網頁中參考jQuery 與jQuery Mobile 官方網站提供的檔案
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

```
航海王主畫面
