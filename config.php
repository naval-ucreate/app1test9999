<?php
//phpinfo();
//require __DIR__ . '/vendor/autoload.php';
//$dotenv = Dotenv\Dotenv::create(__DIR__);
//$dotenv->load();
function pgSqlConnect()
{
    $conn = pg_connect(getenv('DATABASE_URL'));
    if($conn)
    return $conn;
}
function testConfig()
{
    $name = "naval";
    return $name;
}


