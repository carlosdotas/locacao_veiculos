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
<style type="text/css">
    @media print {
       body {
          -webkit-print-color-adjust: exact;
       }
    }  
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
    
	.vistorias{
		width:170px; 
		float: left;
		font-size: 10px;
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

<table cellspacing="0" style="border-collapse:collapse; width:100.0%">
    <tbody>
        <tr>
            <td style="border-bottom:2px solid black; border-left:2px solid black; border-right:2px solid black; border-top:2px solid black; vertical-align:top; width:106px">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAN1wAADdcBQiibeAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAA45SURBVGiB7ZpdiGXZVcd/a+/zcevWrVsfXd09k3ESI0kcE6JBQhAkIAi++CK+KBpiUHwKIj6roJJH3/QtDwqKPiQgipqIRtDQMSaZERIlZjKJk0nP9HTX1626X+ecvfdaPuxzT9+u6ZkEjIRANmzOPueee2v99/qvz11iZnwvD/fdFuD/Or4P4Ls9is3ihS995ad86X/f+6J24sQ5EXEiTpxs3hEwcWKYGGCGoaZGNiRLSU01z5SiqZqppnw1NVOzqNFSSinELqWU30uqlpKiKZmpqpmhZmb9dzYjf2TWhu6/f+GXf+kjQBQz48vPfumP3/zMD324bVtEBBHBOYdzblhvnm/fO/dQgWYZh6oO183cfJZSQlVZr9fEGId7VR3W27+3PbbvvffMzs/nP/n+9x+ImXFy7/5VRPcAnHN47wcA28K+3hp4rODbAm4AxBhZLpeklIb5OADfaozHY774hec+5AB8UdSv9+XXc7Ob55vdvb5+vRFC+Lb/xhuNlBLAOwoAcSLe++HHYoyvK9gG6PWd3Z4besQYCSEM9yEE1uv18Gz78+33zAyRbHrX6buZVVWR1u2kAJifXV59+q8+dcN7T+E9ZVHivMMXBd55Cl/gpKeUuAFUSpGkiZSUlGKmgiopJmIMhNgRQqSLHV0MLNdzmm5FiIEQs8BdiHShJQwgAl3oHtIqKWqKDlRTVBNPvukpfuy97/2PDGA27z73T5+h9I6bB08yX84ofcGNo9ss5jO8K9jdGVOVNU2zRkSYTg+4mJ2hGOPRLlfLOZoi4koK77laXRHSmrqacHpxjza1xBS5WJ7RxhZwlK7kYnlO1MRetc/J4gFRI6NizKJdkDTiXcHIj1iGBQB71T7z7pKqqlguFsEBmCYzUxQ4n59kYzTl4uIE7dfrpmGxmpNUUTVms/PsV9VYLOc4gdKXTPen/NxvfoDDg0MKqVmsL8E52thwub5ATREcSSOLdo5IpsisuRjoseyy8ABJ4yA8wLy7fMQWHIAmxUwxNUx7lWVfjJoOgJIaiqEoBqAg9F5JPM6V/OA7386tH7jN29/zTqqipJQC7xxdanFyzR2Lw4lcm264vtEwA1U1ly06WrLMrbKoSWYkM8qyxtRIpohzFEUxgKzqqgdjlEWF4BApmB4fMnsw4/ipJ3Guoq53ibHFIYyqnR6sUIinrkY9GMdONc5rhFExwrvsVJw4Sl8Ogle+fgRI0WvAVHXYWVPFJGEYyRKiQjLDa9YEJqj2vh/D6D2GCJPphAcvvMLBzUO8OEwK2tT1MSMLiGTBMDcI7cT3dMqbtfFCALKV8Uj/t8wM22ggpmTJEsmMZbMgWbb45TpzPmkidC1Nt0Y1kUxZrRYDvdpuld2rGTvTMfdffIXp8T4ijkU7w0wRhKZbA4YgJFPa1CAIItCEFSIgInSxBQwngprSpXYA0KZmAKCqWQMpJVM1EglJG5xpMBMRAYtYAnOGiPU7DmZ9NBZDDarRiNO7J4wPJogT2tCAODDYDlciDNrIIOThVSTLIJLJ/gYj20BMmjShltjfPUQ1oabs7R0RNRGT4l3JqB7lYKOR/ekBMSlqkfHuHgYoivOQ1gnnhGpScTA5wmEgcDQ5xrucP5ZFyXR8MIC4sXvcg4D9nQNKXyII3hVM6ukg8LTeHzQQU9ICIMZoKSWcCKeXD/C+QIDT2X0K54kYq1ZpunU2wug4OXsVRPA4Li9P8a7CiyOGyGJ1RbNs2Dka8+JLz2M9hy/mp6hmzYYYaLpm4PX56qzXjDBvrkgWQYSUIov2agBw1WY3ar0+MwCN2VhTVl2fOFMQwcBb1r8TxZvHnGIqiBNMDFGHSMK8Z71qUFPa9Zq9G3tbtMm/q70NDFTp58atquiWi1WcczmNsYdCv9aIQ9CUch4yHR+QNJI0sDesE74oGFVjoiZCSuzvHWJ97jPdzWqtdkoWlwuKoma5XnBw84ij6TGu5/fh9JjCVYgIZZHp5cXjxXNzehsvHicFR7tH1EWNdwW1H7E/OhwA79cHGwQPjTiGaNESmHBy+SreF5jQ08mjgK2XNG7V50Sek4v72S0anF+eUhQV9XTM5ekZ89WMxdUVh7dvcDmf4aTAuYKrxQxQvHiSKqv1kspXJKcs1gvqYoS3RBu7nEKUQkiRdVzjnSeZctVHYjNDk1qR+Rg1xQSFDOoWBFx2AkUBUcCbAy+YKg4HJjinqEFSZTLd5eLknGW34Op8xpve9jTeFRS+pCxqMEHEo04pkYEWaooqOTHUNLjumAJd7GhjSxc7JHbkBGOoPazYUChqhAj1aETUiAF1OcoZZxJ86XG+JKWIExiNRnSxAxwjX5MscfjEDb763JfRFDh79ZQf/+n3Map3SX3w2ynHNGGNquG8p3IVXQwYRuFK1iHHGecK2tARtKOoPBcXF1w1MxpTSirWYbVJ+zOALgQLKW65pwgYRVlR7tSMdmp2dybs1CNMoChK9ib7JI2UZcl4PMbMOHriBt946es4ga/911f5+Rv7fPD3fj0ncE544dmv8I9/+fcoyq/9wYd5yzNv7Q2YIQ5Yvwajqip8WfDNr7/Eh3/xV7l372X8Jp1XUE0bDXSWevd2tb6kdCVgnM4eUHiPuyyoyxl1XVGVNVVZcXlxRlnUFGVJUWWafP0vnme2PMFJwfL5JX/z0Y9z49YxznsObx3xM7/ys3z+k59lerjPu37iR7k8nXF1dpk9CvYab1PWFXuHe9x76S6h6QBjHVYPbUC3bCDEgHkbLNysQAswTXifU4sQOrxb4SUXNuI8XgTrPcQ6rOn6WBFcx9/+2ccpi4q6HPPk00/xzPt+l6ff/lZG4x0APvXn/8BnPvFp1mFFG3O9oJpQTURVYoo0XcM6LDP1emAigpkSQxzcqEWNxJSY1FNCinQpMK2nRI2EFPHOUZYlbWhpYsvuzj5dbFiFhp1qly62XC3PUYHS16zaJYt2zmi0Q9OtOLl3gqlx+6nbTI+y213OVqy7BfP1Za4JlmfMFmeEGJk3l8xWZ6y6OV4cXewovOd473YOKQbpIYWimilRAyfz+3jnUYxXL+9ROI93ykLnSOPw3iEqvHJxF+8cYDyYvUKXGrrY0MWWBXO8E5wmXj55iXE9oepGLGZz9m8fEtpsb6/ee5lVt2LRzjmZ36eLHUkDs/WsL1UTQQOquUa++dQThC7grlyuVQY3mqKp9XEy5ULGzDDnMVOSKV5zVFR1Q9GRnEOyt2XeXD1SjCcTfN8AKFJHTJHFbMHejSmry8zji9MzutjShTVNt6aLAbXYFytG0Fw3i4B3xdBY2Bh5DKGnUBfU+tR4WufoG1Jgt54SUy7AnXPURU2XOrrUMdnZJ6aWkAJVURNTJKaIc55xtUtImXr7OwdD8b+cLdg/PmBnMkKTEleJ0P/+dLSPaiBp4vjwJse3b1LVJYUvmFT7uU4xY6/eBxHMjBCC9hVZsJzbK61rmEwn7EzGdKypx2NG4xr1ihaJsq6pxyNWLCl3RiDCyxffpIuBqIlVs2K2vMh1Q0o8uHo151qauHhwzv6tfXb2xiwuF8xX89x+MeVkcUI0BYNlWOMqj3cFasoyLHC9ZhebZC53KHoKhaCGopoLCFOHAsklsIRYn6snh2mCWKCWMIQmrGlCO+Q7IpDI1ZdiSPLEmAgpcvHgnMmNPZplw+L8KlNEc3quGlFTnGW7AgUc+4f7lFXF5dkmCx0cZabnJhfKZaRQ9DkHQCE1IYWc55Nr1JBibqWUY7oQiESOj2+xblYgUHiPlwI1w3uhdjs064aQOk7vn+Kc4+ZbbvGfd76YXaFGkiqlrwkp9lHZA4ITqKua0XjM4nyeY8NWfTwA6EKrarmydXgSHWbgnaeJLZjhcKgpTWjprlrS2JivZ7RhTbee0oYVhlG6KrvbLldiR5MjYgo03Zp7L94djPCVb7xMiKH3PJHa72y8I64verKHcAMgAC/FawGEEFT7unUdlvgyW/yyW/YqUzrtSF1CgHp3RKBh3a5QU65WsyHdTdrQxrZPDxzn8zOqssa7Fc8993muLi6ZHu7z7/96h/PlKV1scmbKihu3brJarlh1SyY7k6HubWIzROcmrh8pMzOALpj1Cdd8MX+kVqXn9fVhZr2gMvR7HtrBpvNgqChEQVgC8JHf+B3e9Jan+dydO6y6BW1oiTHgygJzoBgWlRQSKUZSDKTgiBqHfmrunvR1OUDXtX1TRdkr93pDVqb1FLWc3lauYqcY900vHQoLM+NgdAgGMSW8KxhXkxyEUuRofEwXWtZdriWe+8Ln+euPfYx1t6RwFW1o6TSy6ya8cvcuV5ezXLLeO2G5WnJ5fsXydEkILfdfvkea9234bSN+2zM/PCnqKu+g5ODE1s4aIM71X8qJV0iBd9t7UOv7SJuzAbPc/NoERVWesDdj+jBRU02EmNAU2Ul7eVdVeUp3+q63UaTR0CVMKTHZO0ST0mhgVEzwVUUSywccn71z5+LWk08ebOjxSFNpq829TZ/HnSdst+A3Lfntuf3O9vrbeXb93nvPnX/+l98uREQ++XefSOO9vdcSfQvE9tycH8g147h+nnBd+O/0iDEnc7JeLecicuNbncYAjxwFbYN43I79fwoPEFP7Pw7ga8+/8Eea0uuehjzslj0UdPvZ9fvrB4Lf6em95+6LL83+7dlnP7ZpBFUf+sCH3v2uH3nHb8Wku2pamKozNWdmTs0cZqJmoimJYc7UBBADMTOXDVlF1YT+HHZ79NAs+4R8FRFFxET6e8QQp65/7kRUNtM59c6nsiy6mOKXPvqnf/KHL774Yis9DRzgyV6pILtXx9DleuzkMfdcWz9u2LW1bT2zN5jaz9jPZGYq3/9nj+/y+J4H8L+MTuk/aD1EjQAAAABJRU5ErkJggg==" style="height:88px; width:88px" />
            </td>
            <td style="border:2px solid black; width:70%; text-align:center">

                <strong style="font-size:20px"><?php echo $empresa[nome] ?></strong><br>

                <strong style="font-size:18px"><?php echo $empresa[cnpj] ?></strong><br>

                <strong style="font-size:16px"><?php echo $empresa[telefone] ?></strong><br>

                <strong style="font-size:16px">E-mail:<?php echo $empresa[email] ?></strong><br>

            </td>
            <td style="border:2px solid black; width:30%; text-align: center;">
            Numero Contrato:<br>

            <b><?php echo $aluguel[contrato_id] ?></b><br><br>

            Emiss&atilde;o:<br>

            <?php echo date('d/m/Y H:i:s'); ?><br>
            </td>
        </tr>
    </tbody>
</table>

<table class="table" >
    <tbody>
        <tr>
            <th colspan="1" >
            DADOS DO VEÍCULO
            </th>
        </tr>
        <tr>
            <td class="tdBody" >
                <table >
                    <tbody>

                        <tr>
                            <td style="width:25%">
                                <label>Placa:</label>
                                <div class="field"><?php echo $veiculo[placa] ?></div>
                            </td>
                               
                            <td style="width:25%">

                                <label>Marca:</label>
                                <div class="field"><?php echo $veiculo[marca] ?></div>
                            </td>                            
                            <td style="width:25%">

                                <label>Modelo:</label>
                                <div class="field"><?php echo $veiculo[modelo] ?></div>
                            </td>
                            <td style="width:25%">
                                <label>Ano:</label>
                                <div class="field"><?php echo $veiculo[ano] ?></div>
                            </td>                         

                            <td >

                                <label>Cor:</label>
                                <div class="field"><?php echo $veiculo[cor] ?></div>

                            </td>
                          
                        </tr>
                    </tbody>
                </table>
	            <table cellspacing="0" style=" width:100.0%; border-top:1px solid black;">
	                <tbody>
	                    <tr>
	                        <td style=" width:33%">
	                            <label>Nome do Cliente:</label>
	                            <div class="field"><?php echo $cliente[nome] ?></div>
	                        </td>
	                        <td >
	                            <label>Contatos:</label>
	                            <div class="field"><?php echo $cliente[telefone] ?></div>
	                        </td>

	                        <td style=" width:33%">                         
	                            <label>Documento CPF/CNPJ:</label>
	                            <div class="field"><?php echo $cliente[cpf_cnpj] ?></div>
	                        </td>
	                    </tr>                    
	                </tbody>
	            </table>               
            </td>
        </tr>
    </tbody>
</table>
<table class="table" >
    <tbody>
        <tr>
            <th colspan="1" >
            ÍTENS E ACESSÓRIOS
            </th>
        </tr>
        <tr>
            <td class="tdBody" style="height:70PX" >
            </td>
        </tr>
    </tbody>
</table>
<table  >
	<tr>
		<th style="border: 1px solid;background-color: #ddd;">SAÍDA</th>
		<th style="border: 1px solid;background-color: #ddd;">RETORNO</th>
	</tr>	
	<tr>
		<th width="50%" style="border: 1px solid; padding: 5px;">
			<img src="../imgs/carro.jpg" style="width:100%">
			
			<table style="border-bottom: 1px solid; padding: 5px; width: 100%;">
				<tr>
					<th>O = Amassado</th>
					<th>X = Quebrado</th>
					<th>- = Riscado</th>
				</tr>
			</table>
			
			<style type="text/css">
				.tanque{
					border-bottom: 1px solid; padding: 5px; width: 100%;
					column-span: 0;
				}
				.tanque th{
					border: 1px solid;
					height: 30px;
					width: 30px;
				}
			</style>			
			<table class="tanque" style="" cellpadding="0">
				<tr>
					<th colspan="10" style="background-color: #ddd; ">TANQUE</th>
				</tr>
				<tr>
					<th>C</th>
					<th>7/8</th>
					<th>3/4</th>
					<th>5/8</th>
					<th>1/2</th>
					<th>3/8</th>
					<th>1/4</th>
					<th>1/8</th>
					<th>V</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				
			</table>
			<table style="border: 1px solid;">
				<tr>
					<th colspan="30" style="background-color: #ddd;">VISTORIA</th>
				</tr>				
				</tr>
			        <td width="50%">
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Limpeza interna e externa </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Estepe </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Macaco </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Chave de roda </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Triângulo </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Tampa do porta-malas </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Banco Trazeiro </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Banco Dianteiro </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Extintor </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Calotas </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Acendedor de Cigarros </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Buzina </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Espelhos </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Tapetes </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Antena </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes Trazeiras </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes Dianteiras </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes do Painel </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água Bateria </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água Radeador </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água limpador de para-brisa </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo do motor</div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo de freio</div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo hidramático</div>
			        </td> 
		    	</tr>
	        </table> 
			<table style="border: 1px solid;">
				<tr>
					<th colspan="30" style="background-color: #ddd;">OBSERVAÇÕES</th>
				</tr>				
				<tr>
			        <td width="50%" style="padding: 5px; text-align: center;">
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        </td>
			    </tr>
			</table>

			<table style="border: 1px solid;">
				<tr>
			        <td width="50%" style="padding: 5px; ">
			        	<br>
			        	Local de saída:________________________________________________<br><br>
			        	Data e Hora: ____/____/____ às ___:____<br><br>
			        	Checado por:_________________________________________________<br><br>
			        	Assinatura do Cliente__________________________________________<br>
			        </td>
			    </tr>
			</table>	        
        </th>  
		<th width="50%" style="border: 1px solid; padding: 5px;">
			<img src="../imgs/carro.jpg" style="width:100%">
			
			<table style="border-bottom: 1px solid; padding: 5px; width: 100%;">
				<tr>
					<th>O = Amassado</th>
					<th>X = Quebrado</th>
					<th>- = Riscado</th>
				</tr>
			</table>
			
			<style type="text/css">
				.tanque{
					border-bottom: 1px solid; padding: 5px; width: 100%;
					column-span: 0;
				}
				.tanque th{
					border: 1px solid;
					height: 20px;
					width: 20px;
				}
			</style>			
			<table class="tanque" style="" cellpadding="0">
				<tr>
					<th colspan="10" style="background-color: #ddd; ">TANQUE</th>
				</tr>
				<tr>
					<th>C</th>
					<th>7/8</th>
					<th>3/4</th>
					<th>5/8</th>
					<th>1/2</th>
					<th>3/8</th>
					<th>1/4</th>
					<th>1/8</th>
					<th>V</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				
			</table>
			<table style="border: 1px solid;">
				<tr>
					<th colspan="30" style="background-color: #ddd;">VISTORIA</th>
				</tr>				
				</tr>
			        <td width="50%">
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Limpeza interna e externa </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Estepe </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Macaco </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Chave de roda </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Triângulo </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Tampa do porta-malas </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Banco Trazeiro </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Banco Dianteiro </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Extintor </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Calotas </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Acendedor de Cigarros </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Buzina </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Espelhos </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Tapetes </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Antena </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes Trazeiras </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes Dianteiras </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Luzes do Painel </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água Bateria </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água Radeador </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Água limpador de para-brisa </div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo do motor</div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo de freio</div>
			        	<div class="vistorias"><input type="checkbox" name="fruit" value=""> Óleo hidramático</div>
			        </td> 
		    	</tr>
	        </table> 


			<table style="border: 1px solid;">
				<tr>
					<th colspan="30" style="background-color: #ddd;">OBSERVAÇÕES</th>
				</tr>				
				<tr>
			        <td width="50%" style="padding: 5px; text-align: center;">
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        	________________________________________________________<br>
			        </td>
			    </tr>
			</table>

			<table style="border: 1px solid;">
				<tr>
			        <td width="50%" style="padding: 5px; ">
			        	<br>
			        	Local de saída:________________________________________________<br><br>
			        	Data e Hora: ____/____/____ às ___:____<br><br>
			        	Checado por:_________________________________________________<br><br>
			        	Assinatura do Cliente__________________________________________<br>
			        </td>
			    </tr>
			</table>
        </th>  
         
	</tr>


</table>