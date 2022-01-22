<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST['mes'].PHP_EOL);
fclose($file);
echo '<a href="http://172.16.154.131/">OK. Go Back?</a>';
?>
