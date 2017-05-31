<?php
session_start();
if (isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $_SESSION['id'] = $editid;
    $db = @new mysqli('127.0.0.1','root','root','iii');
    $sql= "select * from member where id = {$editid}";
    $rs = $db->query($sql);
    $row = $rs->fetch_object();
}
?>
<form action="editMember.php">
<table>
    <tr>
        <th>Account</th>
        <td><input type="text"
                   value="<?php echo $row->id;?>" name="account"></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><input type="password"
                   value="<?php echo $row->passwd;?>" name="passwd"></td>
    </tr>
    <tr>
        <th>Real Name</th>
        <td><input type="text"
                   value="<?php echo $row->relname;?>" name="realname"></td>
    </tr>
    <tr>
        <th>Account</th>
        <td><input type="submit" value="Update"></td>
    </tr>
</table>
</form>