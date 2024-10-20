<h1>Seznam hráčů</h1>
<a href="/?action=create">Přidat nového hráče</a>
<ul>
    <?php foreach ($players as $player): ?>
    <li>
        <?= htmlspecialchars($player['name']) ?> (Elo: <?= $player['elo_rating'] ?>)
        <a href="/?action=edit&id=<?= $player['id'] ?>">Editovat</a>
        <a href="/?action=delete&id=<?= $player['id'] ?>" onclick="return confirm('Opravdu chcete smazat?');">Smazat</a>
    </li>
    <?php endforeach; ?>
</ul>