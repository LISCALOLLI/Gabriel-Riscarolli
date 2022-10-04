<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ínicio</title>
</head>
<body><style> body{background-color: black;} </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php

    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include 'menu.php';
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_meulista')
    {
        include 'm/lista.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_meucadastro')
    {
        include 'm/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_deleta')
    {
        include 'm/deleta.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atualiza')
    {  
        include 'm/atualiza.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_categorias')
    {
        include 'm/categorias.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_cadastroc')
    {
        include 'm/cadastroc.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_deletac')
    {
        include 'm/deletac.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_listac')
    {
        include 'm/listac.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_acp')
    {
        include 'm/atualizapai.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_dcp')
    {
        include 'm/deletapai.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_categoriasc')
    {
        include 'm/categoriasc.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atualizac')
    {
        include 'm/atualizac.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_carrinho')
    {
        include 'm/carrinho.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_carrinhoc')
    {
        include 'm/cadastrocarrinho.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_carrinhod')
    {
        include 'm/deletacarrinho.php';
    }