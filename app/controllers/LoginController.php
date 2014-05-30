<?php

	class LoginController extends BaseController {


		public function index() {
			return View::make('login.index');
		}

		public function login() {
			$input = Input::get();
			$rules = [
				'username' => 'required',
				'password' => 'required'
			];
			$validator = Validator::make($input,$rules);

			if($validator->passes()) {
				if(Auth::attempt(['email' => $input['username'], 'password' => $input['password'], 'confirmed' => 1])) {
					switch(Auth::user()->role) {
						case $_ENV['admin_priv_level']:
						return Redirect::to('/admin');
						break;
						case $_ENV['client_priv_level']:
						return Redirect::to('/client');
						break;
					}
				}
				Session::flash( 'error', Config::get('strings.invalidCredentials') );
				return Redirect::to('/login');
			}
			else {
				Session::flash( 'error', Config::get('strings.allFieldsRequired') );
				return Redirect::to('/login');

			}
		}

		public function logout() {
			Auth::logout();
			return Redirect::to('/login');
		}
	}