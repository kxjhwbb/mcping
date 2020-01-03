<?php

require_once "vendor/autoload.php";

use mcping\MinecraftPing;

function handleEx($e)
{
    echo $e->getMessage();
}
set_exception_handler('handleEx');

$servers = [
    "P.mcsky.cc:25564",
    "P.mcsky.cc:25565",
    "P.mcsky.cc:25566"
];

foreach ($servers as $server){
    try{
        $ping = new MinecraftPing($server, 2);
        print_r($ping->QueryOldPre17());
    }catch (Exception $e){
        echo $e->getMessage();
    }
}


