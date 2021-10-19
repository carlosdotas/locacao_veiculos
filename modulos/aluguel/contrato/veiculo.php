<table class="table">
    <tbody>
        <tr>
            <th colspan="3" >
            VEÍCULO
            </th>
        </tr>
        <tr>
            <td class="tdBody" width="60%">
                <table >
                    <tbody>

                        <tr>
                            <td style="width:25%">
                                <label>Placa:</label>
                                <div class="field"><?php echo $veiculo[placa] ?></div>
                            </td>
                               
                            <td style="width:25%">

                                <label>Marca:</label>
                                <div class="field"><?php echo $veiculo[marca] ?></div>
                            </td>                            
                            <td style="width:25%">

                                <label>Modelo:</label>
                                <div class="field"><?php echo $veiculo[modelo] ?></div>
                            </td>
                            <td style="width:25%">
                                <label>Ano:</label>
                                <div class="field"><?php echo $veiculo[ano] ?></div>
                            </td>                         
                        </tr>
                        <tr>
                            <td >

                                <label>Cor:</label>
                                <div class="field"><?php echo $veiculo[cor] ?></div>

                            </td>
                            <td >

                                <label>Renavam:</label>
                                <div class="field"><?php echo $veiculo[renavam] ?></div>

                            </td> 
                            <td colspan="2">

                                <label>Chassi:</label>
                                <div class="field"><?php echo $veiculo[chassi] ?></div>

                            </td>                             
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="tdBody" style="border-left:1px solid black; width: 20%;padding:0">
                <table >
                    <tbody>
                        <tr>
                            <td colspan="3" style="border-bottom:1px solid black; background-color: #eee;" >SAÍDA</td>
                        </tr>                          
                        <tr>
                            <td style="width:50%">
                                <label>Data:</label>
                                <div class="field"><?php echo $aluguel[data_saida] ?></div>
                            </td>
                            <td style="width:50%">
                                <label>Tanque:</label>
                                <div class="field"><?php echo $aluguel[tanque_saida] ?>%</div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>KM:</label>
                                <div class="field"><?php echo $aluguel[km_saida] ?></div>
                            </td>                      
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class="tdBody" style="border-left:1px solid black; width: 20%;padding:0;">
                <table>
                    <tbody>
               
                        <tr>
                            <td colspan="3" style="border-bottom:1px solid black;background-color: #eee;" >RETORNO</td>
                        </tr> 
                        <tr>                                                    
                            <td style="width:50%">
                                <label>Data:</label>
                                <div class="field"><?php echo $aluguel[data_retorno] ?></div>
                            </td>
                            <td style="width:50%">
                                <label>Tanque:</label>
                                <div class="field"><?php echo $aluguel[tanque_retorno] ?>%</div>
                            </td>                        
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>KM:</label>
                                <div class="field"><?php echo $aluguel[km_retorno] ?></div>
                            </td>                      
                        </tr>
                    </tbody>
                </table>
            </td>                        
        </tr>
    </tbody>
</table>