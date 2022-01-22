<?php
$handle = @fopen("mes.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer;
    }
    if (!feof($handle)) {
        echo "Error: fgets() unexpected crash\n";
    }
    fclose($handle);
}
?>
