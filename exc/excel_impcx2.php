<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Impressora_Caixas_Loja02.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/impcx/Imp_Cx.php';


 $result_impressora = "SELECT * FROM impressora WHERE lojas='LOJA-02'";
 $resultado_impressora = mysqli_query($mysqli, $result_impressora);
?>

<meta charset='utf-8'>

<table class="table table-dark table-striped table-responsive " border="1px">
                                        <tbood>
                                                   <tr>
                                                 
                                                    <th scope="col">LOJA</th>
                                                    <th scope="col">SETOR</th>
                                                    <th scope="col">MODELO</th>
                                                    <th scope="col">SERIE</th>
                                                    <th scope="col">OBS</th>
                                                    </tr>
                                      
                                            
                                
                                            <?php foreach ($resultado_impressora as $rows_impressora): ?>
                                            <tr>
                                                    
                                                    <td><?php echo $rows_impressora['lojas']; ?></td>
                                                    <td><?php echo $rows_impressora['setor']; ?></td>
                                                    <td><?php echo $rows_impressora['modelo_imp']; ?></td>
                                                    <td><?php echo $rows_impressora['nserie_imp']; ?></td>
                                                    <td><?php echo $rows_impressora['ss_imp']; ?></td> 
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>