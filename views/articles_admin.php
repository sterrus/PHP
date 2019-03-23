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
    <div class="wrapper">
       <button><a href="index.php?action=add">Добавить статью</a></button>
        <button><a href="http://localhost/blog/">Возврат</a></button>
        <table class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a): ?>
            <tr>
                <th><?=$a['date']?></th>
                <th><?=$a['title']?></th>
                <th>
                    <a href="index.php?action=edit&id=<?=$a['id']?>">Редактирование</a>
                </th>
                <th>
                    <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a> 
                </th>
            </tr>
            <tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer>
      <p>Мой первый блог<br>Copyright &copy; 2019</p>
    </footer>
  </div>
</body>
</html>