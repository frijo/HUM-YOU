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
		      		<h1>Edit User</h1>
		      </div>
		      <div class="panel-body">
						{{ Form::open(array('url' => '/edit' , 'role'=>'form','enctype' =>'multipart/form-data' )) }}
						  
						  {{-- USERNAME ------------------------}}
						  <div class="form-group">
									{{ Form::label('username', 'NickName',
											array('class' => 'control-label')) }}
									{{ Form::text('username', Input::old('username'), 
											array(
					            	'name'        => 'username',
					              'id'          => 'txt_username',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->edit->first('username') }}
									</p>
						  </div>

						  {{-- NAME ------------------------}}
						  <div class="form-group">
									{{ Form::label('name', 'Name',
											array('class' => 'control-label')) }}
									{{ Form::text('name', Input::old('name'), 
											array(
					            	'name'        => 'name',
					              'id'          => 'txt_name',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('name') }}
									</p>
						  </div>


						  {{-- LASTNAME ------------------------}}
						  <div class="form-group">
									{{ Form::label('lastname', 'Last Name',
											array('class' => 'control-label')) }}
									{{ Form::text('lastname', Input::old('lastname'), 
											array(
					            	'name'        => 'lastname',
					              'id'          => 'txt_lastname',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('lastname') }}
									</p>
						  </div>


						  <div class="form-group">
						  	{{ Form::label('selectimg', 'Select Profile Picture',
											array('class' => 'control-label')) }}
						  <div class="row">    
						        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
						            <!-- image-preview-filename input [CUT FROM HERE]-->
						            <div class="input-group image-preview">
						                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
						                <span class="input-group-btn">
						                    <!-- image-preview-clear button -->
						                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
						                        <span class="glyphicon glyphicon-remove"></span> Clear
						                    </button>
						                    <!-- image-preview-input -->
						                    <div class="btn btn-default image-preview-input">
						                        <span class="glyphicon glyphicon-folder-open"></span>
						                        <span class="image-preview-input-title">Browse</span>
						                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/> <!-- rename it -->
						                    </div>
						                </span>
						            </div><!-- /input-group image-preview [TO HERE]--> 
						        </div>
						    </div>
						 </div>



						  {{-- PASSWORD ------------------------}}
						  <div class="form-group">
									{{ Form::label('password', 'Password',
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


						  {{-- REPASSWORD ------------------------}}
						  <div class="form-group">
									{{ Form::label('repassword', 'Confirm password',
											array('class' => 'control-label')) }}
									{{ Form::password('repassword',
											array(
					            	'name'        => 'repassword',
					              'id'          => 'txt_repassword',
					              'class'				=> 'form-control',
					              'maxlength'   => '20',
					              'type'       => 'password'))
					        }}
									<p class="text-danger">
										{{ $errors->signin->first('password') }}
									</p>
						  </div>
						  
		
						  

					  <div class="form-group">
						      <label class="col-lg-2 control-label">Gender</label>
						      <div class="col-lg-10">
						        <div class="radio">
						          <label>
						            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" checked="">
									Male						           
						          </label>
						        </div>
						        <div class="radio">
						          <label>
						            <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">
						          	Female
						          </label>
						        </div>
						      </div>
					      </div>
					      {{-- PHONE ------------------------}}
						  <div class="form-group">
									{{ Form::label('phone', 'Phone',
											array('class' => 'control-label')) }}
									{{ Form::text('phone', Input::old('phone'), 
											array(
					            	'name'        => 'phone',
					              'id'          => 'txt_phone',
					              'class'				=> 'form-control',
					              'maxlength'   => '20'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('phone') }}
									</p>
						  </div>
						  {{-- LOCATION ------------------------}}
						  <div class="form-group">
									{{ Form::label('location', 'Location',
											array('class' => 'control-label')) }}
									{{ Form::text('location', Input::old('location'), 
											array(
					            	'name'        => 'location',
					              'id'          => 'txt_location',
					              'class'				=> 'form-control',
					              'maxlength'   => '120'))
									}}
									<p class="text-danger">
										{{ $errors->signin->first('location') }}
									</p>
						  </div>

			        <div class="row">
			          <div class="col-md-12 text-right">

			            <button class="btn btn-primary" id="bt_registrarse">Edit </button>
			            <button class="btn" id="bt_cerrar" onclick="cancel()" type="button">Close</button>
			          </div>
			        </div>

@stop