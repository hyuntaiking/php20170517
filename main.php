<?php
include 'sqlOpendata.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: login.php");
$memberObj = $_SESSION['member'];

$stmt = $pdo->prepare('select * from road');
$stmt->execute([]);
?>
Hello, <?php echo $memberObj->realname; ?>
<table border="1" width="100%">
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Level</th>
        <th>System</th>
        <th>Second System</th>
        <th>Manager</th>
        <th>Entrance</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()) {
        echo '<tr>';
        echo "<td>{$row->number}</td>";
        echo "<td>{$row->name}</td>";
        echo "<td>{$row->level}</td>";
        echo "<td>{$row->system}</td>";
        echo "<td>{$row->second_system}</td>";
        echo "<td>{$row->manager}</td>";
        echo "<td>{$row->entrance}</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="logout.php">Logout</a>