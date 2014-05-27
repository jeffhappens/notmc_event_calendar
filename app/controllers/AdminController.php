<?php

	class AdminController extends BaseController {

		public function index() {
			return View::make('admin.index');
		}

		public function showUsers() {
			return View::make('admin.users.index');
		}
	}