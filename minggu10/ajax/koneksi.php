<?php
$serverName = "195.85.19.218,1433";
$connectionOptions = array(
    "Database" => "prakwebdb",
    "Uid" => "PBL_ADMIN",
    "PWD" => "TatibPastiBisa123"
);
$koneksi = sqlsrv_connect($serverName, $connectionOptions);
