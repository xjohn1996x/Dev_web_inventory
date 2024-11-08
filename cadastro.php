<?php

require_once 'conexao.php';
 
//Resultados do banco

    require_once './services/equip/desktop/DesktopService.php';

    $desktopService = new DesktopService($mysqli);
    $resultado_desktops = $desktopService->obterTodos();

    require_once './services/equip/balancaat/Ba_at.php';

    $balancaAtService = new BalancaAtService($mysqli);
    $resultado_balanca_at = $balancaAtService->obterTodos();

    require_once './services/equip/balancacx/Ba_Cx.php';

    $baCxService = new BaCxService($mysqli);
    $resultado_balanca = $baCxService->obterTodos();

    require_once './services/equip/impbk/Imp_Bk.php';

    $imp_bk_Service = new Imp_bk_Service($mysqli);
    $resultado_impressora_bulk = $imp_bk_Service->obterTodos();


    require_once './services/equip/impcx/Imp_Cx.php';

    $imp_cx_Service = new Imp_cx_Service($mysqli);
    $resultado_impressora = $imp_cx_Service->obterTodos();
    
    require_once './services/equip/imppr/Imp_Pr.php';

    $imp_pr_Service = new Imp_pr_Service($mysqli);
    $resultado_imp_go = $imp_pr_Service->obterTodos();

    require_once './services/equip/monitor/Monitor.php';

    $monitorService = new MonitorService($mysqli);
    $resultado_monitores = $monitorService->obterTodos();

    require_once './services/equip/tef/Tef.php';

    $tefService = new TefService($mysqli);
    $resultado_tefs = $tefService->obterTodos();


include('protect.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INVENTÁRIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
    <style>
        .btg{
            font-size: 12px;
        }
    </style>
  </head>
  <body>
    <!--MENU-->
    <nav class="navbar bg-black navbar-expand-lg border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="inv.php"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg" alt="" width="35" height="35" class="d-inline-block align-text-top"></a>
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
      <!--End -->
      <br>
      <div class="card text-white bg-dark mb-3" style="max-width: 14rem;">
        <div class="card-header"><b>Selecione o Inventário</b></div>
       </div>
       <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <li class="page-item active" aria-current="page">
                <span class="page-link">Inventário Geral</span>
                </li>
                <li class="page-item"><a class="page-link" href="./cadastro_loja01.php">LOJA - 01</a></li>
                <li class="page-item"><a class="page-link" href="./cadastro_loja02.php">LOJA - 02</a></li>
                <li class="page-item"><a class="page-link" href="./cadastro_loja03.php">LOJA - 03</a></li>

            </ul>
            </nav>
     

    <div class="container mt-2 mb-2 col-12 ">
        <div class="row row-cols-1 row-cols-md-2 g-1">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-desktop-list" data-bs-toggle="list" href="#list-desktop" role="tab" aria-controls="list-desktop">Desktops</a>
                

                <a class="list-group-item list-group-item-action" id="list-monitor-list" data-bs-toggle="list" href="#list-monitor" role="tab" aria-controls="list-monitor">Monitores</a>
                
                <a class="list-group-item list-group-item-action" id="list-impcaixa-list" data-bs-toggle="list" href="#list-impcaixa" role="tab" aria-controls="list-impcaixa">Impressoras Caixa</a>
               
                <a class="list-group-item list-group-item-action" id="list-impat-list" data-bs-toggle="list" href="#list-impat" role="tab" aria-controls="list-impat">Impressoras Bulk</a>

                <a class="list-group-item list-group-item-action" id="list-bacx-list" data-bs-toggle="list" href="#list-bacx" role="tab" aria-controls="list-bacx">Balanças de Caixa</a>
                
                <a class="list-group-item list-group-item-action" id="list-baat-list" data-bs-toggle="list" href="#list-baat" role="tab" aria-controls="list-baat">Balanças de Atendimento</a>

                <a class="list-group-item list-group-item-action" id="list-go-list" data-bs-toggle="list" href="#list-go" role="tab" aria-controls="list-go">Impressoras de Preços</a>

                <a class="list-group-item list-group-item-action" id="list-tef-list" data-bs-toggle="list" href="#list-tef" role="tab" aria-controls="list-tef">TEFs</a>
                </div>
            </div>
            <div class="col-10">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-desktop" role="tabpanel" aria-labelledby="list-desktop-list">
                   
                                     <table class="table table-dark table-striped table-responsive ">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">LOJA</th>
                                            <th scope="col">SETOR</th>
                                            <th scope="col">PLACA</th>
                                            <th scope="col">CPU</th>
                                            <th scope="col">RAM</th>
                                            <th scope="col">MAC</th>
                                            <th scope="col">OBS</th>
                                            <th scope="col"> 
                                            <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_desk.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                            </th>
                                            
                                            </tr>
                                            
                                        </thead>
                                        <tbody class="col-10">
                                            <?php while ($rows_desktops = mysqli_fetch_assoc($resultado_desktops)){ ?>
                                            <tr>
                                            <td><?php echo $rows_desktops['id']; ?></td>
                                            <td><?php echo $rows_desktops['loja']; ?></td>
                                            <td><?php echo $rows_desktops['setor']; ?></td>
                                            <td><?php echo $rows_desktops['placa']; ?></td>
                                            <td><?php echo $rows_desktops['cpu']; ?></td>
                                            <td><?php echo $rows_desktops['ram']; ?></td>
                                            <td><?php echo $rows_desktops['mac']; ?></td>
                                            <td><?php echo $rows_desktops['obs']; ?></td>
                                                    
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/desktop/route.php?method=DEL&id=' . $rows_desktops['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                   
                                            </tr>
                                           
                                            <?php } ?>
                                            
                                        </tbody>
                                       </table>
                </div>
                
                <div class="tab-pane fade" id="list-monitor" role="tabpanel" aria-labelledby="list-monitor-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">SETOR</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">DIMENSÃO</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_monitor.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_monitores = mysqli_fetch_assoc($resultado_monitores)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_monitores['id']; ?></td>
                                                    <td><?php echo $rows_monitores['loja']; ?></td>
                                                    <td><?php echo $rows_monitores['setor']; ?></td>
                                                    <td><?php echo $rows_monitores['modelo']; ?></td>
                                                    <td><?php echo $rows_monitores['serie']; ?></td>
                                                    <td><?php echo $rows_monitores['dimensao']; ?></td>
                                                    <td><?php echo $rows_monitores['obs']; ?></td>
                                                    
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/monitor/route.php?method=DEL&id=' . $rows_monitores['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                    
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>

                <div class="tab-pane fade" id="list-impcaixa" role="tabpanel" aria-labelledby="list-impcaixa-list">
                                           <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">SETOR</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_impcx.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_impressora = mysqli_fetch_assoc($resultado_impressora)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_impressora['id']; ?></td>
                                                    <td><?php echo $rows_impressora['lojas']; ?></td>
                                                    <td><?php echo $rows_impressora['setor']; ?></td>
                                                    <td><?php echo $rows_impressora['modelo_imp']; ?></td>
                                                    <td><?php echo $rows_impressora['nserie_imp']; ?></td>
                                                    <td><?php echo $rows_impressora['ss_imp']; ?></td>                                                    
                                                    
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/impcx/route.php?method=DEL&id=' . $rows_impressora['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                   
                                                    
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>

                <div class="tab-pane fade" id="list-impat" role="tabpanel" aria-labelledby="list-impat-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">SETOR</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_impbk.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_impressora_bulk = mysqli_fetch_assoc($resultado_impressora_bulk)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_impressora_bulk['id']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['lojas']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['setor']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['modelo_impb']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['nserie_impb']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['ss_impb']; ?></td>                                                                                                   
                                                   
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/impbk/route.php?method=DEL&id=' . $rows_impressora_bulk['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                   
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>
                
                <div class="tab-pane fade" id="list-bacx" role="tabpanel" aria-labelledby="list-bacx-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_bacx.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_balanca = mysqli_fetch_assoc($resultado_balanca)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_balanca['id']; ?></td>
                                                    <td><?php echo $rows_balanca['lojas']; ?></td>
                                                    <td><?php echo $rows_balanca['modelo_b']; ?></td>
                                                    <td><?php echo $rows_balanca['nserie_b']; ?></td>
                                                    <td><?php echo $rows_balanca['ss_b']; ?></td>                                                    
                                                   
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/balancacx/route.php?method=DEL&id=' . $rows_balanca['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                    
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>

                <div class="tab-pane fade" id="list-baat" role="tabpanel" aria-labelledby="list-baat-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_baat.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_balanca_at = mysqli_fetch_assoc($resultado_balanca_at)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_balanca_at['id']; ?></td>
                                                    <td><?php echo $rows_balanca_at['lojas']; ?></td>
                                                    <td><?php echo $rows_balanca_at['modelo_bt']; ?></td>
                                                    <td><?php echo $rows_balanca_at['nserie_bt']; ?></td>
                                                    <td><?php echo $rows_balanca_at['ss_bt']; ?></td>                                                    
                                                   
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/balancaat/route.php?method=DEL&id=' . $rows_balanca_at['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                   
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>

                <div class="tab-pane fade" id="list-go" role="tabpanel" aria-labelledby="list-go-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_impgo.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_imp_go = mysqli_fetch_assoc($resultado_imp_go)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_imp_go['id']; ?></td>
                                                    <td><?php echo $rows_imp_go['lojas']; ?></td>
                                                    <td><?php echo $rows_imp_go['modelo_impgo']; ?></td>
                                                    <td><?php echo $rows_imp_go['nserie_impgo']; ?></td>
                                                    <td><?php echo $rows_imp_go['ss_impbgo']; ?></td>                                                    
                                                   
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/imppr/route.php?method=DEL&id=' . $rows_imp_go['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                   
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>
                <div class="tab-pane fade" id="list-tef" role="tabpanel" aria-labelledby="list-tef-list">
                                            <table class="table table-dark table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    <th scope="col"> 
                                                    <?php echo '<td><a class="btg btn btn-xs btn-success" href="./exc/excel_tef.php"><b>ARQUIVO EXCEL</b></a></td>'; ?>
                                                    </th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php while ($rows_tefs = mysqli_fetch_assoc($resultado_tefs)){ ?>
                                                    <tr>
                                                    <td><?php echo $rows_tefs['id']; ?></td>
                                                    <td><?php echo $rows_tefs['lojas']; ?></td>
                                                    <td><?php echo $rows_tefs['modelo_tef']; ?></td>
                                                    <td><?php echo $rows_tefs['nserie_tef']; ?></td>
                                                    <td><?php echo $rows_tefs['ss_tef']; ?></td>                                                    
                                                    
                                                    <td>
                                                        <?php echo '<td><a class="btg btn btn-xs btn-danger" href="/Site//services/equip/tef/route.php?method=DEL&id=' . $rows_tefs['id'] . '"><b>Excluir</b></a></td>'; ?>
                                                    </td>
                                                  
                                                    </tr>
                                                
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- PDF -->
    <script>
        document.getElementById('gerarPdf').addEventListener('click', function() {
            // Chamar a função PHP que gera o PDF
            window.location.href = '/Site//pdf/gerar_pdf.php';
        });
    </script>


      <script type="text/javascript">
        $('#ModalED').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Botão que acionou o modal
            var recipient = button.data('whatever') // Extrai informação dos atributos data-*
            // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
            // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
            var modal = $(this)
            modal.find('.modal-title').text('Nova mensagem para ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
        </script>
        
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        

     
    </body>
</html>