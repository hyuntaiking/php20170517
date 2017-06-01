<?php
include 'sql.php';
session_start();
if (isset($_POST['account'])) {
    $account = $_POST['account'];
    $passwd  = $_POST['passwd'];
    $sql = 'select * from member where account = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account]);
    if ($stmt->rowCount() > 0) {
        $objMember = $stmt->fetchObject();
        echo "Account:{$objMember->id}";
        if (PASSWORD_VERIFY($passwd,$objMember->passwd)) {
            $_SESSION['member'] = $objMember;
            header("Location: main.php");
        } else {
            echo "X1";
        }
    } else {
        echo "XX";
    }
}
?>
<form method="post">
    Account:<input type="text" name="account"><br>
    Password:<input type="password" name="passwd"><br>
    <input type="submit" value="Login"><br>
</form>
