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
            header('Location: index.php');
            exit;
        }

        include('views/create_player.php');
    }

    public function editPlayer() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $rating = $_POST['rating'];
    
            $this->playerModel->updatePlayer($id, $name, $rating);
    
            header('Location: index.php');
            exit;
        }
    
        if (isset($_GET['id'])) {
            $player = $this->playerModel->getPlayer($_GET['id']);
            include('views/edit_player.php');
        } else {
            echo "Hráč nebyl nalezen.";
        }
    }    

    public function deletePlayer() {
        $id = $_GET['id'];
        $this->playerModel->deletePlayer($id);
        header('Location: index.php');
    }

    public function updateElo() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $currentElo = $_POST['current_elo'];
            $numGames = $_POST['num_games'];
            $avgOpponentElo = $_POST['avg_opponent_elo'];
            $developmentCoefficient = $_POST['development_coefficient'];
            $result = $_POST['result'];
    
            $expectedScore = 1 / (1 + pow(10, ($avgOpponentElo - $currentElo) / 400));
            $newElo = $currentElo + $developmentCoefficient * ($result - $expectedScore);
    
            $this->playerModel->updateElo($id, null, round($newElo));
    
            header('Location: index.php');
            exit;
        }
    
        if (isset($_GET['id'])) {
            $player = $this->playerModel->getPlayer($_GET['id']);
            include('views/update_elo.php');
        } else {
            echo "Hráč nebyl nalezen.";
        }
    }    
}

?>