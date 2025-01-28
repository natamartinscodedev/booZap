<!DOCTYPE html>
<html>
<head>
    <title>Contatos Importados</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <a href="<?= $contact['link'] ?>"><?= $contact['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
