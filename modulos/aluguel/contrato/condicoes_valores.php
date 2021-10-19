<table class="table">
    <tbody>
        <tr>
            <th >CONDIÇÔES E VALORES DA LOCAÇÃO </th>
        </tr>
        <tr>
            <td class="tdBody">
                <table >
                    <tbody>
                        <tr>

                            <td style="width:20%" >

                                <label>Valor diária:</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[valor_diaria] ?></b><br>

                            </td>

                            <td style="width:20%">

                                <label>Valor Hora:</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[valor_hora] ?></b><br>

                            </td>

                            <td style="width:20%">

                                <label>Rodagem:</label>
                                <b style="font-size:12px"><?php echo $aluguel[rodagem] ?> KMs</b><br>

                            </td>
                            <td style="width:20%">

                                <label>KMs por dia:</label>
                                <b style="font-size:12px"><?php echo $aluguel[kms_dia] ?> KMs</b><br>

                            </td>                          
                            <td style="width:20%">

                                <label>Valor KM:</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[valor_km] ?></b><br>

                            </td>  
                        </tr>

                        <tr>
      
                           <td >

                                <label>Valor Serviços:</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[valor_servicos] ?></b><br>

                            </td> 
   
                           <td >

                                <label>Valor Total Diarias:</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[subtotal_diarias] ?></b><br>

                            </td> 
                           <td colspan="2">

                                <label>Total (Serviços + Diarias) :</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[subtotal] ?></b><br>

                            </td> 
                           <td >

                                <label>Caução :</label>
                                <b style="font-size:12px">R$ <?php echo $aluguel[caucao] ?></b><br>

                            </td>                             
                        </tr>                        
                    </tbody>
                </table>
            </td>
                                  
        </tr>
    </tbody>
</table>