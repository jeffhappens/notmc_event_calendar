<?php

	class AdminController extends BaseController {

		public function index() {
			$data = array(
				'users' => User::get()
			);
			return View::make('admin.index',$data);
		}

	}