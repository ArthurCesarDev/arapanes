<!DOCTYPE html>
<html lang="en">
<head>
	<title>Medida Certa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!--===============================================================================================-->	

<link rel="stylesheet" href="{{url('assets/css/login_1.css')}}"/>
  <link rel="stylesheet" href="{{url('assets/css/login.css')}}"/>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">

        @csrf
					<span class="login100-form-title p-b-26">
						Coletor Arapanés
					</span>
					
						<div class="container"> 
							<div>
							<button type="button" class="btn btn-danger">
								<a style="color:white;" href="{{url('admin/flv')}}">FLV</a>
							</button>
							</div>

							<div>
							<button style= "margin-top:10px;" type="button" class="btn btn-danger">
								<a style="color:white; margin-buttom:10px;" href="{{url('admin/mer')}}">MERCEARIA</a>
							</button>
							</div>
							<div>
							<button style= "margin-top:10px;" type="button" class="btn btn-danger">
								<a style="color:white; margin-buttom:10px; " href="{{url('admin/pas')}}">PAS</a>
							</button>
							</div>
							
							
						</div>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</html>