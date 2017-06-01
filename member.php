<?php
include 'sql.php';
// Add
if (isset($_GET['account'])) {
    session_start();
    $account  = $_GET['account'];
    $passwd   = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql = "insert into member (account,passwd,realname) values (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account,$passwd,$realname]);
    //header("location: member.php");
}
// Delete
if (@$_GET['delid']) {
    $delid = $_GET['delid'];
    $sql = "delete from member where id = ?";
    $stmt = $pdo->prepare($sql);
    var_dump($stmt);
    $stmt->execute([$delid]);
}
$stmt = $pdo->prepare('select * from member');
$stmt->execute();
?>
<form>
<table border="1" width="75%">
    <tr>
        <td width="9%"></td>
        <td width="25%"><input type="text" name="account"></td>
        <td width="29%"><input type="password" name="passwd"></td>
        <td width="40%"><input type="text" name="realname"></td>
    </tr>
</table>
<input type="submit" value="New">

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
</form>