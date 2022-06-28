<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>
<?php
require_once 'controller/UsuarioController.php';
require_once 'controller/ImovelController.php';

require_once 'view/menu.php';
if(isset($_GET['page'])){
    
    if($_GET['page'] == "imovel"){
        if(isset($_GET['action']))
        {
            if($_GET['action'] == 'editar')
            {
                $imovel = call_user_func(array('ImovelController','editar'),$_GET['id']);
                require_once 'view/cadImovel.php';
            }
            if($_GET['action'] == 'excluir')
            {
                $imovel = call_user_func(array('ImovelController','excluir'),$_GET['id']);
                require_once 'view/listImovel.php';
            }
            if($_GET['action']== "listar")
            {
                require_once 'view/listImovel.php';
            }
        }
        else
        {
            require_once 'view/cadImovel.php';
        }
    }
    if($_GET['page'] == "usuario"){
        if(isset($_GET['action']))
        {
            if($_GET['action'] == 'editar')
            {
                $usuario = call_user_func(array('usuarioController','editar'),$_GET['id']);
                require_once 'view/cadUsuario.php';
            }
            if($_GET['action'] == 'excluir')
            {
                $usuario = call_user_func(array('usuarioController','excluir'),$_GET['id']);
                require_once 'view/listUsuario.php';
            }
            if($_GET['action']== "listar")
            {
                require_once 'View/ListUsuario.php';
            }
        }
        else
        {
            require_once 'View/cadUsuario.php';
        }
    }
}
?>
