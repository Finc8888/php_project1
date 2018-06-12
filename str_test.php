<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test_str</title>
</head>
<body>
<?php
print '<h4 style="text-align:center;">Одинарные кавычки</h4>';
//Инициализация строки в одинарных кавычках
//нет интерполяции и экранируется (\) и (')
print 'Just I\'m big boss\n';
print 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. \tDuis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. \rExcepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>';
 print '\\061\060.\x32\x35.<br>';
 //Инициализация строки в двойныхных кавычках
 //есть интерполяции и неэкранируется только(')
 print '<h4 style="text-align:center;">Двойные кавычки</h4>';
 print "Just I\'m big boss\n";
 print "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n
  quis nostrud exercitation ullamco\n laboris nisi ut aliquip ex ea commodo
  consequat. \tDuis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. \rExcepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>";
  print "\$\061\060.\x32\x35.<br>";
  //Инициализация строки в стиле heredoc
  //есть интерполяции и не требует экранизации (").Начинается с <<< и маркера
  //заканчивается тем же маркером и(;).(;)не ставиться при конкантенации
print '<h4 style="text-align:center;">Строки в стиле heredoc</h4>';
print <<< END
Just I\'m big boss\n";
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam,\n
 quis nostrud exercitation ullamco\n laboris nisi ut aliquip ex ea commodo
 consequat. \tDuis aute irure
 dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. \rExcepteur
 sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id
  est laborum.<br>
  "\$\061\060.\x32\x35.<br>
END;
 print '<h4 style="text-align:center;">Вывод разметки из heredoc-строки</h4>';
if ($remaining_cards > 0) {
  $url = '/deal.php';
  $text = 'Deal More Cards';
}
else {
  $url = '/new-game.php';
  $text = 'Start a New Game';
}
print <<< HTML
There are <b>$remaining_cards</b>left.
<p>
<a href="$url">$text</a>
HTML;
?>
</body>
</html>
