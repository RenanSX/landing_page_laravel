<!DOCTYPE html>
<html>
<head>
<title>Teste Dialhost - Cadastro visitante</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //custom-theme -->

<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
</head>
<body>
	
	<div class="bg container-fluid">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-7 col-md-5 col-md-offset-6 col-sm-6 col-sm-offset-5 ">
				@if (session('status'))
				<div class="alert alert-success status">
			  		<strong><p>{{ session('status') }}</p></strong>.
				</div>
			@endif 
		<h1 class="agile-head text-center">Cadastro</h1>
			
			<div class="form_w3layouts cont">
				<form action="/salvar" method="post" id="form_gravar" class="w3_agile_login">
				  <input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <p>Nome completo</p>
				  <input type="text" name="name" id="name" required="required" />
				  <p>Celular</p>
				  <input type="text" name="cellphone" id="cellphone" required="required" />
				  <p>Email</p>
				  <input type="email" name="email" id="email" required="required" />
				  <p>Data de nascimento</p>
				  <input type="text" name="birthday" id="birthday"  required="required">
				  <p>CEP</p>
				  <input type="text" name="cep" id="cep"  required="required">
				   <p>Endereço</p>
				  <input type="text" disabled name="endereco" id="endereco"  required="required">
				  <p>Bairro</p>
				  <input type="text" disabled name="bairro" id="bairro"  required="required">
				  <div class="row">
				  	<div class="col-md-6">
				  		<p>Cidade</p>
				  		<input type="text" disabled name="cidade" id="cidade"  required="required">
				  	</div>
				  	<div class="col-md-6">
				  	<p>Estado</p>
				  	<input type="text" disabled name="uf" id="uf"  required="required">
				  	</div>
				  </div>
				  <div class="w3_agile_login">
						<input type="submit" id="enviar" value="Enviar">
					</div> 
				</form> 
			</div>	
		<div class="agileits-w3layouts-copyright text-center">
		Renan <?php echo date('Y') ?>
		</div>
		</div>	
	</div>
	</div>
</body>
<script type="text/javascript" src="js/meu_js.js".></script>
</html>

<script type="text/javascript">
	$('#form_gravar').validate({
		rules : { 
			name:{
			 required:true
			}, 
			cellphone:{ 
				required:true
			}, 
			email:{
				required:true
			},
			birthday:{
				required:true
			},
			cep:{
				required:true
			},
			endereco:{
				required:true
			},
			bairro:{
				required:true
			},
			cidade:{
				required:true
			},
			uf:{
				required:true
			},
		}
	});
</script>