<?php

spl_autoload_register(function (string $class) {
    $pref = 'FruitGarden';
    if (strncmp($pref, $class, strlen($pref)) !== 0) {
        return;
    }
    $relative_class = substr($class, strlen($pref));
    $file = __DIR__ . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
