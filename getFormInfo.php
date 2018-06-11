<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="phpMM.css">
  <title>Сервер</title>
</head>
<body>
  <div id="header">
    <h1>PHP & MySQL: The Missing Manual</h1>
  </div>
  <div id="example">Пример 2.1</div>

  <div id="content">
    <p>Это запись той информации, которую вы отправили:</p>
    <p>
      Имя: <?php echo $_REQUEST['first_name']; ?><br>
      Фамилия: <?php echo $_REQUEST['last_name']; ?><br>
      Адрес электронной почты: <?php echo $_REQUEST['email']; ?><br>
      URL-адрес в Facebook: <?php echo $_REQUEST['facebook_url']; ?><br>
      Индентификатор в Twitter: <?php echo $_REQUEST['twiter_handle']; ?><br>
    </p>
  </div>
  <div class="footer"></div>
</body>
</html>
