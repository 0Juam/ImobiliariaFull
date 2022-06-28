<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Imóvel</title>
</head>
<style>
main {
            width: 250px;
            margin: auto;
            margin-top: 10%;
        }

        label {
            font-family: Roboto, sans-serif;
            font-size: 14px;
            font-weight: 550;
            color: white;
        }

        input {
            font-size: 12px;
            width: 230px;
            height: 30px;
            border: none;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            padding: 0 10px 0 10px;
            background-color: #ebebeb;
        }

        input:hover,
        select:hover {
            box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.025)
        }

        *,
        *:hover,
        *:focus,
        *:active {
            border: 0px !important;
            outline: none !important;
        }

        select {
            width: 250px;
            height: 35px;
            border: none;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            padding: 0 10px 0 10px;
            background-color: #ebebeb;
        }

        h1 {
            font-family: sans-serif;
            font-weight: 800;
            font-size: 35px;
            text-align: center;
            margin: 0 0 45px 0;
            color: white;
        }

        #btnSalvar {
            width: 250px;
            height: 40px;
            border-radius: 10px;
            margin: 5px 0 15px 0;
            color: #fff;
            font-weight: 800;
            background-color: #48a122;
        }

        #btnSalvar:hover {
            background-color: #3f8720;
            box-shadow: 0 0 10px 5px rgba(63, 135, 32, 0.08)
        }
    </style>
<body>
<main>
  <h1>Cadastro Imóvel:</h1>
<form name="cadImovel" id="cadImovel" action="" method="post">
<label>Descrição:</label><br/> 
<input type="text" name="descricao" id="descricao"  value="<?php echo isset($imovel)?$imovel->getDescricao():''?>"><br/>
<label>Valor:</label> <br/>
<input type="number" name="valor" id="valor"  value="<?php echo isset($imovel)?$imovel->getValor():''?>"><br/>  
<label>Tipo:</label> 
<select name="tipo" id="tipo">
   <option value="0" selected>--selecione--</option>
   <option value="V" <?php echo isset($imovel) && $imovel->getTipo() == 'V' ? 'selected' : '' ?>>Venda</option>
   <option value="A" <?php echo isset($imovel) && $imovel->getTipo() == 'A' ? 'selected' : '' ?>>Aluguel</option>
   </select><br/><br/>
   <input type="hidden" name="id" id="id" value="<?php echo isset($imovel) ? $imovel->getId() : ''; ?>">
   <input type="submit" name="btnSalvar" id="btnSalvar">
   </form>
    </main>

   <?php
 if(isset($_POST['btnSalvar'])){

    call_user_func(array('ImovelController','salvar'));
    header('Location:index.php?page=imovel&action=listar'); }

   ?>
</body>
</html>