<?php
include 'sql.php';
$dbh = @new PDO($dsn, $user, $passwd, $opt);
session_start();
if (isset($_GET['editid']) == false) header("Location: member.php");
$editid = $_GET['editid'];
$_SESSION['id'] = $editid;
$sql = "select * from member where id=?";
$stmt = $dbh->prepare($sql);
$stmt->execute([$editid]);
$editObj = $stmt->fetchObject();
?>
<form action="updateMember.php">
    <input type="hidden" name="id" value="<?php echo $editObj->id; ?>">
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"
                       value="<?php echo $editObj->account; ?>"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"
                       value="<?php echo $editObj->passwd; ?>"></td>
        </tr>
        <tr>
            <th>Real Name</th>
            <td><input type="text" name="realname"
                       value="<?php echo $editObj->realname; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="upddate"></td>
        </tr>
    </table>
</form>