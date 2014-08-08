@extends('layouts.base')
@section('cabecera')
    @parent
@stop
@section('cuerpo')
	@parent

	
<div class="container">
		 <div class="container">
		<div class="row">
		  <div class="col-md-4">
		    <div class="panel panel-default">
		      <div class="panel-heading text-center">
		      		<h2>Login</h2>
		      </div>
		      <div class="panel-body">
						{{ Form::open(array('url' => '/login', 'role'=>'form')) }}
		        <div class="text-left">
								<div class="from-group">
									{{ Form::label('username', 'NickName',
											array('class' => 'control-label')) }}
									{{ Form::text('username', Input::old('username'), 
											array(
					            	'name'        => 'username',
					              'id'          => 'txt_username',
					              'class'				=> 'form-control',
					              'maxlength'   => '20',
					              'placeholder' => 'Enter your NIckName'))
									}}
								</div>
								<br/>
								<div class="from-group">
									{{ Form::label('password', 'Password',
											array('class' => 'control-label')) }}
									{{ Form::password('password',
											array(
					            	'name'        => 'password',
					              'id'          => 'txt_password',
					              'class'				=> 'form-control',
					              'maxlength'   => '20',
					              'type'       => 'password',
					              'placeholder' => 'Enter you password'))
					        }}
								</div>
								<br>
		        </div>
		        
		        <div class="row">
		          <div class="col-md-12 text-right">
		            <button class="btn btn-success" id="bt_login">Log in</button>
		            <button class="btn" id="bt_cerrar" onclick="cancel()" type="button">Close</button>
		          </div>
		        </div>
						{{ Form::close() }}
		      </div>
		    </div>
		  </div>
		</div>
		</div>
		</div>




  {{HTML::script('js/authentication/login.js');}}
	<script type="text/javascript">
		var url_home = "<?= URL::route('home') ?>";
	</script>
@stop