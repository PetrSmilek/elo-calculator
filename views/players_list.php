<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam hráčů</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Seznam hráčů</h1>

        <a href="./index.php?action=create" class="btn btn-success mb-3">Přidat nového hráče</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Jméno</th>
                    <th>Elo rating</th>
                    <th>Akce</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($players as $player): ?>
                    <tr>
                        <td><?= htmlspecialchars($player['name']) ?></td>
                        <td><?= $player['elo_rating'] ?></td>
                        <td>
                            <a href="./index.php?action=edit&id=<?= $player['id'] ?>" class="btn btn-warning btn-sm">Editovat</a>
                            <a href="./index.php?action=delete&id=<?= $player['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Opravdu chcete smazat?');">Smazat</a>
                            <a href="./index.php?action=update_elo&id=<?= $player['id'] ?>" class="btn btn-info btn-sm">Vypočítat Elo</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>