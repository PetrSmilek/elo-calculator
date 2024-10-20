<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výpočet nového Elo ratingu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Výpočet nového Elo ratingu</h1>

        <form method="POST" action="">
            <div class="form-group">
                <label for="current_elo">Aktuální Elo hráče:</label>
                <input type="number" class="form-control" name="current_elo" id="current_elo" value="<?= htmlspecialchars($player['elo_rating']) ?>" readonly>
            </div>

            <div class="form-group">
                <label for="num_games">Počet partií:</label>
                <input type="number" class="form-control" name="num_games" id="num_games" required>
            </div>

            <div class="form-group">
                <label for="avg_opponent_elo">Průměrné Elo soupeřů:</label>
                <input type="number" class="form-control" name="avg_opponent_elo" id="avg_opponent_elo" required>
            </div>

            <div class="form-group">
                <label for="development_coefficient">Koeficient rozvoje (K):</label>
                <input type="number" class="form-control" name="development_coefficient" id="development_coefficient" required>
            </div>

            <div class="form-group">
                <label for="result">Výsledek (1 = výhra, 0.5 = remíza, 0 = prohra):</label>
                <input type="number" class="form-control" name="result" step="0.1" id="result" required>
            </div>

            <input type="hidden" name="id" value="<?= $player['id'] ?>">

            <button type="submit" class="btn btn-primary">Vypočítat a aktualizovat Elo</button>
        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Zpět na seznam hráčů</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>