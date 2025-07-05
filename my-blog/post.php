<?php include('db.php'); ?>
<?php
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title><?= $post['title'] ?></title>
</head>
<body>
  <h1><?= $post['title'] ?></h1>
  <p><?= nl2br($post['content']) ?></p>
  <a href="index.php">← 戻る</a>
</body>
</html>
