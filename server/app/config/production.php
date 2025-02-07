<?php
return [
    'application' => [
        "name"  => "demoServerProduction",
        "ns"    => "Demo\\Server\\",
        "mode"  => "Srv",
        "staticUri" => "/",
        "url" => "http//server.phalconphp.org/",
        "logFilePath" => "/tmp/demo_phalconplus.log",
    ],
    'dbDemo' => [
        "host" => "rds2yafurnqibun.mysql.rds.aliyuncs.com",
        "port" => 3306,
        "username" => getenv("PHP_MYSQL_USER_SHBB"),
        "password" => getenv("PHP_MYSQL_PASSWD_SHBB"),
        "dbname" => "shopbigbang",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
    ],
    'dbDemo_r' => [
        "host" => "rds2yafurnqibun.mysql.rds.aliyuncs.com",
        "port" => 3306,
        "username" => getenv("PHP_MYSQL_USER_SHBB"),
        "password" => getenv("PHP_MYSQL_PASSWD_SHBB"),
        "dbname" => "shopbigbang",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
    ],
    'redis' => [
        'host' => "10.161.41.106",
        'port' => 3306,
        'auth' => getenv("PHP_REDIS_AUTH"),
    ],
    'redis_r' => [
        'host' => ["10.161.41.106", "10.144.14.81"],
        'port' => 3306,
        'auth' => getenv("PHP_REDIS_AUTH"),
    ],
];