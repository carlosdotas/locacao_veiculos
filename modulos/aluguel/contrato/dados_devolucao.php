<table style="height:100px" class="table">
    <tbody>
        <tr>
            <th>DADOS DE DEVULUÇÃO</th>
        </tr>
        <tr>
            <td class="tdBody">
                <table >
                    <tbody>
                        <tr>
                            <td style="width:50%">

                                <label>Data Devolução:</label>
                                <div class="field"><?php echo $aluguel[data_retorno] ?></div>

                            </td>

                            <td style="width:50%">

                                <label>Hora Devolução:</label>
                                <div class="field"><?php echo $aluguel[hora_retorno] ?></div>

                            </td>

                        </tr>                                      
                        <tr>
                            <td colspan="2" style="border-top: 1px solid;">

                                <label>KM Rodados:</label>
                                <div class="field"><?php echo $aluguel[rodagem] ?> Kms</div>

                            </td>
  
   
                        </tr>  
                    </tbody>
                </table>
            </td>
                                  
        </tr>
    </tbody>
</table>