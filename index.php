<?php
session_start();

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
    case 'update_elo':
        $controller->updateElo();
        break;
    default:
        $controller->listPlayers();
        break;
}

if (isset($_SESSION['message'])) {
    echo '<p style="color: green;">' . htmlspecialchars($_SESSION['message']) . '</p>';
    unset($_SESSION['message']);
}
?>