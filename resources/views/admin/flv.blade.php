<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medida Certa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<link rel="stylesheet" href="{{url('assets/css/login_1.css')}}"/>
  <link rel="stylesheet" href="{{url('assets/css/login.css')}}"/>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">

        @csrf
					<span class="login100-form-title p-b-26">
						FLV
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
          <p>código-EAN</p>
						<input class="input100" type="text" name="codigo">
						<span class="focus-input100" data-placeholder=""></span>
            
					</div>

          <div>
          <input  type="hidden" value="null" name="descricao">
          <input  type="hidden" value="1" name="quantidade">
          

          </div>
         
          
          <p>Volta para tela inicio <a href="{{url('admin/login')}}">Clique Aqui</a></p>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button value="login" class="login100-form-btn">
								ENVIAR
							</button>
						</div>
					</div>
          @if ($error)
         <div class="error">{{$error}}</div>
          @endif

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>