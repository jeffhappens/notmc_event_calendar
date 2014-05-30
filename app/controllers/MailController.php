<?php

	class MailController extends BaseController {

		public function index() {
			$data = [
				'message' => 'hi there'
			];
			Mail::send('emails.welcome', $data, function($message) {
				$message->to($_ENV['test_email_address'])->subject('This is a test subject');
			});
		}

	}