<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST[PHP_EOL'mes']);
fclose($file);
echo '<a href="http://172.16.154.131/">OK. Go Back?</a>';
?>
