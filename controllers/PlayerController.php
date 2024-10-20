<?php

include_once('models/player.php');

class PlayerController {
    private $playerModel;

    public function __construct($db) {
        $this->playerModel = new Player($db);
    }

    public function listPlayers() {
        $players = $this->playerModel->getAllPlayers();
        include('views/players_list.php');
    }

    public function createPlayer() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $this->playerModel->createPlayer($name);
            header('Location: /');
        }

        $player = $this->playerModel->getPlayer($_GET['id']);
        include('views/edit_player.php');
    }

    public function deletePlayer() {
        $id = $_GET['id'];
        $this->playerModel->deletePlayer($id);
        header('Lodation: /');
    }

}

?>