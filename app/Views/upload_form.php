<!DOCTYPE html>
<html>
<head>
    <title>Importar Contatos</title>
</head>
<body>
    <h1>Importe seu arquivo de contatos</h1>
    <form action="<?php echo base_url('contacts/import'); ?>" method="post" enctype="multipart/form-data">
        <label>Escolha o arquivo Excel:</label>
        <input type="file" name="file" required>
        <button type="submit">Importar</button>
    </form>
</body>
</html>
