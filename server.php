<?php 
include_once('funcoes.php');
include_once('modulos/funcoes.php');


list_modulos();
//Rodas do sistema
////////////////////////////////////////////////
if($_GET['op'] == 'modulos_config'){	

	$saida[modulos] = $_SERVER['modulos_config'];
	$saida[session] = $_SESSION;

	include_once('wallpapers/index.php');
	$saida[wallpapers] =  wallpapers();

	echo json_encode($saida);
}

////////////////////////////////////////////////
if($_GET['op'] == 'logar'){
	
	$error['error']['login'] = 'Login ou senha Inválido';

	$buscar_mysql = buscar_mysql('users',$_GET['login'],'login');

	if($buscar_mysql['senha']){
		if($buscar_mysql['senha']==$_GET['senha']){
			$_SESSION['login'] = $buscar_mysql;
			echo json_encode(array('logado'=>true));
		}else{
			echo json_encode($error);
		}
	}else{
		echo json_encode($error);
	}
	
	die;
}
////////////////////////////////////////////////
if($_GET['op'] == 'logout'){
	
	unset($_SESSION['login']);

	echo json_encode(array('logout'=>true));
	
	die;
}

////////////////////////////////////////////////
if($_GET['op'] == 'aluguel_get'){
	
	$buscar_mysql = buscar_mysql('aluguel',$_GET['id']);

	if(!$buscar_mysql){
		$buscar_mysql['contrato_id'] = mktime().rand(10000,99999);
	}
	
	echo json_encode($buscar_mysql);
	die;
}

////////////////////////////////////////////////
if($_GET['op'] == 'aluguel_set'){
	
	$buscar_mysql = buscar_mysql('clientes',$_POST['cliente']);

	if(!$buscar_mysql[nome]){
		$cliente[nome] = $_POST['cliente'];
		$salvar_cliente = salvar_mysql('clientes',$cliente);
		$_POST['cliente'] = $salvar_cliente[id];
	}else{
		$_POST['cliente'] = $buscar_mysql[clientes_id];
	}

	if($_POST['status']=='finalizado'){
		$_POST['data_fechamento']=date('d/m/Y H:i');
		$_POST['user_fechamento']=$_SESSION['user'];
	}else{
		$_POST['data_fechamento']='';
		$_POST['user_fechamento']='';
	}



	$salvar_mysql = salvar_mysql('aluguel',$_POST, $_POST['aluguel_id'],'aluguel_id');

	echo json_encode($salvar_mysql);
	die;
}


if($_GET['op'] == 'aluguel_list'){
	

	$page  = $_POST['page'];
	$rows  = $_POST['rows'];
	unset($_POST['page']);
	unset($_POST['rows']);

	$clientes = consultar_mysql('clientes');
	foreach ($clientes['rows'] as $key => $value) {
		$clientes_array[$value['clientes_id']] = $value;
	}

	$veiculos = consultar_mysql('veiculos');
	foreach ($veiculos['rows'] as $key => $value) {
		$veiculos_array[$value['veiculos_id']] = $value;
	}

	$aluguel = consultar_mysql('aluguel',$_GET['id']);

	$_POST['page'] = $page;
	$_POST['rows'] = $rows;
	foreach ($aluguel['rows'] as $key => $value) {
		$aluguel['rows'][$key]['cliente_nome'] = $clientes_array[$value['cliente']]['nome'];



		$aluguel['rows'][$key]['veiculo_placa'] = $veiculos_array[$value['veiculo']]['placa'];
	}

	echo json_encode($aluguel);
	die;
}


////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'condutores_get'){
	$buscar_mysql = buscar_mysql('condutores',$_GET['id']);
	unset($buscar_mysql[condutor_contrato]);
	unset($buscar_mysql[condutor_cliente]);
	echo json_encode($buscar_mysql);
	die;	
}



if($_GET['op'] == 'condutores_set'){
	
	
	if($_POST['condutor_contrato']){

		salvar_mysql('contrato_condutores',$_POST,$_POST['contrato_condutores_id'],'contrato_condutores_id');

	}

	salvar_mysql('condutores',$_POST,$_POST['condutores_id'],'condutores_id');

	echo ok;
	die;
}
if($_GET['op'] == 'condutores_list'){
	
	$consultar = consultar_mysql('contrato_condutores',array('condutor_contrato'=>$_GET['condutor_contrato']));


	echo json_encode($consultar);
	die;
}


////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'itens_adicionais_get'){
	$buscar_mysql = buscar_mysql('itens_adicionais',$_GET['id']);
	unset($buscar_mysql[itens_adicionais_contrato]);
	unset($buscar_mysql[itens_adicionais_cliente]);
	echo json_encode($buscar_mysql);
	die;	
}

if($_GET['op'] == 'itens_adicionais_set'){
	salvar_mysql('itens_adicionais',$_POST,$_POST['itens_adicionais_id'],'itens_adicionais_id');
	
	if($_POST['itens_adicionais_contrato']){

		$_POST['itens_adicionais_itens'] = $_POST['itens_adicionais_contrato'].'_'.$_POST['itens_adicionais_id'];

		salvar_mysql('itens_adicionais_itens',$_POST,$_POST['contrato_itens_adicionais'],'contrato_itens_adicionais');

	}
	echo ok;
	die;
}


////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'servicos_get'){
	$buscar_mysql = buscar_mysql('servicos',$_GET['id']);
	unset($buscar_mysql[servicos_contratos]);
	echo json_encode($buscar_mysql);
	die;	
}
//////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'servicos_set'){
	
	
	if($_POST['servicos_contratos']){

		//$_POST['servicos_contratos_cod'] = $_POST['servicos_contratos'].'_'.$_POST['servicos_id'];

		salvar_mysql('servicos_contratos',$_POST,$_POST['servicos_contratos_id'],'servicos_contratos_id');

	}
	unset($_POST['servicos_contratos_id']);
	unset($_POST['servicos_contratos']);

	salvar_mysql('servicos',$_POST,$_POST['servicos_id'],'servicos_id');

	echo ok;
	die;
}
if($_GET['op'] == 'servicos_list'){
	
	if($_GET['servicos_contratos']){
		$consultar = consultar_mysql('servicos_contratos',array('servicos_contratos'=>$_GET['servicos_contratos']));
		echo json_encode($consultar);
		die;		
	}

	die;
}


//////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'pagamentos_set'){
	//salvar_mysql('pagamentos',$_POST,$_POST['forma'],'forma');
	
	if($_POST['pagamentos_contratos']){

		//$_POST['pagamentos_contratos_cod'] = $_POST['pagamentos_contratos'].'_'.rand(10000,99999);

		salvar_mysql('pagamentos_contratos',$_POST,$_POST['pagamentos_contratos_id'],'pagamentos_contratos_id');

	}
	echo ok;
	die;
}

//////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'pagamentos_list'){
	//salvar_mysql('pagamentos',$_POST,$_POST['forma'],'forma');
	
	if($_GET['pagamentos_contratos']){
		$consultar = consultar_mysql('pagamentos_contratos',array('pagamentos_contratos'=>$_GET['pagamentos_contratos']));
		echo json_encode($consultar);
		die;		
	}

	die;
}

//////////////////////////////////////////////////////////////////////////////
if($_GET['op'] == 'users_set'){

	if(!$_POST['users_id']){
		$_POST[data_cadastro] = date('d/m/Y H:i:s');
		$_POST[mktime_reg] = mktime();
	}

	$salvar_mysql = salvar_mysql('users',$_POST,$_POST['users_id'],'users_id');

	echo json_encode($salvar_mysql);
	die;
}
