<?php

spl_autoload_register(function ($className) {
    if (class_exists($className, false)) {
        return false;
    }

    $documentRoot = __DIR__ . DIRECTORY_SEPARATOR;

    // формируем путь к классу
    $parts = explode('\\', $className);
    $path = implode(DIRECTORY_SEPARATOR, array_map('ucfirst', $parts)) . '.php';

    if (file_exists($documentRoot . $path)) {
        include $path;
    }
});
