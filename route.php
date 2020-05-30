<?php

require_once('controllers/adminController.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if ($_GET['action'] == '')
    $_GET['action'] = 'home';

$urlParts = explode('/', $_GET['action']);

switch ($urlParts[0]) {
    case 'home':
        $Controller = new adminController;
        $Controller->mostrarIndex();
        break;
    case 'destino':
        $Controller = new adminController;
        $Controller->mostrarDestino();
        break;
    case 'combo':
        $Controller = new adminController;
        $Controller->mostrarCombo();
        break;
}
