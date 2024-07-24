
<?php
require_once 'connexion.php';


$requete=$bdd->prepare("SELECT * FROM taches");
$requete->execute();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="todolist">
    <title>TODOLIST</title>
</head>
<body>
    <header>
        <h1>TODOLIST</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($requete as $tache) : ?>
                <li>
                    tache :<?= $tache['tache'] ; ?>
                    <a href="delete.php?id=<?= $tache['id'] ; ?>">suprimer tache</a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h2>Nouvelle tache</h2>
        <form action="creationTache.php" method="post">
            <label for="">Tache*</label>
            <input type="text" name="tache" id="tache" required>
            <input type="submit" name="valider" value="valider">
        </form>
    </main>
</body>
</html>