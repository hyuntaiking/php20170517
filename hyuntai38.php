<?php
$db = @new mysqli('127.0.0.1','root','root','iii');
if ($_GET['delid']) {
    $delid = $_GET['delid'];
    $sql = "delete from member where id = {$delid}";
    $rs = $db->query($sql);
}
$sql = "select * from member";
$rs = $db->query($sql);
?>
<a href="add.php">New</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Account</th>
        <th>Password</th>
        <th>Real Name</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php

    while ($row = $rs->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->id}</td>";
        echo "<td>{$row->account}</td>";
        echo "<td>{$row->passwd}</td>";
        echo "<td>{$row->relname}</td>";
        echo "<td><a href='?delid={$row->id}'>Delete</td>";
        echo "<td><a href='edit.php?editid={$row->id}'>Edit</td>";
        echo "</tr>";
    }
    ?>
</table>