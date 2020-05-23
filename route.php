<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$urlParts = explode('/', $_GET['action']);

switch ($urlParts[0]) {
    case '':
        include_once('index.php');
        break;
}
