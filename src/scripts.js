var dialog_id = 0;


function dialog_open(href,id='',onClose=function(){}){

	event.preventDefault();

	if(!id){
		dialog_id = getRandomInt(100000, 999999);
	}else{
		dialog_id = id;
	}


	$.get( href, function( data ) {
		
		$('body').append('<div class="dialog_'+dialog_id+'" id="dialog_'+dialog_id+'">'+data+'</div>');

		$('.dialog_'+dialog_id).dialog({
			title: $('.dialog_'+dialog_id+' meta').attr('title'),
			iconCls: $('.dialog_'+dialog_id+' meta').attr('iconCls'),
			width: $('.dialog_'+dialog_id+' meta').attr('width'),
			height: $('.dialog_'+dialog_id+' meta').attr('height'),
			modal:true,
			border:0,
			bodyCls:'dialog',
			onClose:function(data){
				
				$('.dialog_'+dialog_id).dialog('destroy');
				$('.dialog_'+dialog_id).remove();

				onClose(dialog_id,data);
			}
		})

		$.parser.parse('.dialog_'+dialog_id);
	});

}

////////////////////////////////////////////////
function datagrid_del(datagrid,table){

	if(!$(datagrid).datagrid('getSelected')){
		alert('Selecione o item para exluir');
		return false;
	}

	var row = $(datagrid).datagrid('getSelected')[table+'_id'];
	$.messager.confirm({
		title: 'Confirmar',
		msg: `Tem certeza que deseja Excluir o item ${row} ?`,
		fn: function(r){
			if (r){
	
				$.messager.progress(); 
				$.get( "server.php?exclui_mysql="+table+'&id='+row, function( data ) {
					$(datagrid).datagrid('reload');
					$.messager.show({
						title:'Excluido',
						msg:'Item Excluido com sucesso!',
						timeout:1000,
						showType:'slide'
					});			
				  	$.messager.progress('close');
				});

			}
		}
	});
}

////////////////////////////////////////////////
function dialog_save(dialog_id,form_id,datagrid){

    $.messager.progress();  
    $(form_id).form('submit', {
        ajax:true,        
        onSubmit: function(){
            var isValid = $(this).form('validate');
            if (!isValid){
                $.messager.progress('close'); 
                $(this).form('enableValidation');
                alert('Preencha todos os Campos Obrigatórios!');
            }
            return isValid; 
        },
        success: function(){
            $(datagrid).datagrid('reload');
            $.messager.progress('close');   
            dialog_close(dialog_id);
            $.messager.show({
                    title:'Salvo',
                    msg:'Item Salvo com sucesso!',
                    timeout:1000,
                    showType:'slide'
                });                 
        }
    });
}

////////////////////////////////////////////////
function dialog_close(dialog_id){
    $('.dialog_'+dialog_id).dialog('close');
}

////////////////////////////////////////////////
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min)) + min;
}

///////////////////////////////////////////////
function calcula_data(data_ini,data_fim,hora_ini='',hora_fim=''){
    var date1 = new Date(data_ini.replace( /(\d{2})[-/](\d{2})[-/](\d+)/, "$2/$1/$3 "+hora_ini));
    var date2 = new Date(data_fim.replace(/(\d{2})[-/](\d{2})[-/](\d+)/, "$2/$1/$3 "+hora_fim));
    var timeDiff = date2.getTime() - date1.getTime();
    var diffDays = timeDiff / (1000 * 3600 * 24); 

    return diffDays;
}



///////////////////////////////////////////////
function dataAtualFormatada(){
    var data = new Date(),
        dia  = data.getDate().toString().padStart(2, '0'),
        mes  = (data.getMonth()+1).toString().padStart(2, '0'), //+1 pois no getMonth Janeiro começa com zero.
        ano  = data.getFullYear();
    return dia+"/"+mes+"/"+ano;
}

//////////////////////////////////////////////////
function postPrint(data,url){

    $('body').append('<iframe name="iframePrint" style="display:none" id="iframePrint" src="'+url+'"></iframe>');
    $('body').append('<form action="'+url+'" method="post" target="iframePrint" id="postToIframe"></form>');
    $('#postToIframe').append('<input type="hidden" name="post" value=\''+data+'\' />');
    $('#postToIframe').submit().remove();;

	setTimeout(function(){ 

		document.getElementById("iframePrint").contentWindow.print();

	}, 500);
}


