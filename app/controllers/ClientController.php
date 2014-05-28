<?php

	class ClientController extends BaseController {

		public function index() {

			$data = [
				'venues' => Venue::join('fyn_users','fyn_users.id','=','Venues.ownerId')
					->join('Locations','Locations.LocationID','=','Venues.id')
					->get()
			];

			return View::make('client.index', $data);
			
		}

	}