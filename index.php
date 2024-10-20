<?php
include_once('config/database.php');
include_once('controllers/playerController.php');

$db = getDbConnection();

$controller = new PlayerController($db);

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'create':
        $controller->createPlayer();
        break;
    case 'edit':
        $controller->editPlayer();
        break;
    case 'delete':
        $controller->deletePlayer();
        break;
    default:
        $controller->listPlayers();
        break;
}
?>