<?php
  session_start();
  if ($_GET['submit']=='+')
      $_SESSION['jablko'] += $_GET['jablko'];
    else
      $_SESSION['jablko'] -= $_GET['jablko'];

  if ($_GET['submit']=='+')
      $_SESSION['pomarancza'] += $_GET['pomarancza'];
    else
      $_SESSION['pomarancza'] -= $_GET['pomarancza'];
  if ($_GET['submit']=='+')
      $_SESSION['banan'] += $_GET['banan'];
    else
      $_SESSION['banan'] -= $_GET['banan'];
  header('location:index.php');
?>