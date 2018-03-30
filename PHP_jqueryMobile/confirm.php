<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $username = $_POST["username"];
      switch($_POST["fruit"])
      {
        case "peach":
          $fruit = "水蜜桃";
          break;
        case "apple":
          $fruit = "蘋果";
          break;
        case "banana":
          $fruit = "香蕉";
          break;        
      }
    ?>
    <p><?php echo $username; ?>，您好！您最喜歡的水果是<?php echo $fruit; ?></p>      
  </body>
</html>