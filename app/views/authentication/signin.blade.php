@extends('layouts.base')
@section('cabecera')
    @parent
@stop
@section('cuerpo')
	@parent

		<div class="row">
		  <div class="col-md-6">
		    <div class="panel panel-default">
		      <div class="panel-heading text-center">
		      		<h1>Registro de usuario</h1>
		      </div>
		      <div class="panel-body">
						{{ Form::open(array('url' => '/signin', 'role'=>'form')) }}
						  
						  {{-- USERNAME ------------------------}}
						  <div class="form-group">
									{{ Form::label('username', 'Usuario',
											array('class' => 'control-label')) }}
									{{ Form::text('username', Input::old('username'), 
											array(
					            	'name'        => 'username',
					              'id'          => 'txt_username',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('username') }}
									</p>
						  </div>					

						  {{-- PASSWORD ------------------------}}
						  <div class="form-group">
									{{ Form::label('password', 'Contraseña',
											array('class' => 'control-label')) }}
									{{ Form::password('password',
											array(
					            	'name'        => 'password',
					              'id'          => 'txt_password',
					              'class'				=> 'form-control',
					              'maxlength'   => '20',
					              'type'       => 'password'))
					        }}
									<p class="text-danger">
										{{ $errors->signin->first('password') }}
									</p>
						  </div>
						  
						  {{-- EMAIL ------------------------}}
						  <div class="form-group">
									{{ Form::label('email', 'Email',
											array('class' => 'control-label')) }}
									{{ Form::text('email', Input::old('email'), 
											array(
					            	'name'        => 'email',
					              'id'          => 'txt_email',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('email') }}
									</p>
						  </div>

			        <div class="row">
			          <div class="col-md-12 text-right">
			            <button class="btn btn-primary" id="bt_registrarse">Registrarse</button>
			            <button class="btn" id="bt_cerrar" onclick="cancel()" type="button">Cerrar</button>
			          </div>
			        </div>

						{{ Form::close() }}
		      </div>
		    </div>
		  </div>
		</div>

  {{HTML::script('js/authentication/signin.js');}}
	<script type="text/javascript">
		var url_home = "<?= URL::route('home') ?>";
	</script>
@stop
