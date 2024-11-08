<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Balanca_Atendimento.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/balancaat/Ba_at.php';

 $balancaAtService = new BalancaAtService($mysqli);
 $resultado_balanca_at = $balancaAtService->obterTodos();
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
                                      
                                            
                                
                                            <?php foreach ($resultado_balanca_at as $rows_balanca_at): ?>
                                            <tr>
                                                   
                                                    <td><?php echo $rows_balanca_at['lojas']; ?></td>
                                                    <td><?php echo $rows_balanca_at['modelo_bt']; ?></td>
                                                    <td><?php echo $rows_balanca_at['nserie_bt']; ?></td>
                                                    <td><?php echo $rows_balanca_at['ss_bt']; ?></td> 
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>