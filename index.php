<?php
/*
phpinfo();
@help : https://devcenter.heroku.com/articles/heroku-postgresql#connecting-in-php
https://docs.jelastic.com/connection-to-postgresql-for-php
http://tripal.info/tutorials/v3.x/installation/server-setup/ubuntu-18.04
*/
ini_set("display_errors", "1");
error_reporting(E_ALL);
require_once('config.php');
$res    = testConfig();
echo    $res;
$conn           = pgSqlConnect();
$createTable    = "CREATE TABLE IF NOT EXISTS  emp_data(
    name text,
    age integer,
    designation text,
    salary integer
    )";
$conn           = pgSqlConnect();
$result         = pg_query($conn, $createTable);
$insertQuery    = "insert into emp_data(name,age,designation,salary) values('Ashok',12,'test',12000)";
$result         = pg_query($conn, $insertQuery );
$query            = "select * from emp_data";
$result           =  pg_query($conn, $query);
while ($data = pg_fetch_array($result))
{
  print_R($data);
}



