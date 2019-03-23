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
   <header class="header">
      <h1>Мой первый блог</h1>
    </header>
    <div class="wrapper__form">
        <form class="form"method="post" action="index.php?action=add">
            <label for="name">Название</label>
            <input type="text" name="title" value="" id="name"<?=$article['title']?> class="form-item" autofocus required>
            <label for="date">Дата</label>
            <input type="date" name="date" value="" id="date"<?=$article['date']?> class="form-item" required>
            <label for="massege">Cодержимое</label>
            <textarea class="form-item" name="content" id="massege" required><?=$article['content']?></textarea>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer class="footer">
      <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
  </div>
</body>
</html>