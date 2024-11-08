<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Impressora_Bulk_Loja03.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/impbk/Imp_Bk.php';

$result_impressora_bulk = "SELECT * FROM impressora_bulk WHERE lojas='LOJA-03'";
$resultado_impressora_bulk = mysqli_query($mysqli, $result_impressora_bulk);
    
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
                                      
                                            
                                
                                            <?php foreach ($resultado_impressora_bulk as $rows_impressora_bulk): ?>
                                            <tr>
                                                   
                                                    <td><?php echo $rows_impressora_bulk['lojas']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['setor']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['modelo_impb']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['nserie_impb']; ?></td>
                                                    <td><?php echo $rows_impressora_bulk['ss_impb']; ?></td> 
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>