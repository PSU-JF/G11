<link rel="stylesheet" href="estilos/modulo.css">
                <div class="table"> 
                    <table>
                        <thead>
                            <tr>
                                <th>codigo</th>
                                <th>hora de entrada</th>
                                <th>hora_salida</th>
                                <th>fcod_usu</th>
                                <th>fcod_pt</th>
                                <th>fcod_vi</th>
                            </tr>
                            </thead>
                        <tr>
                            <?php
                                foreach ($emp as $key)
                                {    
                                //repetir
                            ?>
                                <tr>
                                <td><?php echo $key['cod_ob']?></td>
                                <td><?php echo $key['fecha_ob']?></td>
                                <td><?php echo $key['hora']?></td>
                                <td><?php echo $key['fcod_pt']?></td>
                                <td><?php echo $key['asunto']?></td>
                                <td><?php echo $key['observacion']?></td>
                                </tr>
                
                            <?php }
                        
                            ?>
                            </tr>
                        
                    </table>
                </div>