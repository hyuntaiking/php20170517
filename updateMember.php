<?php
include 'sql.php';
$dbh = @new PDO($dsn, $user, $passwd, $opt);
session_start();
if (isset($_SESSION['id']) == false) header("Location: member.php");
$id = $_SESSION['id'];
$account  = $_GET['account'];
$passwd   = $_GET['passwd'];
$realname = $_GET['realname'];
$sql = "update member set account=?,passwd=?,realname=? where id=?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$account,$passwd,$realname,$id]);
header("Location: member.php");