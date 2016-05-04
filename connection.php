<?php
/**
 * Created by PhpStorm.
 * User: 1514414
 * Date: 04/05/2016
 * Time: 10:37
 */
$con = mysqli_connect('ap-cdbr-azure-east-c.cloudapp.net','bba3ec9170e818','a2edc6cd','CMM007Al-1514414');
if ($con){
    echo 'true';
}else{
    die(connect_error());
}