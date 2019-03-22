<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мой первый блог</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Мой первый блог</h1>
    <a class="admin_in" href="admin">Авторизация</a>
    <div>
      <?php foreach($articles as $a): ?>
      <div class="article">
        <h3>
          <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
        </h3>
        <em>Опубликовано: <?=$a['date']?></em>
        <p><?=articles_intro($a['content'])?></p>
      </div>
      <?php endforeach ?>
    </div>
    <footer>
      <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
  </div>
</body>
</html>