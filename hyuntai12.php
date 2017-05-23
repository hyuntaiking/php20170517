<?php
if (isset($_GET['twid'])) {
    $twid = $_GET['twid'];
    $n11 = substr($twid, 0, 1);
    echo $n11;
}
?>
<form>
    <input type="text" name="twid" />
    <input type="submit" />
</form>
