<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Balanca_Caixa.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/balancacx/Ba_Cx.php';

 $baCxService = new BaCxService($mysqli);
 $resultado_balanca = $baCxService->obterTodos();
?>

<meta charset='utf-8'>

<table class="table table-dark table-striped table-responsive " border="1px">
                                        <tbood>
                                                    <tr>
                                                   
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    </tr>
                                      
                                            
                                
                                            <?php foreach ($resultado_balanca as $rows_balanca): ?>
                                            <tr>
                                                   
                                                    <td><?php echo $rows_balanca['lojas']; ?></td>
                                                    <td><?php echo $rows_balanca['modelo_b']; ?></td>
                                                    <td><?php echo $rows_balanca['nserie_b']; ?></td>
                                                    <td><?php echo $rows_balanca['ss_b']; ?></td>  
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>