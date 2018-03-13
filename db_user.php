<?php
$user = 'testuser';
$password = 'pw4testuser';
$dbName = 'testdb';
$host = 'localhost';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース{$dbName}に接続しました";

    $sql = "SELECT * FROM member";

    $stm = $pdo->prepare($sql);

    $stm->execute();

    $result = $stm->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
} catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span><br>';
    echo $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PDOでデーターベースに接続する</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
  <table>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>年齢</th>
    </tr>

      <?php foreach ($result as $row) { ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['age'] ?></td>
        </tr>
      <?php } ?>

  </table>
</div>
</body>
</html>
