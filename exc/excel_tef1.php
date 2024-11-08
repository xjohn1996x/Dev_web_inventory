<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_TFS_Loja01.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/tef/Tef.php';

 $result_tefs = "SELECT * FROM tefs WHERE lojas='LOJA-01'";
 $resultado_tefs = mysqli_query($mysqli, $result_tefs);
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
                                      
                                            
                                
                                            <?php foreach ($resultado_tefs as $rows_tefs): ?>
                                            <tr>
                                                    
                                                    <td><?php echo $rows_tefs['lojas']; ?></td>
                                                    <td><?php echo $rows_tefs['modelo_tef']; ?></td>
                                                    <td><?php echo $rows_tefs['nserie_tef']; ?></td>
                                                    <td><?php echo $rows_tefs['ss_tef']; ?></td>     
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>