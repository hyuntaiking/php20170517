<?php
if (isset($_GET['twid'])) {
    $twid = $_GET['twid'];
    if (preg_match('/^[A-Z][12][0-9]{8}$/',$twid) > 0) {
        $n12s = substr($twid, 0, 1);
        $id = 'ABCDEFGHJKLMNPQRSTUVXYZWIO';
        $n12 = strpos($id, $n12s) + 10;
        $n1 = intval($n12/10);
        $n2 = $n12 % 10;
        $n3 = $twid[1];
        $n4 = $twid[2];
        $n5 = $twid[3];
        $n6 = $twid[4];
        $n7 = $twid[5];
        $n8 = $twid[6];
        $n9 = $twid[7];
        $n10 = $twid[8];
        $n11 = $twid[9];
        echo $n10;
//        $num = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 +
//            n6 * 5 + n7 * 4 + n8 * 3 + n9 * 2 + $n10 * 1 +
//            n11 * 1;
        $num = n3 * 9;
        echo 'Num:' . $num .'<br>';
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
