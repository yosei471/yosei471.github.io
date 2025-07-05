<?php include('db.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
  $stmt->bind_param("ss", $title, $content);
  $stmt->execute();
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>記事投稿</title>
</head>
<body>
  <h1>新しい記事を投稿</h1>
  <form method="post">
    タイトル: <input type="text" name="title"><br>
    内容:<br>
    <textarea name="content" rows="10" cols="50"></textarea><br>
    <input type="submit" value="投稿">
  </form>
</body>
</html>
