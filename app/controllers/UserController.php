<?php

class UserController extends BaseController
{

	
	public function create()
	{
		return View::make('authentication.signin');
	}


	public function store()
	{
		$filename='';

		if(Input::hasFile('photo'))
		{
			$destinatonPath = '';
      		$file = Input::file('photo');
    	 	    		
    	
    		
    		$filename = $file->getClientOriginalName();
		 
		 	$destinationPath = public_path().'/img/ProfilePhotos/';
			
			$uploadSuccess= $file -> move($destinationPath,$filename);
		}
		else
		{
			$filename='User.png';
		}
			

		

		Input::flash();
			
		
		// Crear el conjunto de validaciones.
		$reglas = array(
			'username' => 'required|unique:users', 
			'name'     => 'required',
			'lastname' => 'required',
			'password' => 'required|min:5',
			'repassword'=>'required|same:password',
			'email'    => 'required|email|unique:users',
			'phone'   => 'numeric'

		);

		// Crear instancia del validador.
		$validador = Validator::make(Input::all(), $reglas);
		
		if ($validador->passes()) {
			$user = new User();
			$user->username = Input::get('username');
			$user->name = Input::get('name');
			$user->lastname = Input::get('lastname');
			$user->photo =  $filename;
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->gender = Input::get('optionsRadios');
			$user->phone = Input::get('phone');
			$user->location = Input::get('location');
			$user->save();

			return Redirect::route('home')
				->with('flash_success', 'You has create a new account ¡Congragulations! '.' '.$user->username);
		}
		else
		{
			return Redirect::to('signin')
				->withErrors($validador, 'signin');
		}
	
	}

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


		if(Auth::attempt($user))
		{
			$url_intended = Session::pull('url.intended', false);
				if ($url_intended)
	        return Redirect::to($url_intended)
	            ->with('flash_success','Welcome '.' '.Auth::user()->username);
				else
	        return Redirect::route('profile')
	            ->with('flash_success','Welcome'.' '.Auth::user()->username);

		}

		
	}
	public function edit()
	{
		return View::make('user.edit');
	}
	public function update()
	{
		
		Input::flash();
	
		$filename='';

		if(Input::hasFile('photo'))
		{
			$destinatonPath = '';
      		$file = Input::file('photo');
    	 	    		
    	
    		
    		$filename = $file->getClientOriginalName();
		 
		 	$destinationPath = public_path().'/img/ProfilePhotos/';
			
			$uploadSuccess= $file -> move($destinationPath,$filename);
		

			$reglas = array(
			'username' => 'required|unique:users', 
			'name'     => 'required',
			'lastname' => 'required',
			'password' => 'required|min:5',
			'repassword'=>'required|same:password',
			'phone'   => 'numeric'
			);

			$validador = Validator::make(Input::all(), $reglas);
		
			if ($validador->passes()) 
			{
				
				$id=Auth::User()->id;
				$user = User::find($id);

				
				$user->username = Input::get('username');
				$user->name = Input::get('name');
				$user->lastname = Input::get('lastname');
				$user->photo =  $filename;
				$user->password = Hash::make(Input::get('password'));			
				$user->gender = Input::get('optionsRadios');
				$user->phone = Input::get('phone');
				$user->location = Input::get('location');
				$user->save();

				return Redirect::route('profile')
	            ->with('flash_success','your information data was edited');
				
			}
			else
			{
				return Redirect::to('edit')
				->withErrors($validador, 'edit');
			}
		
		}
		else
		{
			$reglas = array(
			'username' => 'required|unique:users', 
			'name'     => 'required',
			'lastname' => 'required',
			'password' => 'required|min:5',
			'repassword'=>'required|same:password',
			'phone'   => 'numeric'
			);

			$validador = Validator::make(Input::all(), $reglas);
		
			if ($validador->passes()) 
			{
				
				
				$id=Auth::User()->id;
				$user = User::find($id);


				$user->username = Input::get('username');
				$user->name = Input::get('name');
				$user->lastname = Input::get('lastname');
				
				$user->password = Hash::make(Input::get('password'));			
				$user->gender = Input::get('optionsRadios');
				$user->phone = Input::get('phone');
				$user->location = Input::get('location');
				$user->save();

				return Redirect::route('profile')
	            ->with('flash_success','your information data was edited');
				
			}
			else
			{


				return Redirect::to('edit')
				->withErrors($validador, 'edit');
			}
		}

	}
	public function delete()
	{
		$id=Auth::User()->id;
		$user = User::find($id);
		$user->delete();

		Auth::logout();
		return Redirect::route('home')->with('flash_info', 'bye bye');

		
	}
	
	

}
?>

