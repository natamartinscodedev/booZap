<!DOCTYPE html>
<html>
<head>
    <title>Contatos Importados</title>
</head>
<body>
    <h1>Contatos Importados</h1>
    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <strong><?php echo $contact['name']; ?></strong>: 
                <a href="<?php echo $contact['link']; ?>" target="_blank">Conversar no WhatsApp</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
