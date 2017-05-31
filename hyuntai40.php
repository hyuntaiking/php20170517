<?php
include 'sql.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$account = "Andy";
$passwd = "1234";
$relname = "Andy Chi";
$sql = "insert into member (account,passwd,relname) values (?,?,?)";
$rs = $pdo->query($sql);
$stmt = $pdo->prepare($sql);
$stmt->execute([$account,$passwd,$relname]);