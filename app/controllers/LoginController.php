<?php

	class LoginController extends BaseController {


		public function index() {
			return View::make('login.index');
		}

		public function login() {
			$input = Input::get();
			$rules = [
				'usenrame' => 'required',
				'password' => 'required'
			];
			$validator = Validator::make($input,$rules);
			if($validator->passes()) {
				if(Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
					return 'OK';
				}
				Session::flash('error','Auth Failed');
				return Redirect::to('/login');
			}
			else {
				Session::flash('error','Validation Failed');
				return Redirect::to('/login');

			}
		}

		public function logout() {
			Auth::logout();
			return Redirect::to('/login');
		}

	}