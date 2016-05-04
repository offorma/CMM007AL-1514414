<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 04/05/2016
 * Time: 10:37
 */
define('HOST', 'ap-cdbr-azure-east-c.cloudapp.net');
define('USERNAME','bba3ec9170e818');
define('PASSWORD','a2edc6cd');
define('DB','CMM007Al-1514414');

$con = mysqli_connect('HOST','USERNAME','PASSWORD','DB');
if ($con){
    echo 'true';
}else{
    die(connect_error());
}