<?php
include 'sql.php';
$dbh = @new PDO($dsn, $user, $passwd, $opt);
if (isset($_GET['account'])) {
    session_start();
    $account  = $_GET['account'];
    $passwd   = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql = "insert into member (account,passwd,realname) values (?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$account,$passwd,$realname]);
    header("location: member.php");
}
?>
<form>
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"></td>
        </tr>
        <tr>
            <th>Real Name</th>
            <td><input type="text" name="realname"></td>
        </tr>
        <tr>
            <th>Account</th>
            <td><input type="submit" value="New"></td>
        </tr>
    </table>
</form>