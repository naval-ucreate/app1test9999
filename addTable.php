<?php
require_once('config.php');
$createTable = "CREATE TABLE emp_data(
    name text,
    age integer,
    designation text,
    salary integer
    )";
$conn   = pgSqlConnect();
$result = pg_query($conn, $createTable);
