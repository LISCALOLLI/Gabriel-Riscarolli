<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro de Fornecedores</h1>
<style> body { background-color: black;}  h1 { text-align: center; color: white;} h4 {color: white;} form {text-align: center;} </style>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO fornecedores(fornece)
        values (:fornece)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("fornece"=> $_POST['fornecedor']));
}
?>
<form method="post">
    <h4>Nome:</h4> 
    <input type="text" name="fornecedor">
    <br>
    <br>
    <br>
    <input type="submit" name="gravar" >

</form>
</body>
</html>