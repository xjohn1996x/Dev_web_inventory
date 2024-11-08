<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Balanca_Caixa_loja03.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/balancacx/Ba_Cx.php';

 $result_balanca = "SELECT * FROM balanca_caixa WHERE lojas='LOJA-03'";
 $resultado_balanca = mysqli_query($mysqli, $result_balanca);
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