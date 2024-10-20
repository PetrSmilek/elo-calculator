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
    echo '<div class="alert alert-success text-center h6 mx-auto w-50" role="alert">' . htmlspecialchars($_SESSION['message']) . '</div>';
    unset($_SESSION['message']);
}
?>