<?php

	class RegisterController extends BaseController {

		// Return register view
		public function index() {
			return View::make('register.index');
		}

		// Register the user
		public function register() {
			$input = Input::get();
			$confirmation_token = str_random(40);
			$rules = [
				'email' => 'required',
				'password' => 'required'
			];
			$validator = Validator::make($input,$rules);
			if($validator->passes()) {
				// Check if email already exists
				$existing = User::where('email','=',$input['email'])->count();
				if($existing > 0) {
					Session::flash('error', Config::get('strings.emailAlreadyExists'));
					return Redirect::back();
				}
				else {
					// Create a temporary user in the DB
					$user = new User;
					$user->email = $input['email'];
					$user->pass = Hash::make($input['password']);
					$user->confirmation_token = $confirmation_token;
					$user->timestamps = true;
					$user->save();
					// Send out the confirmation email
					$data = [
						'token' => $confirmation_token,
						'email' => Input::get('email')
					];
					Mail::send('emails.registerConfirmation', $data, function($message) {
						$message->to(Input::get('email'))->subject('Please verify your acount');
					});
				}
			}
			else {
				Session::flash('error', Config::get('strings.allFieldsRequired') );
				return Redirect::back();
			}
		}

		public function verify($email,$token) {
			$status = User::where('email','=',$email)->where('confirmation_token','=',$token)->count();
			if($status > 0) {
				$user = User::where('email','=',$email)->first();
				if(strtotime($user->created_at) + $user->confirmation_token_ttl < time()) {
					$user->delete();
					return View::make('register.tokenExpired');
				}
				$user->role = 32;
				$user->confirmation_token = NULL;
				$user->confirmation_token_ttl = NULL;
				$user->confirmed = 1;
				$user->save();
				return View::make('register.success');
			}
		}
	}