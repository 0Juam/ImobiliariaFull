<?php
require_once 'controller/UsuarioController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuário</title>

    <style>
     td{
        color: white;
     }
     th{
        color: white;
     }
     h1{
        color: white;
     }
     main{
        padding: 10px;
        margin: 10px;
     }

    </style>
</head>

<body>
<main>
    <h1>Usuarios:</h1>
    <hr>
   
        <table>
            <thead>
                <tr>
                    <th>Login</th>
                    <th></th>
                    
                    <th>Permissão</th>
                    <th></th>
                    
                    <th><a style="background-color: green; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="Index.php?page=usuario">Novo</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usuarios = call_user_func(array('UsuarioController', 'listar'));

                if (isset($usuarios) && !empty($usuarios)) {
                    foreach ($usuarios as $usuario) {
                ?>
                <div id=botoes>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                            <td><?php echo $usuario->getLogin(); ?></td>
                           
                            <td> <?php echo $usuario->getPermissao(); ?></td>
                            
                            <td>
                                <a style="background-color: grey; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="index.php?page=usuario&action=editar&id=<?php echo $usuario->getId();?>">Editar</a>
                                <a style="background-color: red; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="index.php?page=usuario&action=excluir&id=<?php echo $usuario->getId();?>">Excluir</a>

                            </td>
                        </tr>
                    </div>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>