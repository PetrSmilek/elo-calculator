<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editovat hráče</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editovat hráče</h1>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Jméno hráče:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= htmlspecialchars($player['name']) ?>" required>
            </div>

            <div class="form-group">
                <label for="rating">Elo rating:</label>
                <input type="number" class="form-control" name="rating" id="rating" value="<?= $player['elo_rating'] ?>" required>
            </div>

            <input type="hidden" name="id" value="<?= $player['id'] ?>">

            <button type="submit" class="btn btn-primary">Uložit změny</button>
        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Zpět na seznam hráčů</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
