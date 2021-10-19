<table style="height:150px" class="table">
    <tbody>
        <tr>
            <th>CAUÇÃO</th>
        </tr>
        <tr>
            <td class="tdBody">
                <label>Valor:</label>
                <div class="field">
                    R$ <?php 
                    if($aluguel[caucao]){
                        echo $aluguel[caucao];
                    }else{
                        echo '00.00';
                    } ?>
                </div>
            </td>
        </tr>
    </tbody>
</table>