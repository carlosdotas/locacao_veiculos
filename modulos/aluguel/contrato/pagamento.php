<table class="table">
    <tbody>
        <tr>
            <th>PAGAMENTOS</th>
        </tr>
        <tr>
            <td  class="tdBody" style="height:130px" >
                <table >
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