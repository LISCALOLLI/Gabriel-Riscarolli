<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Listagem de produtos</h1>
<table border="1" class="fds"><style> .fds { color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body {background-color: black; } h1 { text-align: center; color: white;}</style>
    <tr>
        <td>Imagem</td>
        <td>Código</td> 
        <td>Nome</td>
        <td>Características</td>
        <td>Valor</td>        
        <td>Estoque</td>
        <td>Resumo</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT * from carrinho  ";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><img src="<?php echo $linha['imagem']; ?>"></td>
                    <td><?php echo $linha['codigo']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['caracteristicas']; ?></td>   
                    <td><?php echo $linha['valor']; ?></td>                    
                    <td><?php echo $linha['estoque']; ?></td>                    
                    <td><?php echo $linha['resumo']; ?></td>
                    <td><?php echo " <a href=\"?pagina=p_carrinhod&id={$linha['codigo']}\">Deletar</a>"; ?></td>
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>