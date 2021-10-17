<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:150px">
    <tbody>
        <tr>
            <th colspan="3" style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">SERVIÇO DE ENTREGA E RETIRADA</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
                <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                    <tbody>
                        <tr>
                            <td colspan="3" style="vertical-align:top; width:50%">
                                <span style="font-size:10px">Local de Entrega:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[local_entrega] ?></b><br>
                            </td>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Taxa:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[taxa_entrega] ?></b><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Local Retirada:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[local_retirada] ?></b><br>

                            </td>

                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Taxa:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[taxa_retirada] ?></b><br>

                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Subtotal:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[sub_total] ?></b><br>

                            </td>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Desconto:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[desconto_entrega] ?></b><br>

                            </td>
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Total:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[total_entrega] ?></b><br>

                            </td>                            
                          <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Taxa serv.:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[taxa_servico] ?></b><br>

                            </td>  
                            <td style="vertical-align:top; width:50%">

                                <span style="font-size:10px">Valor Total:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_total_entrega] ?></b><br>

                            </td>                              
                        </tr>



                                          
                    </tbody>
                </table>
            </td>
                                  
        </tr>
    </tbody>
</table>