hola docker-compose

<?php
$link = mysql_connect('d4a_mysql_1', 'root', 'TM1q2w3e.');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>

