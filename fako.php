
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recherche d'employés</title>
</head>
<body>
    <h1>Recherche multi-critères</h1>
    <form method="get">
        <label>Département :
            <select name="dept">
                <option value="">-- Tous --</option>
                <?php foreach ($departements as $d): ?>
                    <option value="<?= $d['dept_no'] ?>" <?= $dept == $d['dept_no'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($d['dept_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>
        <br><br>
        <label>Nom ou prénom :
            <input type="text" name="nom" placeholder="ECRIVEZ LE NOM ICI">
        </label>
        <br><br>
        <label>Âge min :
            <input type="number" name="age_min" min="15" value="15"placeholder="15">
        </label>
        <label>Âge max :
            <input type="number" name="age_max" min="15" value="200" placeholder="15">
        </label>
        <br><br>
        <button type="submit">Rechercher</button>
        <a href="#"><button type="button">Réinitialiser</button></a>
    </form>

</body>
</html>