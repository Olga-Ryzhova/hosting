<?php
  session_start();

  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "Привет, {$_SESSION['username']}!" . PHP_EOL;
    echo "<a href='exit.php'>Очистить сессию</a>";
  } else {
    include './index.html';
  }
