<?php
date_default_timezone_set('Aisa/Taipei');
$dirname = '.';
if (isset($_GET['dirname'])) {
    $dirname = $_GET['dirname'];
}
$fp = opendir($dirname) or die("Server Busy........");
?>
<form>
    <input type="text" name="dirname"/>
    <input type="submit"/>
    <table border="1" width="100%">
        <tr>
        <th>Filename</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
        </tr>
        <?php
        while ($file = readdir($fp)) {
            $type=is_dir($file)?'Dir':'File';
            if (is_dir("{$dirname}/{$file}")) {
                $type= 'Dir';
            } else if (is_file("{$dirname}/{$file}")) {
                $type= 'File';
            }
            echo "<tr>";
            echo "<td>{$file}</td>";
            echo "<td>{$type}</td>";
            echo "<td>" . filesize("{$dirname}/{$file}") ."</td>";
            echo "<td> . filemtime(\"{$dirname}/{$file}\") . </td>";
            echo "<td><a href="" /></td>";
            echo "</tr>";
        }
        ?>
    </table>
</form>
