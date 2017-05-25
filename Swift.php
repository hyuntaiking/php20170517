<?php
if (isset($_GET['swift'])) {
    $swift = $_GET['swift'];
    $fp = fopen('temp.swift', "w+");
    fwrite($fp, $swift);
    fclose($fp);

    exec('/usr/bin/swift temp.swift', $output, $return_var);
}


?>
<form action="Swift.php">
    Swift Code:
    <textarea name="swift" rows="10" cols="40"><?php
        if ($swift) {
            echo $swift;
        } ?></textarea><br>
    <input type="submit" value="Try Swift"><br>
    Output:
    <textarea name="output" rows="10" cols="40"><?php
        if ($output){
            foreach ($output as $value) {
                echo $value . "\n";
            }
        } ?></textarea><br>
</form>