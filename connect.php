<?php
$link = array (
                'host' => "127.0.0.1",
                'port' =>"3306",
                'account' =>"jerry",
                'password' =>"aj851226",
                'dbname' =>"database"
);
$dbconnect='mysql:host='.$link['host'].';port='.$link['port'].
    ';dbname='.$link['dbname'].';charset=utf8';
try
{
    $connect = new PDO($dbconnect,$link['account'],$link['password']);
    $connect -> query("SET NAMES 'utf8");
    $connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    echo "Connection failed: " ;
    echo iconv('gbk', 'utf-8',$e->getMessage());
    exit();
}
?>
