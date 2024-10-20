<h1>Výpočet nového Elo ratingu</h1>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= htmlspecialchars($player['id']) ?>">

        <label for="current_elo">Aktuální Elo hráče:</label>
        <input type="number" name="current_elo" id="current_elo" value="<?= htmlspecialchars($player['elo_rating']) ?>" readonly>

        <label for="num_games">Počet partií:</label>
        <input type="number" name="num_games" id="num_games" required>

        <label for="avg_opponent_elo">Průměrné Elo soupeřů:</label>
        <input type="number" name="avg_opponent_elo" id="avg_opponent_elo" required>

        <label for="development_coefficient">Koeficient rozvoje (K):</label>
        <input type="number" name="development_coefficient" id="development_coefficient" required>

        <label for="result">Výsledek (1 = výhra, 0.5 = remíza, 0 = prohra):</label>
        <input type="number" name="result" step="0.1" id="result" required>

        <button type="submit">Vypočítat a aktualizovat Elo</button>
    </form>

    <a href="index.php">Zpět na seznam hráčů</a>