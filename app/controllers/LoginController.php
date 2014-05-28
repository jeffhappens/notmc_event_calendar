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
				if(Auth::attempt(['email' => $input['username'], 'password' => $input['password']])) {
					switch(Auth::user()->role) {
						case 64:
						return Redirect::to('/admin');
						break;
						case 32:
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