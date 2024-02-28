<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
    $_SESSION['username'] = $_POST['username'];
    header('Location: welcome.php');
  } else {
    echo 'Username or Password is invalid';
  }
}
