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
    <link rel="stylesheet" media="screen" href="">
    <style type="text/css">
        @media print {
           body {
              -webkit-print-color-adjust: exact;
           }
        }    
        .table{
            border: 1px solid black; 
            border-spacing: 0;
            border-collapse: collapse;  
            vertical-align: top;              
        }
        .table th{
            border: 1px solid black; 
            height: 1px; 
            background-color: #ddd;
            border-width: 1px;
            font-size: 14px;
            font-weight: bold;
            padding: 2px;
        }     
        .table td{
            /*border: 1px solid black;*/
            text-align: left;
            padding: 3px;
            vertical-align: top;
        }
        .table label{
            font-weight: lighter;
            font-size:10px;
        }  
        .table .field{
            font-size:12px;
            font-weight: bold;
            text-transform: uppercase;
        }          

        .titles{
            text-align: center; 
            font-size: 16px;
            font-weight: bold;
            padding-top: 5px;
        }
    </style>
</head>
<body>

<?php include('cabecalho.php'); ?>

<div class="titles">
    CONTRATO DE LOCAÇÃO DE VEÍCULOS
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
            <td style="border:0px solid black; ">
                <?php include('servicos_add.php'); ?>
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
            <td >
                <?php include('franquia_protecao.php'); ?>
            </td>
        </tr>
    </tbody>
</table>

<div class="titles">RETORNO E FECHAMENTO</div>

<table cellspacing="0" style="width:100%">
    <tbody>
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
        -webkit-print-color-adjust: exact; 
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