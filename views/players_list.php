<h1>Seznam hráčů</h1>
<a href="./index.php?action=create">Přidat nového hráče</a>
<ul>
    <?php foreach ($players as $player): ?>
    <li>
        <?= htmlspecialchars($player['name']) ?> (Elo: <?= $player['elo_rating'] ?>)
        <a href="./index.php?action=edit&id=<?= $player['id'] ?>">Editovat</a>
        <a href="./index.php?action=delete&id=<?= $player['id'] ?>" onclick="return confirm('Opravdu chcete smazat?');">Smazat</a>
    </li>
    <?php endforeach; ?>
</ul>