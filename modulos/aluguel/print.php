<?php 
    include_once('../../funcoes.php');
    if($_POST['post']){
        $post = json_decode($_POST['post'],1);
        $buscar_mysql = buscar_mysql('modelo_contratos',$post['print'],'modelo_contratos_id');
        echo $buscar_mysql['contrato'];
    }
    die;
    
?>