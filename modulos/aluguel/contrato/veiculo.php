<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:80px">
    <tbody>
        <tr>
            <th colspan="3" style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">VEÍCULO</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
                <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                    <tbody>
                        <tr>
                            <td style="vertical-align:top; width:50%">
                                <span style="font-size:10px">Placa:</span><br>
                                <b style="font-size:12px"><?php echo $veiculo[placa] ?></b>
                            </td>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Modelo:</span><br>
                                <b style="font-size:12px"><?php echo $veiculo[modelo] ?></b>
                            </td>

                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Cor:</span><br>
                                <b style="font-size:12px"><?php echo $veiculo[cor] ?></b>

                            </td>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Runavam:</span><br>
                                <b style="font-size:12px"><?php echo $veiculo[renavam] ?></b>

                            </td> 
                            </tr>
                    </tbody>
                </table>
            </td>
            <td style="border:2px solid black; ">
                <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                    <tbody>
                        <tr>
                            <td style="vertical-align:top; width:50%">
                                <span style="font-size:10px">Saída:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[data_saida] ?></b><br>
                            </td>
                            <td style="vertical-align:top; width:50%">
                                <span style="font-size:10px">Tanque:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[tanque_saida] ?></b><br>
                            </td>
                            <td style="vertical-align:top; width:50%">
                                <span style="font-size:10px">KM:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[km_saida] ?></b>
                            </td>                      
                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="border:2px solid black; ">
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                <tbody>
                    <tr>
                        <td style="vertical-align:top; width:50%">
                            <span style="font-size:10px">Retorno:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[data_retorno] ?></b>
                        </td>
                        <td style="vertical-align:top; width:50%">
                            <span style="font-size:10px">Tanque Retorno:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[tanque_retorno] ?></b>
                        </td>                        
                        <td style="vertical-align:top; width:50%">
                            <span style="font-size:10px">KM Retorno:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[km_retorno] ?></b>
                        </td>                      
                    </tr>
                </tbody>
            </table>
            </td>                        
        </tr>
    </tbody>
</table>