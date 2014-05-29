<?php

	class VenueController extends BaseController {


		public function index($id) {

			$data = [
				'venues' => Venue::where('LocationID','=',$id)->get()
			];

			return View::make('venues.index', $data);
		}

	}