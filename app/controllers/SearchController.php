<?php

	class SearchController extends BaseController {

		public function index() {
			return View::make('search.index');
		}

		public function search() {
			$query = Input::get('search');
			$data = [
				'query' => $query,
				'results' => DB::table('Locations')->whereRaw("MATCH(LocationName1,ShortDescription) AGAINST(? IN BOOLEAN MODE)", array($query))->get(['LocationName1','ShortDescription'])
			];
			return View::make('search.results', $data);
		}
	}