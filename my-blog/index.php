<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>webエンジニアをめざして。。。</h1>
  <h2>ブログ記事一覧</h2>
  <a href="create.php">新規投稿</a>
  <ul>
    <?php
    $result = $conn->query("SELECT id, title FROM posts ORDER BY created_at DESC");
    while($row = $result->fetch_assoc()) {
      echo "<li><a href='post.php?id={$row['id']}'>{$row['title']}</a></li>";
    }
    ?>
  </ul>
  <script src="assets/script.js"></script>
</body>
</html>
