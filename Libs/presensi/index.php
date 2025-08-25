<?php
if (!session_id()) {
    session_start();
}

// TAMBAHKAN BARIS INI
define('APP_ROOT', __DIR__); // __DIR__ adalah konstanta magic PHP yang berisi path ke folder file ini.

require_once 'app/config/config.php';
require_once 'app/core/App.php';
require_once 'app/core/Controller.php';

$app = new App();