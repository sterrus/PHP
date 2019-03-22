<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мой первый блог</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Мой первый блог</h1>
    <div class="admin">
        <form method="post" action="index.php?action=add">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
            </label>
            <label>
                Содержимое 
                <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
            </label>
            <input type="submit" value="Сохранить" class="btn btn--style">
        </form>
    </div>
    <footer>
      <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
  </div>
</body>
</html>