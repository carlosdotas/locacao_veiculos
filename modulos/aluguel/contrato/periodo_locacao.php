<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:120px">
    <tbody>
        <tr>
            <th style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">PERÍODO DE LOCAÇÃO</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Data/Hora Inicial:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[data_saida] ?></b><br>
                        </td>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Data/Hora Final:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[data_retorno] ?></b>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Diárias:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[diarias] ?></b><br>
                        </td>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Horas:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[horas] ?></b>
                        </td>
                       <td style="vertical-align:top;">
                            <span style="font-size:10px">Status:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[status] ?></b>
                        </td>                        
                    </tr>
                </tbody>
            </table>            
            </td>
        </tr>
    </tbody>
</table>