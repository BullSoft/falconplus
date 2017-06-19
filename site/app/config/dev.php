<?php
return array(
    'application' => array(
        "name"  => "site",
        "ns"    => "Plus\\Web\\",
        "mode"  => "Web",
        "staticUri" => "/",
        "url" => "http://localhost:8081/",
        "logFilePath" => "/tmp/Plus_site.log",
    ),
    "view" => array(
        "compiledPath"      => "/tmp/compiled/",
        "compiledExtension" => ".compiled",
    ),
    'db' => array(
        "host" => "127.0.0.1",
        "port" => 3306,
        "username" => "root",
        "password" => "",
        "dbname" => "test",
        "charset" => "utf8",
        "timeout" => 3, // 3 秒
    ),
);