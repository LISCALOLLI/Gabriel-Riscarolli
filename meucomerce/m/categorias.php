<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Listagem de categorias</h1>
<table border="1" class="fds"><style> .fds { color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body {background-color: black; } h1 { text-align: center; color: white;}</style>
    <tr>
        <td>Código</td>
        <td>Categoria</td>
        <td>Categoria Pai</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT c.id, c.categoria_pai, c.descricao from categorias c " ;
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td> 
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><?php echo $linha['categoria_pai']; ?></td>
                    <td><?php echo "<a href=\"?pagina=p_atualizac&id={$linha['id']}\">Atualizar</a>"; ?></td>
                    <td><?php echo " <a href=\"?pagina=p_deletac&id={$linha['id']}\">Deletar</a>"; ?></td>
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>