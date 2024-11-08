<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Monitores_Loja03.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/monitor/Monitor.php';

 $result_monitores = "SELECT * FROM monitores WHERE loja='LOJA-03'";
 $resultado_monitores = mysqli_query($mysqli, $result_monitores);
?>

<meta charset='utf-8'>

<table class="table table-dark table-striped table-responsive " border="1px">
                                        <tbood>
                                        <tr>
                                      
                                        <th scope="col">LOJA</th>
                                        <th scope="col">SETOR</th>
                                        <th scope="col">MODELO</th>
                                        <th scope="col">SERIE</th>
                                        <th scope="col">DIMENSÃO</th>
                                        <th scope="col">OBS</th>
                                         </tr>
                                      
                                            
                                
                                            <?php foreach ($resultado_monitores as $rows_monitores): ?>
                                            <tr>
                                         
                                            <td><?php echo $rows_monitores['loja']; ?></td>
                                            <td><?php echo $rows_monitores['setor']; ?></td>
                                            <td><?php echo $rows_monitores['modelo']; ?></td>
                                            <td><?php echo $rows_monitores['serie']; ?></td>
                                            <td><?php echo $rows_monitores['dimensao']; ?></td>
                                            <td><?php echo $rows_monitores['obs']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>