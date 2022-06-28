<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <style>
        body {
            background-color: #001524;
        }
   </style>
   </head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Imobiliaria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="Index.php?page=imovel&action=listar">Imóveis</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Index.php?page=usuario&action=listar">Usuários</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Index.php?page=imovel">Imóveis</a></li>
            <li><a class="dropdown-item" href="Index.php?page=usuario">Usuários</a></li>
          </ul>
        </li>
        </ul>
        </div>
    </div>
    </nav>
</body>
</html>