<?php
if (isset($_GET['account'])) {
    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $realname = $_GET['realname'];
    $db = @new mysqli('127.0.0.1','root','root','iii');
    $sql='insert into member(account,passwd,realname)' .
                  " values({$account},{$passwd},{$realname})";
    $db->query($sql);
    header("location: hyuntai38.php");
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