
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/registrofoto.jpeg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/fotoregistro.jpeg" alt="">
				</div>
				<form action="cadastro.php" method="POST">
					<h3>Registre-se</h3>
					<div class="form-group">
						<input name = 'nome1'type="text" placeholder="Nome e Sobrenome" class="form-control">
						<input name = 'nome2'type="text" placeholder="Nome de Usuario" class="form-control">
					</div>
					<div class="form-wrapper">
						<input name = 'senha'type="password" placeholder="Senha" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'email'type="text" placeholder="E-mail" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="genero" id="" class="form-control">
							<option value="" disabled selected>Gênero</option>
							<option value="male">Masculino</option>
							<option value="femal">Feminino</option>
							<option value="other">Outro</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'cpf'type="Number"  placeholder="CPF" class="form-control">
						<i class="fas fa-address-card"></i>
					</div>
					<!-- input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    } -->
					<div class="form-wrapper">
						<input  name = 'endereco'type="text" placeholder="Endereço" class="form-control">
						<i class="fas fa-street-view"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'bairro'type="text" placeholder="Bairro" class="form-control">
						<i class="fas fa-street-view"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'numcasa'type="number" placeholder="Numero da casa" class="form-control">
						<i class="fas fa-home"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'cep' type="number" placeholder="CEP" class="form-control">
						<i class="fas fa-map-pin"></i>
					</div>
					<div class="form-wrapper">
						<input name = 'cidade'type="text" placeholder="Cidade" class="form-control">
						<i class="fas fa-city"></i>
					</div>
					<button name = 'submit'>Registrar-se	
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>