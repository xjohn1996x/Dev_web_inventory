<?php

// Retorna os dados da tabela
include_once('conexao.php');
$result_desktops = "SELECT * FROM desktop";
$resultado_desktops = mysqli_query($mysqli, $result_desktops);

include_once('conexao.php');
$result_monitores = "SELECT * FROM monitores";
$resultado_monitores = mysqli_query($mysqli, $result_monitores);

include_once('conexao.php');
$result_impressora = "SELECT * FROM impressora";
$resultado_impressora = mysqli_query($mysqli, $result_impressora);

include_once('conexao.php');
$result_impressora_bulk = "SELECT * FROM impressora_bulk";
$resultado_impressora_bulk = mysqli_query($mysqli, $result_impressora_bulk);

include_once('conexao.php');
$result_balanca = "SELECT * FROM balanca_caixa";
$resultado_balanca = mysqli_query($mysqli, $result_balanca);

include_once('conexao.php');
$result_balanca_at = "SELECT * FROM balanca_atendimento";
$resultado_balanca_at = mysqli_query($mysqli, $result_balanca_at);

include_once('conexao.php');
$result_imp_go = "SELECT * FROM impressora_gondolas";
$resultado_imp_go = mysqli_query($mysqli, $result_imp_go);

include_once('conexao.php');
$result_tefs = "SELECT * FROM tefs";
$resultado_tefs = mysqli_query($mysqli, $result_tefs);





if (isset($_POST['submit'])) {
    include_once('conexao.php');

    // Validar qual será o tipo de cadastro
    if (isset($_POST['type'])) {
        // Identificar o tipo de cadastro
        switch ($_POST['type']) {
            case "desktop":
                // Coletar as informações.
                $vlojas = $_POST['lojas'];
                $vsetor1 = $_POST['setor1'];
                $vplaca = $_POST['placa'];
                $vcpu = $_POST['cpu'];
                $vram = $_POST['ram'];
                $vmac = $_POST['mac'];
                $vdesks = $_POST['desks'];

                // Inserir dados
                $desktop = $mysqli->prepare("INSERT INTO desktop (loja, setor, placa, cpu, ram, mac, obs) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $desktop->bind_param("sssssss", $vlojas, $vsetor1, $vplaca, $vcpu, $vram, $vmac, $vdesks);

                $result_desktop = $desktop->execute();

                if ($result_desktop) {
                    // Inserção bem-sucedida
                } else {
                    // Tratar erro na inserção
                }

                $desktop->close();
                $mysqli->close();
                break;
            case "monitor":
                // Coletar as informações.
                $vlojas1 = $_POST['lojas1'];
                $vsetor2 = $_POST['setor2'];
                $vmonitor = $_POST['monitor'];
                $vserie = $_POST['serie'];
                $vdimensao = $_POST['dimensao'];
                $vmonitors = $_POST['monitors'];

                // Inserir dados
                $vmonitores = $mysqli->prepare("INSERT INTO monitores (loja,setor,modelo,serie,dimensao, obs) VALUES (?, ?, ?, ?, ?, ?)");
                $vmonitores->bind_param("ssssss", $vlojas1, $vsetor2, $vmonitor, $vserie, $vdimensao, $vmonitors);

                $result_monitores = $vmonitores->execute();

                if ($result_monitores) {
                    // Inserção bem-sucedida
                } else {
                    // Tratar erro na inserção
                }

                $vmonitores->close();
                $mysqli->close();
                break;
            
                case "impressora":
                    // Coletar as informações.
                    $vlojasimp = $_POST['lojasimp'];
                    $vsetor3 = $_POST['setor3'];
                    $vimp = $_POST['imp'];
                    $vimps = $_POST['imps'];
                    $vimpss = $_POST['impss'];
    
                    // Inserir dados
                    $vimpressora = $mysqli->prepare("INSERT INTO impressora (lojas, setor, modelo_imp,nserie_imp,ss_imp) VALUES (?, ?, ?, ?, ?)");
                    $vimpressora->bind_param("sssss", $vlojasimp, $vsetor3, $vimp, $vimps, $vimpss);
    
                    $result_impressora = $vimpressora->execute();
    
                    if ($result_impressora) {
                        // Inserção bem-sucedida
                    } else {
                        // Tratar erro na inserção
                    }
    
                    $vimpressora->close();
                    $mysqli->close();
                    break;

                    case "impressora_bulk":
                        // Coletar as informações.
                        $vlojasimpb = $_POST['lojasimpb'];
                        $vsetor4 = $_POST['setor4'];
                        $vimpb = $_POST['impb'];
                        $vimpsb = $_POST['impsb'];
                        $vimpssb = $_POST['impssb'];
        
                        // Inserir dados
                        $vimpressora_bulk = $mysqli->prepare("INSERT INTO impressora_bulk (lojas,setor,modelo_impb,nserie_impb,ss_impb) VALUES (?, ?, ?, ?, ?)");
                        $vimpressora_bulk->bind_param("sssss", $vlojasimpb, $vsetor4, $vimpb, $vimpsb, $vimpssb);
        
                        $result_impressora_bulk = $vimpressora_bulk->execute();
        
                        if ($result_impressora_bulk) {
                            // Inserção bem-sucedida
                        } else {
                            // Tratar erro na inserção
                        }
        
                        $vimpressora_bulk->close();
                        $mysqli->close();
                        break;
                        
                        case "balancacaixa":
                            // Coletar as informações.
                            $vlojas_balancacx = $_POST['lojas_balancacx'];
                            $vbalancacx = $_POST['balancacx'];
                            $vbalancacxs = $_POST['balancacxs'];
                            $vbalancacxss = $_POST['balancacxss'];
            
                            // Inserir dados
                            $vbalancacaixa = $mysqli->prepare("INSERT INTO balanca_caixa (lojas,modelo_b,nserie_b,ss_b) VALUES (?, ?, ?, ?)");
                            $vbalancacaixa->bind_param("ssss", $vlojas_balancacx, $vbalancacx, $vbalancacxs, $vbalancacxss);
        
                           
                            $result_balancacaixa = $vbalancacaixa->execute();
        
                            if ($result_balancacaixa) {
                                // Inserção bem-sucedida
                            } else {
                                // Tratar erro na inserção
                            }
            
                            $vbalancacaixa->close();
                            $mysqli->close();
                            break;

                            case "balanca_at":
                                // Coletar as informações.
                                $vlojas_balancaat = $_POST['lojas_balancaat'];
                                $vbalancaat = $_POST['balancaat'];
                                $vbalancaats = $_POST['balancaats'];
                                $vbalancaatss = $_POST['balancaatss'];
                
                                // Inserir dados
                                $vbalanca_at = $mysqli->prepare("INSERT INTO balanca_atendimento (lojas,modelo_bt,nserie_bt,ss_bt) VALUES (?, ?, ?, ?)");
                                $vbalanca_at->bind_param("ssss", $vlojas_balancaat, $vbalancaat, $vbalancaats, $vbalancaatss);
            
                               
                                $result_balanca_at = $vbalanca_at->execute();
            
                                if ($result_balanca_at) {
                                    // Inserção bem-sucedida
                                } else {
                                    // Tratar erro na inserção
                                }
                
                                $vbalanca_at->close();
                                $mysqli->close();
                                break;

                                case "gondola":
                                    // Coletar as informações.
                                    $vlojas_go = $_POST['lojas_go'];
                                    $vgo = $_POST['go'];
                                    $vgos = $_POST['gos'];
                                    $vgoss = $_POST['goss'];
                    
                                    // Inserir dados
                                    $vgondola = $mysqli->prepare("INSERT INTO impressora_gondolas (lojas,modelo_impgo,nserie_impgo,ss_impbgo) VALUES (?, ?, ?, ?)");
                                    $vgondola->bind_param("ssss", $vlojas_go, $vgo, $vgos, $vgoss);
                
                                   
                                    $result_gondola = $vgondola->execute();
                
                                    if ($result_gondola) {
                                        // Inserção bem-sucedida
                                    } else {
                                        // Tratar erro na inserção
                                    }
                    
                                    $vgondola->close();
                                    $mysqli->close();
                                    break;

                                    case "tef_ca":
                                        // Coletar as informações.
                                        $vlojas_tef = $_POST['lojas_tef'];
                                        $vtef = $_POST['tef'];
                                        $vtefs = $_POST['tefs'];
                                        $vtefss = $_POST['tefss'];
                        
                                        // Inserir dados
                                        $vtef_ca = $mysqli->prepare("INSERT INTO tefs (lojas,modelo_tef,nserie_tef,ss_tef) VALUES (?, ?, ?, ?)");
                                        $vtef_ca->bind_param("ssss", $vlojas_tef, $vtef, $vtefs, $vtefss);
                    
                                       
                                        $result_tef_ca = $vtef_ca->execute();
                    
                                        if ($result_tef_ca) {
                                            // Inserção bem-sucedida
                                        } else {
                                            // Tratar erro na inserção
                                        }
                        
                                        $vtef_ca->close();
                                        $mysqli->close();
                                        break;
            default:
                echo "Tipo de cadastro não reconhecido.";
                break;
        }
    }
}

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
        .p-card {
    border: 1px solid #eee
}

.p-details {
    padding: 10px;
    border-radius: 0px;
    background: #000;
    color: #fff;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px
}

body {
    background: #eee
}

.spec span {
    font-size: 13px
}

.spec h6 {
    font-size: 16px;
    font-weight: 500
}

.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 12px;
    height: 12px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease
}

.line {
    background-color: #fff;
    margin-top: 4px;
    margin-bottom: 4px;
    height: 0.2px
}

.list{
    width: 1400px;
    right: 90%;
}


    </style>
  </head>
  <body>
    <!--MENU-->
    <nav class="navbar bg-black navbar-expand-lg border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="inv.php"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg"" alt="" width="35" height="35" class="d-inline-block align-text-top"></a>
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
            </ul>
            <span class="navbar-text">
              <b>Aplicação web - PHP/HTML| Bem vindo, <?php echo $_SESSION['nome']; ?>, <?php echo $_SESSION['sigla']; ?>  <a type="button" href="logout.php" class="btn btn-danger">Sair</a></b>   
            </span>
          </div>
        </div>
      </nav>
      <!--End -->
      
      <!--CAT -->
      <div class="container mt-5 mb-5 ">
        <div class="row row-cols-1 row-cols-md-5 g-3">
            <div class="col-md-4">
                <div class="p-card">

                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-pc-display"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                        </svg>    
                        <h5>Desktop</h5><span>   
                        </span>
                       
                      
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">RAM</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">PLACA</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">CPU</h6><span>X</span>
                            </div>
                        </div>
                        <div class="buy mt-3 "><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar01">Cadastrar</button>
                          <!-- Modal cadastrar-->
                          <div class="modal fade text-black" id="cadastrar01" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">

                                        <div class="form-group">
                                        <label class="col-md-5 control-label" for="lojas"><b>SELECIONE A LOJA</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas" name="lojas" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="setor1"><b>SELECIONE O SETOR</b></label>
                                        <div class="col-md-5">
                                                <select required id="setor1" name="setor1" class="form-control">
                                                <option value="">Selecione o Setor</option>
                                                <option value="Caixa">Caixa</option>
                                                <option value="CPD">CPD</option>
                                                <option value="Financeiro">Financeiro</option>
                                                <option value="Peços">Peços</option>
                                                <option value="Fente">Frente de Loja</option>
                                                <option value="Monitoramento">Monitoramento</option>
                                                <option value="Avária">Avária</option>
                                                <option value="T.I">T.I</option>
                                                <option value="Servidor de Aplicação">Servidor</option>
                                                <option value="Gerente">Gerente</option>
                                                <option value="Logistica">Logistica</option>
                                                <option value="RH">RH</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-8 control-label" for="cpu"><b>SELECIONE O PROCESSADOR</b></label>
                                        <div class="col-md-5">
                                                <select required id="processador" name="cpu" class="form-control">
                                                <option value="">Processador</option>
                                                <option value="Celeron">Celeron</option>
                                                <option value="Dual Core">Dual Core</option>
                                                <option value="PENTIUM">PENTIUM</option>
                                                <option value="I3">I3</option>
                                                <option value="I5">I5</option>
                                                <option value="I7">I7</option>
                                                <option value="AMD G.A">AMD G.A</option>
                                                <option value="AMD N.G">AMD N.G</option>
                                                <option value="Xenon">Xenon</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-8 control-label" for="ram"><b>QUANTIDADE DE MEMORIA RAM</b></label>
                                        <div class="col-md-5">
                                                <select required id="RAM" name="ram" class="form-control">
                                                <option value="">Q. RAM</option>
                                                <option value="2GB">2GB</option>
                                                <option value="4GB">4GB</option>
                                                <option value="6GB">6GB</option>
                                                <option value="8GB">8GB</option>
                                                <option value="12GB">12GB</option>
                                                <option value="16GB">16GB</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="mb-8">
                                                <label for="exampleFormControlInput1" class="form-label"><b>MODELO DA PLACA</b></label>
                                                <input type="text" class="form-control" name="placa" id="placa" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="mb-8">
                                                <label for="exampleFormControlInput1" class="form-label"><b>MAC</b></label>
                                                <input type="text" class="form-control" name="mac" id="mac" placeholder="">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="desks" id="desks" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="desktop" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                                <!-- And modal-->
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-card">
                
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-display"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                        <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                        </svg>    
                        <h5>Monitor</h5><span></span>
                            

                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Dimensão</h6><span>X</span>
                            </div>
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar02">Cadastrar</button>
                        <!-- modal monitor -->
                        <div class="modal fade text-black" id="cadastrar02" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="lojas1"><b>SELECIONE A LOJA</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas1" name="lojas1" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="setor2"><b>SELECIONE O SETOR</b></label>
                                        <div class="col-md-5">
                                                <select required id="setor2" name="setor2" class="form-control">
                                                <option value="">Selecione o Setor</option>
                                                <option value="Caixa">Caixa</option>
                                                <option value="CPD">CPD</option>
                                                <option value="Financeiro">Financeiro</option>
                                                <option value="Peços">Peços</option>
                                                <option value="Fente">Frente de Loja</option>
                                                <option value="Monitoramento">Monitoramento</option>
                                                <option value="Avária">Avária</option>
                                                <option value="T.I">T.I</option>
                                                <option value="Servidor de Aplicação">Servidor</option>
                                                <option value="Gerente">Gerente</option>
                                                <option value="Logistica">Logistica</option>
                                                <option value="RH">RH</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="dimensao"><b>DIMENSÃO</b></label>
                                        <div class="col-md-5">
                                                <select required id="dimensao" name="dimensao" class="form-control">
                                                <option value="">Tamanho</option>
                                                <option value="14P">14P</option>
                                                <option value="16P">16P</option>
                                                <option value="19P">19P</option>
                                                <option value="24P">24P</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="form-label "><b>MODELO DO MONITOR</b></label>
                                            <input type="text" class="form-control" name="monitor" id="monitor" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="form-label "><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="serie" id="serie" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="monitors" id="monitors" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>
                                        

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="monitor" name="type">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!--end monitor --> 
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-card">
                
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-printer"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>    
                        <h5>Impressora não fiscal</h5><span>
                         <!-- modal imp -->
                         <div class="modal fade text-black" id="cadastrar03" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojasimp"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojasimp" name="lojasimp" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="setor3"><b>SELECIONE O SETOR</b></label>
                                        <div class="col-md-5">
                                                <select required id="setor3" name="setor3" class="form-control">
                                                <option value="">Selecione o Setor</option>
                                                <option value="Caixa">Caixa</option>
                                                <option value="CPD">CPD</option>
                                                <option value="Financeiro">Financeiro</option>
                                                <option value="Peços">Peços</option>
                                                <option value="Fente">Frente de Loja</option>
                                                <option value="Monitoramento">Monitoramento</option>
                                                <option value="Avária">Avária</option>
                                                <option value="T.I">T.I</option>
                                                <option value="Gerente">Gerente</option>
                                                <option value="Logistica">Logistica</option>
                                                <option value="RH">RH</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="imp"><b>MODELO DA IMPRESSORA</b></label>
                                        <div class="col-md-5">
                                                <select required id="imp" name="imp" class="form-control">
                                                <option value="">Modelo</option>
                                                <option value="Daruma">Daruma</option>
                                                <option value="Elgin I8">Elgin I8</option>
                                                <option value="Elgin I8">Elgin I9</option>
                                                <option value="Epson">Epson</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label text-black"><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="imps" id="imps" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="impss" id="impss" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="impressora" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end imp -->


                        </span>
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar03">Cadastrar</button>
    
                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-card">
    
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-printer"></i>   
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>
                        <h5>Impressora bulk de tinta</h5><span>
                        <!-- modal imp_bul -->
                        <div class="modal fade text-black" id="cadastrar04" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojasimpb"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojasimpb" name="lojasimpb" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-12 control-label" for="setor4"><b>SELECIONE O SETOR</b></label>
                                        <div class="col-md-5">
                                                <select required id="setor4" name="setor4" class="form-control">
                                                <option value="">Selecione o Setor</option>
                                                <option value="Caixa">Caixa</option>
                                                <option value="CPD">CPD</option>
                                                <option value="Financeiro">Financeiro</option>
                                                <option value="Peços">Peços</option>
                                                <option value="Fente">Frente de Loja</option>
                                                <option value="Monitoramento">Monitoramento</option>
                                                <option value="Avária">Avária</option>
                                                <option value="T.I">T.I</option>
                                                <option value="Gerente">Gerente</option>
                                                <option value="Logistica">Logistica</option>
                                                <option value="RH">RH</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label"><b>MODELO DA IMPRESSORA</b></label>
                                            <input type="text" class="form-control" name="impb" id="impb" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label"><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="impsb" id="impsb" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="impssb" id="impssb" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="impressora_bulk" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end imp_bul -->

                        </span>

                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
        
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar04">Cadastrar</button>
            
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="p-card">
   
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-back"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                        </svg>    
                        <h5>Balança CX</h5><span>

                        <!-- modal B.C -->
                        <div class="modal fade text-black" id="cadastrar05" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojas_balancacx"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas_balancacx" name="lojas_balancacx" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label"><b>MODELO DA BALANÇA</b></label>
                                            <input type="text" class="form-control" name="balancacx" id="balancacx" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label"><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="balancacxs" id="balancacxs" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="balancacxss" id="balancacxss" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="balancacaixa" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end B.C -->


                        </span>
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
                        
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar05">Cadastrar</button>

                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-card">
 
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-basket"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                        </svg>    
                        <h5>Balança AT</h5><span></span>
                        
                        <!-- modal B.A.T -->
                        <div class="modal fade text-black" id="cadastrar06" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojas_balancaat"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas_balancaat" name="lojas_balancaat" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>MODELO DA BALANÇA</b></label>
                                            <input type="text" class="form-control" name="balancaat" id="balancaat" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="balancaats" id="balancaats" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="balancaatss" id="balancaatss" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="balanca_at" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end B.A.T -->
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
                    
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar06">Cadastrar</button>
                     
                    </div>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="p-card">
 
                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-coin"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        </svg>    
                        <h5>Impressora de gondolas</h5><span></span>
                        
                        <!-- modal GO -->
                        <div class="modal fade text-black" id="cadastrar07" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title " id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojas_go"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas_go" name="lojas_go" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>MODELO DA IMPRESSORA DE GONDOLAS</b></label>
                                            <input type="text" class="form-control" name="go" id="go" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="gos" id="gos" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="goss" id="goss" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="gondola" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end GO -->
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
        
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar07">Cadastrar</button>
               
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-card">

                    <div class="p-details">
                        <div class="d-flex justify-content-between align-items-center mx-2">
                        <i class="bi bi-cash-coin"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                        </svg>    
                        <h5>TEFs</h5><span></span>
                        
                         <!-- modal TEF -->
                         <div class="modal fade text-black" id="cadastrar08" tabindex="-1" role="dialog" aria-labelledby="TituloCadastrar" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title " id="TituloCadastrar">Dados para cadastro</h5>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="inv.php" method="POST">
                                        
                                        <div class="form-group">
                                        <label class="col-md-6 control-label text-black" for="lojas_tef"><b>Lojas</b></label>
                                        <div class="col-md-5">
                                                <select required id="lojas_tef" name="lojas_tef" class="form-control">
                                                <option value="">Selecione a loja</option>
                                                <option value="LOJA-01">LOJA-01</option>
                                                <option value="LOJA-02">LOJA-02</option>
                                                <option value="LOJA-03">LOJA-03</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>MODELO DO TEF</b></label>
                                            <input type="text" class="form-control" name="tef" id="tef" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-12">
                                            <label for="exampleFormControlInput1" class="form-label "><b>N° SERIE</b></label>
                                            <input type="text" class="form-control" name="tefs" id="tefs" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <div class="mb-12">
                                                <label for="exampleFormControlInput1" class="form-label"><b>SETOR / STATUS / OBS</b></label>
                                                <input type="text" class="form-control" name="tefss" id="tefss" placeholder="" style="height: 100px">
                                            </div>
                                            
                                            
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" name="submit" id="subimit" class="btn btn-primary">Salvar mudanças</button>
                                    </div>
                                    <input type="hidden" value="tef_ca" name="type">
                                    </form>
                                    </div>
                                </div>
                                </div>
                            <!--end TEF -->
                        </div>
                        <div class="mx-2">
                            <hr class="line">
                        </div>
                        <div class="d-flex justify-content-between mt-2 spec mx-2">
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">Modelo</h6><span>X</span>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <h6 class="mb-0">N°. Serie</h6><span>X</span>
                            </div>
        
                        </div>
                        <div class="buy mt-3"><button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#cadastrar08">Cadastrar</button>
            
                    </div>
                    </div>
                    
                </div>
            </div>
    
        
        
        </div>
    </div>
    
    <!-- End CAT -->
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