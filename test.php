<?php
echo 'hnawkhfdaiuwefhaWdfjaesf';
$link = mysql_connect('mysql.hostinger.in','u490847564_huynh','I7ZMhPARp2');
if(!$link){
    die('Could not connect: '.mysql_error());
}
echo 'success';
mysql_close();
?>