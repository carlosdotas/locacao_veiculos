<table class="table">
    <tbody>
        <tr>
            <th>DESCRIÇÃO DE FECHAMENTO</th>
        </tr>
        <tr>
            <td class="tdBody">
                <table >
                    <tbody>
                        <tr>
                            <td style="width:50%">

                                <span style="font-size:10px">Perda / Danos:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[perca_dano] ?></b><br>

                            </td>
                            <td  style="width:50%">

                                <span style="font-size:10px">Valor da Perda ou Danos:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[valor_perca_dano] ?></b><br>

                            </td>
                        </tr>                                      
                        <tr>
                            <td colspan="2" style="border-top: 1px solid;">
                                <span style="font-size:10px">Observações:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[observacoes] ?></b><br>

                            </td>
        
                        </tr>  
                        <tr>
                            <td  style="width:50%; border-top: 1px solid;">

                                <span style="font-size:10px">Data/Hora de Fechamento:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[data_fechamento] ?></b><br>

                            </td>
                            <td  style="width:50%; border-top: 1px solid;">

                                <span style="font-size:10px">Fechado por:</span><br>
                                <b style="font-size:12px"><?php echo $aluguel[user_fechamento] ?></b><br>

                            </td>
                        </tr>                          
                    </tbody>
                </table>
            </td>
                                  
        </tr>
    </tbody>
</table>