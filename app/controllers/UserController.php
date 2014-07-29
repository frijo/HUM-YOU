<?php

class UserController extends BaseController
{

	/**
	 * Muestra el formulario de inicio de sessión
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('authentication.login');
	}

	public function authentication()
	{
    $user = array(
	  	'username' => Input::get('username'),
	  	'password' => Input::get('password')
		);
  
    if (Auth::attempt($user)) {


    	  // Se verifica si el usuario estaba intentando conectarse a algún recurso
    		$url_intended = Session::pull('url.intended', false);
				if ($url_intended)
	        return Redirect::to($url_intended)
	            ->with('flash_success', Auth::user()->username. ' ha iniciado sesión correctamente');
				else
	        return Redirect::route('home')
	            ->with('flash_success', Auth::user()->username. ' ha iniciado sesión correctamente');
    }


    
    // Si la autenticación fallo volvemos a cargar el formulario de login
    return Redirect::route('login')
        ->with('flash_warning', 'Nombre de usuario y/o contraseña incorrecto(s)')
        ->withInput();
	}

	/**
	 * Muestra el formulario para la creación de un nuevo usuario
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('authentication.signin');
	}

/**
	 * Almacena un nuevo registro en base de datos
	 *
	 * @return Response
	 */
	public function store()
	{
		// Guardar el valor de los campos en el postback
		Input::flash();
			
		// Crear el conjunto de validaciones.
		$reglas = array(
			'username' => 'required|unique:users', 
			'password' => 'required|min:5',
			'email'    => 'required|email'
		);

		// Crear instancia del validador.
		$validador = Validator::make(Input::all(), $reglas);
		
		if ($validador->passes()) {
			$user = new User();
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->save();

			return Redirect::route('home')
				->with('flash_success', 'El usuario '.$user->username.' se registró correctamente');
		}
		else
		{
			//Se retornar los errores de validacion al formulario
			return Redirect::to('signin')
				->withErrors($validador, 'signin');
		}
	}
	/**
	 * Muestra el formulario de edición el registro solicitado
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Recupera el registro de base de datos
		$artista = User::find($id);

		//  Muestra el formulario de edición y pasa datos del registro
		return View::make('users.edit')
			->with('artista', $artista);
	}

	/**
	 * Actualizar el registro especificado en base de datos
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$artista = User::find($id);
		$artista->username = Input::get('username');
		$artista->password = Input::get('password');
		$artista->email = Input::get('email');
		$artista->save();

		return Redirect::to('/');
	}

}
?>

