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
            <td style="border:0px solid black;">
                <?php include('servico_entrega.php'); ?>
            </td>
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
                <?php include('valores_fechamento
                .php'); ?>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>