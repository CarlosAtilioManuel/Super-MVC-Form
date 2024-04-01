<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>

    <style>
        *{
            text-align: center;
        }

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .a{
            text-decoration: none;
            /* width: 200px; */
            height: 3rem;
            background-color: #aa33bb;
            text-align: center;
            line-height: 3rem;
            font-size: 18pt;
            text-transform: uppercase;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 10px;
        }
        a:hover {
            opacity: .8;
            color: #aa33bb;
            text-decoration: none;
        }

        #btnDelete{
            height: 40px;
            width: 40px;
            background-color: #000;
            color: #fff;
            border-radius: 10px;
        }
        #btnDelete:hover{
            transition: all .4s ease;
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pessoa/delete?id=<?= $item->id ?>" id="btnDelete">X</a>
            </td>

            <td><?=$item->id ?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?=$item->cpf ?></td>
            <td><?=$item->data_nascimento ?></td>
        </tr>
        <?php endforeach; ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado!</td>
            </tr>
        <?php endif; ?>
    </table>

    <a href="/pessoa/form">Cadastrar</a>
</body>
</html>