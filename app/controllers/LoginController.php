<?php

	class LoginController extends BaseController {


		public function index() {
			return View::make('login.index');
		}

		public function login() {

		}

		public function logout() {
			Auth::logout();
			return Redirect::to('/login');
		}

	}