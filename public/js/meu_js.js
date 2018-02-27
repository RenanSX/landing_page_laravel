$('#cep').mask('99999-999');


$('#cellphone').mask('(99) 99999-9999');

$('#birthday').mask('99/99/9999')

$(function() {
  $('#birthday').on('keydown', '#child', function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||(/65|67|86|88/.test(e.keyCode)&&(e.ctrlKey===true||e.metaKey===true))&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
});


var cep = $('#cep');
var nascimento = $('#birthday');

$("#cep").blur(function(){
	if(cep.val().length > 0){
			$.ajax({url: 'https://webmaniabr.com/api/1/cep/'+cep.val()+'/?app_key=fMxZG2PGx63y6JC0CrtyYG0CBNI6dyuV&app_secret=CK8KhFRlzLyM6V6T6vY3aAsfs8e6fke6v0fevtEEEMwJaEno', success: function(result){
        	$('#endereco').val(result.endereco);
        	$('#endereco').prop("disabled",false);
        	$('#bairro').val(result.bairro);
        	$('#bairro').prop("disabled",false);
        	$('#cidade').val(result.cidade);
        	$('#cidade').prop("disabled",false);
        	$('#uf').val(result.uf);
        	$('#uf').prop("disabled",false);
    	}});
	}

    
});

function Trim(strTexto)
{
    // Substitúi os espaços vazios no inicio e no fim da string por vazio.
    return strTexto.replace(/^s+|s+$/g, '');
}

$("#birthday").blur(function(){
	var reg = /(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d/;

	if(nascimento.val().match(reg)){
		$('#erro_nacimento').html('');
		$('#enviar').prop("disabled",false);
	}else{
		$('#erro_nacimento').html('');
		$(this).after('<b id="erro_nacimento" style="color: white">Favor informar uma data válida!</b>');

		$('#enviar').prop("disabled",true);
	}


});