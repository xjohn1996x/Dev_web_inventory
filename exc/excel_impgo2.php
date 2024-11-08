<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Impressora_Gondolas_Loja02.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/imppr/Imp_Pr.php';

$result_imp_go = "SELECT * FROM impressora_gondolas WHERE lojas='LOJA-02'";
$resultado_imp_go = mysqli_query($mysqli, $result_imp_go);
    
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
                                      
                                            
                                
                                            <?php foreach ($resultado_imp_go as $rows_imp_go): ?>
                                            <tr>
                                            
                                                    <td><?php echo $rows_imp_go['lojas']; ?></td>
                                                    <td><?php echo $rows_imp_go['modelo_impgo']; ?></td>
                                                    <td><?php echo $rows_imp_go['nserie_impgo']; ?></td>
                                                    <td><?php echo $rows_imp_go['ss_impbgo']; ?></td>    
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>