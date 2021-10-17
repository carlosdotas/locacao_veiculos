<table cellspacing="0" style="border-collapse:collapse; width:100.0%; height:80px">
    <tbody>
        <tr>
            <th style="border:2px solid black; height: 1px; background-color: #eee;">
            <strong style="font-size:14px">CONDUTORES</strong>
            </th>
        </tr>
        <tr>
            <td style="border:2px solid black;">
            <table cellspacing="0" style="border-collapse:collapse; width:100.0%">
                <tbody>
                    <tr>
                        <td style=" width:20%">
                            <span style="font-size:10px">Nome :</span><br>
                        </td>
                        <td style=" width:20%">
                            <span style="font-size:10px">Documento CPF:</span><br>
                        </td>
                        <td style=" width:20%">
                            <span style="font-size:10px">Habilitação:</span><br>
                        </td>                        
                        <td style=" width:20%">
                            <span style="font-size:10px">Categoria:</span><br>
                        </td>
                        <td style=" width:20%">
                            <span style="font-size:10px">Validade:</span><br>
                        </td>
                    </tr>
                    <?php 

                        foreach ($condutores[rows] as $key => $value) {
                            echo '<tr>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[nome].'</b>
                            </td>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[cpf].'</b><br>
                            </td>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[habilitacao].'</b><br>
                            </td> 
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[catedoria].'</b>
                            </td>
                            <td style=" width:50%">
                                <b style="font-size:12px">'.$value[validade].'</b>
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