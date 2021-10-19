<table class="table" style="height:122px">
    <tbody>
        <tr>
            <th >
                PERÍODO DE LOCAÇÃO
            </th>
        </tr>
        <tr>
            <td >
            <table >
                <tbody>
                    <tr>
                        <td >
                            <label>Data Inicial:</label>
                            <div class="field"><?php echo $aluguel[data_saida] ?></div>
                            <?php if($aluguel[hora_saida] ) {?>
                            <label>Hora Inicial:</label>
                            <div class="field"><?php echo $aluguel[hora_saida] ?></div>
                             <?php } ?>
                        </td>
                        <td width="50%" >
                            <label>Data Final:</label>
                             <div class="field"><?php echo $aluguel[data_retorno] ?></div>
                            <?php if($aluguel[hora_saida] ) {?>
                            <label>Hora Final:</label>
                            <div class="field"><?php echo $aluguel[hora_retorno] ?></div>
                             <?php } ?>                             
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <label>Diárias:</label>
                             <div class="field"><?php echo $aluguel[total_diarias] ?></div>
                        </td>
                       <td width="50%" >
                            <label>Status:</label>
                             <div class="field"><?php echo $aluguel[status] ?></div>
                        </td>                        
                    </tr>
                </tbody>
            </table>            
            </td>
        </tr>
    </tbody>
</table>