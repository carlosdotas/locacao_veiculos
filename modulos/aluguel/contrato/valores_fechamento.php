<table  style="height:100px"  class="table">
    <tbody>
        <tr>
            <th >VALORES FECHAMENTO</th>
        </tr>
        <tr>
            <td class="tdBody" style="height:362px;">
            
            <table cellspacing="0" >
                <tbody>
                    <tr>                        
                        <td colspan="2">
                            <span style="font-size:10px">Total da Locação:</span><br>
                            <b style="font-size:18px"><?php echo $aluguel[subtotal_diarias]; ?></b>                               
                        </td>
                    </tr>
    
                    <tr>
                        <td colspan="2" style="border-top: 1px solid;">
                            <span style="font-size:10px">Total de Serviços:</span><br>
                            <b style="font-size:18px"><?php echo $aluguel[valor_servicos]; ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="border-top: 1px solid;">
                            <span style="font-size:10px">Percas / danos:</span><br>
                            <b style="font-size:18px"><?php echo $aluguel[valor_perca_dano]; ?></b>
                        </td>
                    </tr>                    
                    <tr>
                        <td colspan="2" style="border-top: 1px solid;">
                            <span style="font-size:10px">Desconto:</span><br>
                            <b style="font-size:18px"><?php echo $aluguel[desconto]; ?></b>
                        </td>
                    </tr>
                    <tr>                        
                        <td colspan="2" style="border-top: 1px solid; height: 150px;">
                            <span style="font-size:10px">Soma Total:</span><br>
                            <b style="font-size:20px"><?php echo $aluguel[subtotal]; ?></b>
                        </td>
                    </tr>                    
                    <tr>                        
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">Total Pago:</span><br>
                            <b style="font-size:18px"><?php echo $aluguel[total_recebido]; ?></b>
                        </td>
                     
                        <td style="border-top: 1px solid;">
                            <span style="font-size:10px">A pagar:</span><br>
                            <b style="font-size:20px"><?php echo $aluguel[receber]; ?></b>
                        </td>                        
                    </tr>                    
                </tbody>
            </table>            
            </td>
        </tr>
    </tbody>
</table>