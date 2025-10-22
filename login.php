<?php
// login.php
session_start();
require_once 'settings.php'; // already points to project_2

function back($q){ header("Location: login.html?$q"); exit; }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') back('err=method');

$email = trim($_POST['email'] ?? '');
$pass  = $_POST['password'] ?? '';

if ($email === '' || $pass === '') back('err=missing');

$stmt = $conn->prepare("SELECT id, password FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($uid, $hash);

if ($stmt->fetch() && password_verify($pass, $hash)) {
  session_regenerate_id(true);
  $_SESSION['uid']   = $uid;
  $_SESSION['email'] = $email;
  // go to the team’s page after login (change if you want)
  header("Location: manage.php");
  exit;
}
back('err=badcreds');
