<table style="height:140px" class="table">
    <tbody>
        <tr>
            <th > SERVIÇOS ADICIONAIS </th>
        </tr>
        <tr>
            <td class="tdBody">
            <table >
                <tbody>
                    <tr>
                        <td style=" width:25%">
                            <label>Serviço:</label>
                        </td>
                        <td style=" width:25%">
                            <label>Data:</label>
                        </td>
                        <td style=" width:25%">
                            <label>Valor:</label>
                        </td>                                                
                    </tr>
                    <?php 

                        foreach ($servicos[rows] as $key => $value) {
                        echo '<tr>
                            <td style=" width:25%">
                                <b style="font-size:12px">'.$value[nome].'</b>
                            </td>
                            <td style=" width:25%">
                                <b style="font-size:12px">'.$value[data_servico].'</b>
                            </td>        
                            <td style=" width:25%">
                                <b style="font-size:12px">'.$value[valor].'</b>
                            </td>
                        </tr>';
                        }
                    ?>                    
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>