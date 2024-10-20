
<h1>Editovat hráče</h1>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?= $player['id'] ?>">
    <label for="name">Jméno hráče:</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($player['name']) ?>" required>
    <label for="rating">Elo rating:</label>
    <input type="number" name="rating" id="rating" value="<?= $player['elo_rating'] ?>" required>
    <button type="submit">Uložit změny</button>
</form>
