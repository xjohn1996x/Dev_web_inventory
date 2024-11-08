<?php

include('protect.php')

?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <!--MENU-->
    <nav class="navbar bg-black navbar-expand-lg border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg" alt="" width="35" height="35" class="d-inline-block align-text-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="painel.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inv.php">Cadastro de Equipamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Inventário</a>
              </li>
            </ul>
            <span class="navbar-text">
            
              <b>Aplicação web - PHP/HTML| Bem vindo, <?php echo $_SESSION['nome']; ?>, <?php echo $_SESSION['sigla']; ?>  <a type="button" href="logout.php" class="btn btn-danger">Sair</a></b>   
            </span>
          </div>
        </div>
      </nav>

      <!-- Pag Inicial -->
      <!--Cards-->
      <br>
      <div class="card mb-3" style="max-width: 840px;">
        <div class="row g-5">
          <div class="col-md-4">
            <img src="img/01.jpg" class="img-fluid rounded-start" alt="Rede">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Conexão Local</h5>
              <p class="card-text">Sistema de Inventário com instalação de servidor SQL em maquina local, com acesso via endereço ip local.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 840px;">
        <div class="row g-5">
          <div class="col-md-4">
            <img src="img/02.jpg" class="img-fluid rounded-start" alt="Equipamentos">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Registro de Equipamentos</h5>
              <p class="card-text">Armazena dados de equipamentos, como numero de serie, especificações entre outras informações.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 840px;">
        <div class="row g-5">
          <div class="col-md-4">
            <img src="img/03.jpg" class="img-fluid rounded-start" alt="Relatorios">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Relatorios</h5>
              <p class="card-text">Exporte os dados armazenados nos formatos EXCEL e PDF.</p>
            </div>
          </div>
        </div>
      </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
  </body>
</html>