<?php
session_start();

if(!isset($_SESSION['counter']))
{
  $_SESSION['counter'] = 0;
}

if(isset($_GET['message']) && strlen($_GET['message']) > 0)
{
  $_SESSION['counter']++;
}

echo $_SESSION['counter'];
?>
