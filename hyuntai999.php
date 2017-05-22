<table border="1" width="100%">
    <?php
    $start = 1;
    $col   = 4;
    $line  = 9;
    for ($row=0; $row<$line; $row++) {
        echo '<tr>';
        for ($j=$start; $j<$start+$col; $j++) {
            $newj = $j + $row * $col;
            echo "<td bgcolor='" . ((($j+$row) % 2 == 0)?'yellow':'orange') . "'";
//            if (($j+$row) % 2 == 0) {
//                echo '<td bgcolor="yellow">';
//            } else {
//                echo '<td bgcolor="orange">';
//            }

            for ($i=1; $i<=9; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>