<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:80px">
    <tbody>
        <tr>
            <th colspan="3" style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">CONDIÇÔES E VALORES DA LOCAÇÃO</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
                <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                    <tbody>
                        <tr>

                            <td style="vertical-align:top; width:16.66%" colspan="2">

                                <span style="font-size:10px">Valor diária:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_diaria] ?></b><br>

                            </td>

                            <td style="vertical-align:top; width:16.66%">

                                <span style="font-size:10px">Valor Hora:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_hora] ?></b><br>

                            </td>

                            <td style="vertical-align:top; width:16.66%">

                                <span style="font-size:10px">Rodagem:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[rodagem] ?></b><br>

                            </td>
                            <td style="vertical-align:top; width:16.66%">

                                <span style="font-size:10px">KMs por dia:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[kms_dia] ?></b><br>

                            </td>
                            <td style="vertical-align:top; width:16.66%">

                                <span style="font-size:10px">KMs inc total:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[km_total] ?></b><br>

                            </td>                            
                          <td style="vertical-align:top; width:16.66%">

                                <span style="font-size:10px">Valor KM:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_km] ?></b><br>

                            </td>  
                        </tr>

                        <tr>
                            <td style="vertical-align:top">
                                <span style="font-size:10px">Serviço de Motorista:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[servico_motorista] ?></b><br>
                            </td>
                            <td style="vertical-align:top">

                                <span style="font-size:10px">Valor do Serviço:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_servico] ?></b><br>
                            </td>

                            <td style="vertical-align:top">

                                <span style="font-size:10px">Horas Inclusas:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[horas_inclusas] ?></b><br>

                            </td>
                            <td style="vertical-align:top">

                                <span style="font-size:10px">Valor Hora Extra:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_hora_extra] ?></b><br>

                            </td>        
                           <td style="vertical-align:top">

                                <span style="font-size:10px">Proteção:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[protecao] ?></b><br>

                            </td> 
                           <td style="vertical-align:top">

                                <span style="font-size:10px">Valor por dia:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor+protecao_dia] ?></b><br>

                            </td> 
                           <td style="vertical-align:top">

                                <span style="font-size:10px">Valor Total:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_total_diaria] ?></b><br>

                            </td> 

                        </tr>                        
                    </tbody>
                </table>
            </td>
                                  
        </tr>
    </tbody>
</table>