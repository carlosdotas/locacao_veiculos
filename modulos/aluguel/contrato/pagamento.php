<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:100px">
    <tbody>
        <tr>
            <th colspan="3" style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">PAGAMENTOS</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
                <table cellspacing="0" style=" border-collapse:collapse; width:100.0%">
                    <tbody>
                    <tr>
                        <td style=" width:50%">
                            <span style="font-size:10px">DATA:</span>
                        </td>                        
                        <td style=" width:50%">
                            <span style="font-size:10px">FORMA:</span>
                        </td>
                        <td style=" width:50%">
                            <span style="font-size:10px">VALOR:</span>
                        </td>
                    </tr>                                     
                    <?php 

                        foreach ($pagamentos[rows] as $key => $value) {
                        echo '<tr>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[data_pagamento].'</b>
                            </td>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[forma].'</b>
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