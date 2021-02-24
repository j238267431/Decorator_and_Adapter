<?php

spl_autoload_register(function($classname){
    require_once $classname.'.php';
});
$send = new Telegram(new SMS(new Decorator(new Sender())));
$send->send('message');
