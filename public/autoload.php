<?php

spl_autoload_register(function ($class) {
    # echo 'autoload : '. $class . '<br>';
    require_once __DIR__ . '/../src/' . str_replace('\\',
            DIRECTORY_SEPARATOR, $class) . '.php';
});
