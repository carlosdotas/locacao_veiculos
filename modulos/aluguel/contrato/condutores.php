<table class="table" style="height:140px">
    <tbody>
        <tr>
            <th colspan="5">CONDUTORES</th>
        </tr>

        <tr>
            <td style=" width:35%; height:1px;">
                <label>Nome</label>
            </td>
            <td style=" width:1px">
                <label>CPF</label>
            </td>
            <td style=" width:1px">
                <label>Habilitação</label>
            </td>                        
            <td style=" width:1px">
                <label>Categoria</label>
            </td>
            <td style=" width:1px">
                <label>Validade</label>
            </td>
        </tr>
        <?php 

            foreach ($condutores[rows] as $key => $value) {
                echo '<tr >
                <td >
                    <div class="field">'.$value[nome].'</div>
                </td>
                <td >
                    <div class="field">'.$value[cpf].'</div>
                </td>
                <td >
                    <div class="field">'.$value[habilitacao].'</div>
                </td> 
                <td >
                    <div class="field">'.$value[catedoria].'</div>
                </td>
                <td >
                    <div class="field">'.$value[validade].'</div>
                </td>
            </tr>';
            }
            
        ?>
    </tbody>
</table>