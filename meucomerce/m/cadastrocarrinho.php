<?php

    if(isset($_POST['atualizar']))
    {
        $sql = "INSERT INTO pcarrinho(nome,caracteristicas,valor,estoque,imagem,resumo)
        values (:nome,:caracteristicas,:valor,:estoque,:imagem,:resumo)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("nome" => $_POST['nome'],
    "valor" => $_POST['valor'],"caracteristicas"=> $_POST['caracteristica'], "estoque"=> $_POST['estoque'],
    "imagem"=> $_POST['imagem'],
    "resumo"=> $_POST['resumo']));
    }

?>  
<h1>Adicionar ao Carrinho</h1>
<?php
    $sql = "SELECT * FROM produtos where codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=> $_GET['id']));
    $linha = $produto->fetch();

?>
<form method="post"><style>h4 {color: white;} h1{text-align: center; color: white;} body {background-color: black;} form{text-align: center;} </style>
<h4>Nome:</h4> 
    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" >
    <br>
    <h4>Características:</h4> 
    <input type="text" name="caracteristica" value="<?php echo $linha['caracteristicas']; ?>" >
    <br>
    <h4>Valor:</h4>
    <input type="text" name="valor" value="<?php echo $linha['valor']; ?>" >
    <br>
    <h4>Estoque:</h4> 
    <input type="text" name="estoque" value="<?php echo $linha['estoque']; ?>">
    <br>
    <h4>Imagem:</h4> 
    <input type="text" name="imagem" value="<?php echo $linha['imagem']; ?>">
    <br>
    <h4>Resumo:</h4> 
    <input type="text" name="resumo" value="<?php echo $linha['resumo']; ?>" >
    <br>
    <br>
    <br>
    <br>
    <input type="submit" name="atualizar" value="Carrinho">
</form>