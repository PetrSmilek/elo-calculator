<?php
class Player {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllPlayers() {
        return $this->db->query("SELECT * FROM players")->fetchAll();
    }

    public function getPlayer($id) {
        $stmt = $this->db->prepare("SELECT * FROM players WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function createPlayer($name) {
        $stmt = $this->db->prepare("INSERT INTO players (name, elo_rating) VALUES (:name, 1500)");
        return $stmt->execute(['name' => $name]);
    }

    public function updatePlayer($id, $name, $rating) {
        $stmt = $this->db->prepare("UPDATE players SET name = :name, elo_rating = :rating WHERE id = :id");
        return $stmt->execute(['id' => $id, 'name' => $name, 'rating' => $rating]);
    }

    public function deletePlayer($id) {
        $stmt = $this->db->prepare("DELETE FROM players WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function updateElo($id, $name = null, $eloRating = null) {
        $params = ['id' => $id];
        $sql = "UPDATE players SET ";
    
        if ($name !== null) {
            $sql .= "name = :name, ";
            $params['name'] = $name;
        }
    
        if ($eloRating !== null) {
            $sql .= "elo_rating = :elo_rating, ";
            $params['elo_rating'] = $eloRating;
        }
    
        $sql = rtrim($sql, ', ') . " WHERE id = :id";
    
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
    }    
}

?>