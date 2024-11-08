<?php
 include('conexao.php');

 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=Dados_Cadastro_Desktop_Loja02.xls");
 header("Pragma: no-cache");

 // Executar uma consulta SQL para obter dados (substitua com sua própria consulta)
 require_once '../services/equip/desktop/DesktopService.php';
 $result_desktops = "SELECT * FROM desktop WHERE loja='LOJA-02'";
 $resultado_desktops = mysqli_query($mysqli, $result_desktops);
?>

<meta charset='utf-8'>

<table class="table table-dark table-striped table-responsive " border="1px">
                                        <tbood>
                                            <tr>
                                           
                                            <th scope="col">LOJA</th>
                                            <th scope="col">SETOR</th>
                                            <th scope="col">PLACA</th>
                                            <th scope="col">CPU</th>
                                            <th scope="col">RAM</th>
                                            <th scope="col">MAC</th>
                                            <th scope="col">OBS</th>
                                            </tr>
                                      
                                            
                                
                                            <?php foreach ($resultado_desktops as $rows_desktops): ?>
                                            <tr>
                                           
                                            <td><?php echo $rows_desktops['loja']; ?></td>
                                            <td><?php echo $rows_desktops['setor']; ?></td>
                                            <td><?php echo $rows_desktops['placa']; ?></td>
                                            <td><?php echo $rows_desktops['cpu']; ?></td>
                                            <td><?php echo $rows_desktops['ram']; ?></td>
                                            <td><?php echo $rows_desktops['mac']; ?></td>
                                            <td><?php echo $rows_desktops['obs']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        
                                            </tbood>
                                      
                                       </table>