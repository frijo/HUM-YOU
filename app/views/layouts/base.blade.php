<!doctype html>
<html lang="es">
	<head>
  	

		@section('cabecera')
			<meta charset="UTF-8">
			<title>HUM YOU !</title>

			<!-- Latest compiled and minified CSS -->
			{{HTML::style('css/bootstrap.min.css');}}
			
			<!-- jQuery -->
			{{HTML::script('js/jquery/1.8.2/jquery.min.js');}}
			
			<!-- Latest compiled and minified JavaScript -->
			{{HTML::script('js/bootstrap.min.js');}}

		@show
	</head>

	<body>
			<div class="navbar navbar-inverse">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="#">HUM YOU ! :)</a>
			  </div>
			  <div class="navbar-collapse collapse navbar-inverse-collapse">
			    <ul class="nav navbar-nav">
			      <li class="active"><h4 >You dont have a account yet ? click here! =><h4></li>
			      <li><a href="{{ route('signin') }}">Registrer</a></li>
			      
			    </ul>
			    
			    <ul class="nav navbar-nav navbar-right">
			      
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Action</a></li>
			          <li><a href="#">Another action</a></li>
			          <li><a href="#">Something else here</a></li>
			          <li class="divider"></li>
			          <li><a href="#">Separated link</a></li>
			        </ul>
			      </li>
			    </ul>
			  </div>
			</div>
				
	</body>
</html>