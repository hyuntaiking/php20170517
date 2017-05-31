<?php
include 'sql.php';
$dbh = @new PDO($dsn, $user, $passwd, $opt);
if (@$_GET['delid']) {
    $delid = $_GET['delid'];
    $sql = "delete from member where id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$delid]);
}
$stmt = $dbh->prepare('select * from member');
$stmt->execute();
//$sql = "select * from member;";
//$rs = $dbh->query($sql);
?>
<a href="addMember.php">New</a>
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
    while ($row = $stmt->fetchObject()) {
        echo "<tr>";
        echo "<td>{$row->id}</td>";
        echo "<td>{$row->account}</td>";
        echo "<td>{$row->passwd}</td>";
        echo "<td>{$row->realname}</td>";
        echo "<td><a href='?delid={$row->id}'>Delete</td>";
        echo "<td><a href='editMember.php?editid={$row->id}'>Edit</td>";
        echo "</tr>";
    }
    ?>
</table>