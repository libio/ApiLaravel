<!DOCTYPE html>
<html lang="en">
<head>
	<title>Consumiendo Api con Laravel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

<!--===============================================================================================-->
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action={{route('datainfo')}} method="post">
				<span class="contact100-form-title">
					Consultar Datos
				</span>
                <div class="rs1-wrap-input100">
					<span class="label-input100">Buscar en: </span>
					<div>
						<select class="js-select2" name="service">
							<option>RENIEC</option>
							<option>RUC</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">DNI*</span>
					<input id=".dni" class="input100" type="number" name="nro_documento" placeholder="Ingrese su DNI">
				</div>
				<div class="rs1-wrap-input100">
					<button class="contact101-form-btn" id="RecuperarDatos" type="submit">
						Recuperar
					</button>
				</div>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          
				<div class="g-signin2" data-onsuccess="onSignIn"></div>
				
			
                <div class="contact100-form mt-5" id="datos" style="display: ">
                   
					<div class="wrap-input100   bg1 rs1-wrap-input100" id="nombres" >
						<span class="label-input100">Nombres</span>
						<input id=".nombres" class="input100" type="text" value={{$infouser['nombres']}} >
					</div>
					<div class="wrap-input100    bg1 rs1-wrap-input100" >
						<span class="label-input100">A.Paterno</span>
						<input id=".a_paterno" class="input100" type="text" name="a_paterno" placeholder="Ingrese A.Paterno" value={{$infouser['apellidoPaterno']}} >
					</div>
					<div class="wrap-input100 bg1   rs1-wrap-input100 bg0 rs1-alert-validate" data-validate = "Ingrese su A.Materno" >
						<span class="label-input100">A.Materno</span>
						<input id=".a_materno" class="input100" type="text" name="a_materno" placeholder="Ingrese A. Materno" value={{$infouser['apellidoMaterno']}}>
					</div>
					<div class="wrap-input100  bg1 rs1-wrap-input100" data-validate = "Ingrese su email (e@a.x)">
						<span class="label-input100">Sexo *</span>
						<input id=".sexo" class="input100" type="text" value="M">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Codigo de verifiacion</span>
						<input id=".fnac" type="text" class="input100" value={{$infouser['codVerifica']}}>
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Estudio</span>
						<input id=".estudio" class="input100" type="text"  >
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Departamento</span>
						<input id=".depart" class="input100" type="text"  >
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Provincia</span>
						<input id=".prov" class="input100" type="text" >
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Distrito</span>
						<input id=".dist" class="input100" type="text" >
					</div>
					<div class="wrap-input100 bg1 ">
						<span class="label-input100">Direccion</span>
						<input id=".direc" class="input100" type="text" value="Los portales de buenaventura 125" >
					</div>
					
					<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message" style="display: none">
						<span class="label-input100">Message</span>
						<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					</div>
					<div class="container-contact100-form-btn">
						<form action="firebase.js" method="POST" id="my_captcha">
							<div class="g-recaptcha" data-sitekey="6LftW78UAAAAAHCyQBHFzJAKfn8mCnhckZUFA1G7" ></div>
						</form>
					</div>
					
				</div>
		</div>
        
		
	</div>
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>



</body>
</html>
