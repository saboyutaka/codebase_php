<?php
    $hello = "hello";
?>

<html>
<head>
    <title>HELLO</title>
</head>
<body>
    <p><?php var_dump($hello);?></p>
    <p><?php dd($_COOKIE);?></p>
    <p><?php var_dump($_ENV);?></p>
    <p><?php var_dump($_SERVER);?></p>
    <p><?php var_dump($_SESSION);?></p>
    <p><?php var_dump($HTTP_RAW_POST_DATA);?></p>
</body>
</html>
