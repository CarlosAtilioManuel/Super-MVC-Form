<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>

    <!-- css styles - main -->
    <style>
        label,input {
            display: block;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form action="/pessoa/form/save" method="post">
            <input type="hidden" value="<?= $model->id ?>" name="id">

            <label for="name">Nome:</label>
            <input type="text" value="<?= $model->nome ?>" id="name" name="name">
            
            <label for="cpf">CPF:</label> 
            <input type="number" value="<?= $model->cpf ?>" id="cpf" name="cpf">

            <label for="birthday">Data Nascimento:</label>
            <input type="date" value="<?= $model->data_nascimento ?>" id="birthday" name="birthday">

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>