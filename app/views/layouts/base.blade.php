<!doctype html>
<html lang="es">
	<head>
  	

		@section('cabecera')
			<meta charset="UTF-8">
			<title>HUM YOU !</title>

			<!-- Latest compiled and minified CSS -->
			{{HTML::style('css/bootstrap.css');}}
			
			<!-- jQuery -->
			{{HTML::script('js/jquery/1.8.2/jquery.min.js');}}
			
			<!-- Latest compiled and minified JavaScript -->
			{{HTML::script('js/bootstrap.min.js');}}

			{{HTML::script('js/SelectIMG/picture.js');}}

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
			    <a class="navbar-brand" >HUM YOU ! :)</a>
			  </div>
			
			
			  <div class="navbar-collapse collapse navbar-inverse-collapse">
			    
			   
			    <ul class="nav navbar-nav">
			    @if(Auth::check())
					<li><a href="#">Profile</a></li>
					<li><a href="#">My Information</a></li>
      				<li><a href="#">MY HUMS</a></li>
				@else 
			    	<li><a href="{{ route('signin') }}">Registrer</a></li>
			    @endif
							      
			    </ul>
			    
			
			    <ul class="nav navbar-nav navbar-right">
			    @if(Auth::check())
					<div class="btn-group">
					  <button type="button" class="btn btn-success" id="bn-Profile">{{ Auth::user()->username }}</button>
					  <button type="button" class="btn btn-success dropdown-toggle"id="bn-DropProfile" data-toggle="dropdown"><span class="caret"></span></button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ route('edit') }}">Edit Profile</a></li>
					    <li><a href="{{ route('delete') }}">Delete Profile</a></li>
					    
					    <li class="divider"></li>
					    <li><a href="{{ route('logout') }}">Log out</a></li>
					  </ul>
					</div>	
				@else      
			   			<a href="{{ route('login') }}">   <button type="button" id="bn-login"class="btn btn-success" >  Login  </button></a>
			    @endif  			      
			    </ul>
			    
			      </li>
			    </ul>
			  </div>
			
			
			
			</div>

			
		<div class="container">
				<!-- Sección de mensages de alerta -->
	   		
	   		{{ View::make('partials.messages') }}
			
			@section('cuerpo')
			@show
		</div>
				
	</body>
</html>