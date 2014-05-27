<?php

	class AdminController extends BaseController {

		public function index() {

			$data = array(
				'users' => User::get(),
				'venues' => Venue::join(
					'Locations','Locations.LocationID','=','Venues.id'
				)->join(
					'Events','Venues.id','=','Events.venueId'
				)->join('EventDates','EventDates.event_id','=','Events.venueid')
				->get()
			);
			return View::make('admin.index',$data);
		}

	}