
<table style="height:122px" class="table">
    <tbody>
        <tr>
            <th >
            LOCATÁRIO
            </th>
        </tr>
        <tr>
            <td class="tdBody">
            <table cellspacing="0" style=" width:100.0%; ">
                <tbody>
                    <tr>
                        <td style=" width:50%">
                            <label>Nome do Cliente:</label>
                            <div class="field"><?php echo $cliente[nome] ?></div>
                        </td>
                        <td >
                            <label>Contatos:</label>
                            <div class="field"><?php echo $cliente[telefone] ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td style=" width:50%">                         
                            <label>Documento CPF/CNPJ:</label>
                            <div class="field"><?php echo $cliente[cpf_cnpj] ?></div>
                        </td>
                        <td >
                            <label>Endereço:</label>
                            <div class="field"><?php echo $cliente[endereco] ?></div>
                        </td>
                    </tr>                    
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>