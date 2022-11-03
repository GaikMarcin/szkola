<?php
  session_start();
  if ($_GET['sumbit']=='+')
      $_SESSION['liczba'] += $_GET['dodatek'];
    else
      $_SESSION['liczba'] -= $_GET['dodatek'];
  header('location:index.php');
?>