<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:100px">
    <tbody>
        <tr>
            <th style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">VALORES FECHAMENTO</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;height:282px;vertical-align:top;">
            
            <table cellspacing="0" style="vertical-align:top;border-collapse:collapse; width:100.0%;">
                <tbody>
                    <tr>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Bem:</span>
                        </td>
                        <td style="vertical-align:top;">
                            <span style="font-size:10px">Valor Unit:</span>                              
                        </td>
                    </tr>
     
                </tbody>
            </table>
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%; height: 200px; vertical-align:top; ">
                <tbody>
                    <tr>
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">Total de Serviços:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[valor_servicos]; ?></b>
                        </td>
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">Total da Locação:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[subtotal_diarias]; ?></b>                               
                        </td>
                    </tr>
                    <tr>
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">Desconto:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[desconto]; ?></b>
                        </td>
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">Total Pago:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[total_recebido]; ?></b>
                        </td>
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">A pagar:</span><br>
                            <b style="font-size:12px"><?php echo $aluguel[receber]; ?></b>
                        </td>                        
                    </tr>                    
                </tbody>
            </table>            
            </td>
        </tr>
    </tbody>
</table>