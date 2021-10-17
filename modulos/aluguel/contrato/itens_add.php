<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:150px">
    <tbody>
        <tr>
            <th style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">SERVIÇOS ADICIONAIS</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                <tbody>
                    <tr>
                        <td style=" width:50%">
                            <span style="font-size:10px">Item:</span>
                        </td>
                        <td style=" width:50%">
                            <span style="font-size:10px">Valor:</span>
                        </td>
                    </tr>
                    <?php 

                        foreach ($servicos[rows] as $key => $value) {
                        echo '<tr>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[nome].'</b>
                            </td>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[valor].'</b><br>
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