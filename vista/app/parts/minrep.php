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
                                foreach ($imp as $key)
                                {    
                                //repetir
                            ?>
                                <tr>
                                <td><?php echo $key['cod_min']?></td>
                                <td><?php echo $key['hora_entrada']?></td>
                                <td><?php echo $key['hora_salida']?></td>
                                <td><?php echo $key['fecha_min']?></td>
                                <td><?php echo $key['nom_usu']?></td>
                                <td><?php echo $key['nom_vi']?></td>
                                </tr>
                
                            <?php }
                        
                            ?>
                            </tr>
                        
                    </table>
                </div>