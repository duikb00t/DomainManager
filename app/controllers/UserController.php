<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function createLoginForm()
	{
        return View::make('login');
	}

    public function createRegisterForm()
    {
        return View::make('register');
    }

    /**
     * Validate the login from the user.
     */
    public function validateLoginForme()
    {
        $input = Input::all();

        $input['password'] = Hash::make($input['password']);

        $rules = User::$rules_login;

        $validator = Validator::make($input,$rules);

        if($validator->fails()){

            $messages = $validator->messages();

            return Redirect::to('user/login')->withErrors($messages);

        }else{
            $userData = array(
                'email_address'  =>  Input::get('email_address'),
                'password'  =>  Input::get('password')
            );

            if(Auth::attempt($userData)) {
                if(Auth::check()){
                    //$user_id = Auth::user()->id;
                    //echo 'logged in..'. $user_id;

                    return Redirect::to('home');

                }else{
                    echo ' something went wrong while checking... ';
                }
            }else{
                echo 'something went wrong';
            }
        }
    }

    /*
     * Validate the registratoin form
     */

    public function validateRegistration ()
     {
         $input = Input::all();

         $rules = User::$rules_registration;

         $validator = Validator::make($input,$rules);

         if($validator->fails()){

             $messages = $validator->messages();
             return Redirect::to('user/register')->withErrors($messages);

         } else{
             $user = new User();
             $user->firstname = Input::get('firstname');
             $user->lastname = Input::get('lastname');
             $user->email_address = Input::get('email_address');
             $user->password = Hash::make(Input::get('password'));
             $user->confirmed = 0;

             $data = [
                 'firstname' => Input::get('firstname'),
                 'lastname' => Input::get('lastname')
             ];

             if($user->save()){
                 Mail::send('emails.confirmation', $data, function($message)
                 {

                    $message->from(getenv('DEFAULT_FROM_EMAIL_ADDRESS'), getenv('DEFAULT_FROM_NAME'));
                    $message->to(Input::get('email_address'), getenv('DEFAULT_FROM_NAME'))->subject('Welcome!');
                    return Redirect::to('user/login');

                 });

                 return Redirect::to('user/login')->with('success', 'You can now login with your account.');
             }
         }
     }



    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	public function destroy() {
        Auth::logout();
        return Redirect::to('user/login');
	}

}