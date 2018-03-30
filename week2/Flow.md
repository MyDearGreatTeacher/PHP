# PHP的流程控制

[1]判斷結構 (decision structures)

if (if...、if...else...、if...elseif...)

switch

[2]迴圈結構 (loop structures)

for

foreach

while

do...while


## 判斷結構 (decision structures)::if (是非題)

```
<!doctype html> 
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $a = 20;
      $b = 10;
      if ($a > $b) echo '$a比$b大';
    ?>
  </body>
</html>
```
## 判斷結構 (decision structures)::if...else(兩選一)
```
<!doctype html> 
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $score = 59;
      if ($score > 60)
        echo '及格！';
      else
        echo '不及格！';
    ?>
  </body>
</html>
```

## 判斷結構 (decision structures)::if...elseif...(多選一)
```
<!doctype html> 
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $score = 85;
      if ($score >= 90)
        echo '優等！';
      elseif ($score < 90 && $score >= 80)
        echo '甲等！';
      elseif ($score < 80 && $score >= 70)
        echo '乙等！';
      elseif ($score < 70 && $score >= 60)
        echo '丙等！';
      else
        echo '不及格！';
     ?>
  </body>
</html>
```
switch:比較下列兩個程式

```
<html> 
  <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">   	
  </head>
  <body>
    <?php
      $number = 3;		    			//假設變數number的值為3
      if ($number == 1)		  			//若變數number的值為1
        echo 'ONE';
      elseif ($number == 2)			//若變數number的值為2
        echo 'TWO';
      elseif ($number == 3)			//若變數number的值為3
        echo 'THREE';
      elseif ($number == 4)			//若變數number的值為4
        echo 'FOUR';
      elseif ($number == 5)			//若變數number的值為5
        echo 'FIVE';
      else  			         		//若變數number為1-5以外的數字
        echo '數值超過範圍！';
   ?>
  </body>
</html>
```

```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $number = 3;				//假設變數number的值為3
      switch($number)
      {
        case 1:      			//當變數number的值為1時
          echo 'ONE';
          break;
        case 2:    				//當變數number的值為2時
          echo 'TWO';
          break;
        case 3:    				//當變數number的值為3時
          echo 'THREE';
          break;
        case 4:    				//當變數number的值為4時
          echo 'FOUR';
          break;
        case 5:    				//當變數number的值為5時
          echo 'FIVE';
          break;
        default:    			//當變數number的值為1-5以外的數字時
          echo '數值超過範圍！';
      }
    ?>
  </body>
</html>
```

[1]判斷結構 (decision structures):switch
