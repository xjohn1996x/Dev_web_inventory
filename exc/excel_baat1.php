<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Balanca_Atendimento_Loja01.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/balancaat/Ba_at.php';

$result_balanca_at = "SELECT * FROM balanca_atendimento WHERE lojas='LOJA-01'";
$resultado_balanca_at = mysqli_query($mysqli, $result_balanca_at);
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