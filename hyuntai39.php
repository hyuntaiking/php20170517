<?php
include 'sql.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);

$sql = "select * from member;";
$rs = $pdo->query($sql);
echo '<table border="1" width="100%"';
while ($row = $rs->fetch()) {
    echo "<tr>";
    echo "<td>{$row['account']}</td>";
    echo "<td>{$row['passwd']}</td>";
    echo "</tr>";
}
echo '</table>';