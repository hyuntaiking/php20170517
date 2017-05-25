<?php
$data = file("contract.csv");
?>
<table border="1" width="100%">
    <?php
    foreach ($data as $value) {
        $filds = explode(',',$value);
        echo '<tr>';
        foreach ($filds as $field) {
            echo "<td>{$field}</td>";
        }
        echo '</tr>';
    }
    ?>
</table>
