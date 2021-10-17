<?php 
    include_once('../../../funcoes.php');
    $aluguel_id = json_decode($_POST[post],1);

    $empresa = buscar_mysql('empresa','1','empresa_id');
    $aluguel = buscar_mysql('aluguel',$aluguel_id['aluguel_id'],'aluguel_id');
    $cliente = buscar_mysql('clientes',$aluguel['cliente'],'clientes_id');
    $veiculo = buscar_mysql('veiculos',$aluguel['veiculo'],'veiculos_id');

    $condutores = consultar_mysql('contrato_condutores',array('condutor_contrato'=>$aluguel['contrato_id']));
    $servicos  = consultar_mysql('servicos_contratos',array('servicos_contratos'=>$aluguel['contrato_id']));
    $pagamentos  = consultar_mysql('pagamentos_contratos',array('pagamentos_contratos'=>$aluguel['contrato_id']));
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php include('cabecalho.php'); ?>

<div style="text-align: center;">
    <b>CONTRATO DE LOCA&Ccedil;&Atilde;O DE VE&Iacute;CULOS</b>
<div>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 70%">
                <?php include('locatario.php'); ?>
            </td>
            <td style="border:0px solid black;">
                <?php include('periodo_locacao.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 100%">
                <?php include('veiculo.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 60%">
                <?php include('condutores.php'); ?>
            </td>
            <td style="border:0px solid black;">
                <?php include('prorrogacao.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 100%">
                <?php include('condicoes_valores.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 60%">
                <?php include('itens_add.php'); ?>
            </td>
            <!--
            <td style="border:0px solid black;">
                <?php include('servico_entrega.php'); ?>
            </td>
            -->
        </tr>
    </tbody>
</table>

<table cellspacing="0" style=" width:100%">
    <tbody>
        <tr>
            <td style="border:0px solid black; width: 60%">
                <?php include('franquia_protecao.php'); ?>
            </td>
            <td style="border:0px solid black;">
                <?php include('causao.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style="width:100%">
    <tbody>
        <tr>
            <th colspan="2">RETORNO E FECHAMENTO</th>
        </tr>
        <tr>
            <td style="border:0px solid black; width: 50%">
                <?php include('dados_devolucao.php'); ?>
                <?php include('descricao_fechamento.php'); ?>
                <?php include('pagamento.php'); ?>
            </td>
            <td style="border:0px solid black;">
                <?php include('valores_fechamento.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<table cellspacing="0" style="width:100%;position: absolute; bottom: 0;margin-bottom: 50px;">
    <tbody>
        <tr>
            <td style="vertical-align:bottom;border:0px solid black; width: 33%; height:150px">
                ________________________________________________________<br>
                LOCATÁRIO

            </td>
            <td style="vertical-align:bottom;border:0px solid black; width: 33%">
                ______________________________________________<br>
                LOCAL E DATA
            </td>
            <td style="vertical-align:bottom;border:0px solid black; width: 33%">
                ________________________________________________________<br>
                REPRESENTANTE DA LOCADORA
            </td>
        </tr>
    </tbody>
</table>

<style type="text/css">
    @page  
    { 
        margin: 3px;  
    } 

    html, body{
        padding: 3px;  
        margin: 3px;  
    }
    *{
        font-family: arial;
        font-size: 10px;
    }
    table{
        width: 100%;
    }
</style>

</body>
</html>