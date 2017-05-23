<?php
if (isset($_GET['twid'])) {
    $twid = $_GET['twid'];
    if (preg_match('/^[A-Z][12][0-9]{8}$/',$twid) > 0) {
        $n12s = substr($twid, 0, 1);
        $id = 'ABCDEFGHJKLMNPQRSTUVXYZWIO';
        $n12 = strpos($id, $n12s) + 10;
        $n[1] = intval($n12/10);
        $n[] = $n12 % 10;
        $n[] = $twid[1];
        $n[] = $twid[2];
        $n[] = $twid[3];
        $n[] = $twid[4];
        $n[] = $twid[5];
        $n[] = $twid[6];
        $n[] = $twid[7];
        $n[] = $twid[8];
        $n[] = $twid[9];
        $num = $n[1] * 1 + $n[2] * 9 + $n[3] * 8 + $n[4] * 7 + $n[5] * 6 +
               $n[6] * 5 + $n[7] * 4 + $n[8] * 3 + $n[9] * 2 + $n[10] * 1 +
               $n[11] * 1;
        if ($num % 10 == 0) {
            echo 'OK';
        } else {
            echo 'XX';
        }
    }
}
?>
<form>
    <input type="text" name="twid" />
    <input type="submit" />
</form>
