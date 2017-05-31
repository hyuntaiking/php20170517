<?php
//$db = @mysqli_connect('127.0.0.1','root','root','iii') or die('Connect DB error');
$db = @new mysqli('127.0.0.1','root','root','iii');
//$sql='insert into member(account,passwd,relname)' .
//               ' values("Hyuntai","5678","Hyuntai")';
$sql='select * from member';
$result = $db->query($sql);
while ($row = $result->fetch_object()) {
    echo "{$row->id}:{$row->account}:{$row->passwd}<br>";
}
