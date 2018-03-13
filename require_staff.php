<?php

require_once("Staff.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>require</title>
</head>
<body>
<pre>
  <?php
  $hana = new Staff("花", 21);
  $taro = new Staff("太郎", 35);

  $hana->hello();
  $taro->hello();
  ?>
</pre>
</body>
</html>
