# Google地圖應用網站程式架構分析

# 教科書章節

```
PHP7&MySQL跨裝置網站開發：
超威範例集(第二版)(附範例與資料庫光碟)
作者： 陳惠貞, 陳俊榮  
出版社：碁峰  

第15章　Google地圖應用網站
```
## 只有兩隻程式

farm.php
```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
	  $farm_address=array('桃園縣觀音鄉大堀村大湖路二段131-1號', 
	                      '台中縣新社鄉中和村中興路233號', 
					      '新竹縣尖石鄉嘉樂130號',
						  '彰化縣彰化市卦山路23號'); 
	?>
    <form method="post" action="showmap.php">
	  <input type="radio" name="farm" value="<?php echo $farm_address[0]; ?>" checked>青林農場<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[1]; ?>">安妮公主的花園<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[2]; ?>">薰衣草森林<br>
	  <input type="radio" name="farm" value="<?php echo $farm_address[3]; ?>">卦山月圓<br>
	  <input type="submit" value="檢視地圖">
	</form>
  </body>
</html>

```


## showmap.php
```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
	</script>
	<script type="text/javascript">
	  var geocoder;   
	  var map; 
	  
	  function initialize() 
	  {     
	    geocoder = new google.maps.Geocoder();     
		var latlng = new google.maps.LatLng(0, 0);     
		var myOptions = {zoom: 10, center:latlng, mapTypeId:google.maps.MapTypeId.ROADMAP};
		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);   
		codeAddress();
	  }    
	  
	  function codeAddress() 
	  {     
	    var address = document.getElementById("address").value;     
		if (geocoder) 
		{
		  geocoder.geocode({'address': address}, function(results, status) 
		  {
		    if (status == google.maps.GeocoderStatus.OK) 
			{           
			  map.setCenter(results[0].geometry.location);           
			  var marker = new google.maps.Marker({map:map, position:results[0].geometry.location}); 
			} 
			else 
			{  
			  alert("檢視地圖失敗，原因在於：" + status); 
			}
		  });     
		}   
	  }
    </script> 
  </head>
  <body onload="initialize()">
    <input type="hidden" id="address" value="<?php echo $_POST["farm"]; ?>">	   
    <div id="map_canvas" style="width:500px; height:500px;"></div>
    <a href="farm.php">返回上一頁</a>	
  </body>
</html>
```
