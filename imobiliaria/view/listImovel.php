<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Lista Imóvel</title>
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
   
</body>
</html>
<h1>Imovel</h1>
<hr>
<div>
   <table style="top:40px;">
 
      <tr>
         <td>Descricao</td>
         
         <td>Valor</td>
      
         <td>Tipo</td>
         <td><a style="background-color: green; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="Index.php?page=imovel">Novo</td>
      </tr>  
   
    <tbody>
       <?php
       require_once 'controller/ImovelController.php';
       $imovel = call_user_func(array('ImovelController','listar'));
       if(isset($imovel)){
           foreach ($imovel as $imovel){
               ?>
               <tr>
                  <td ><?php echo $imovel->getDescricao(); ?></td>
            
                  <td><?php echo $imovel->getValor(); ?></td>
            
                  <td><?php echo $imovel->getTipo(); ?></td>
               
                  <td>
                        <a style="background-color: grey; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="index.php?page=imovel&action=editar&id=<?php echo $imovel->getId();?>">Editar</a>
                        <a style="background-color: red; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" href="index.php?page=imovel&action=excluir&id=<?php echo $imovel->getId();?>">Excluir</a>
                  </td>
               </tr>
               <?php

           }
       } else{
           ?>
           <tr>
             <td colspan="5">Nenhum registro encontrado</td>
           </tr>
           <?php
       }
       ?>
       </tbody>
       </table>
       </div>
       