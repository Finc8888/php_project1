<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$position = strpos($facebook_url, "facebook.com");
if(!$position){
  $facebook_url = "http://www.facebook.com".$facebook_url;
}
$twiter_handle = $_REQUEST['twiter_handle'];
?>

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
      Имя: <?php echo $first_name.' '.$last_name ; ?><br>
      Адрес электронной почты: <?php echo $email; ?><br>
      <a href=<?php echo $facebook_url; ?>>URL-адрес в Facebook</a><br>
      Индентификатор в Twitter: <?php echo $twiter_handle; ?><br>
    </p>
  </div>
  <a href="socialEntryForm.html">Back</a>
  <div class="footer"></div>
</body>
</html>
