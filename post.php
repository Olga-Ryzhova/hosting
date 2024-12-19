<?php
  session_start();

  if (isset($_POST['name'])) {
    $_SESSION['username'] = $_POST['name'];
  }

  header('Location: ./index.php');  