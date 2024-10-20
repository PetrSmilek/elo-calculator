<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidat nového hráče</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Přidat nového hráče</h1>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Jméno hráče:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Přidat hráče</button>
        </form>

        <a href="index.php" class="btn btn-secondary mt-3">Zpět na seznam hráčů</a>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
