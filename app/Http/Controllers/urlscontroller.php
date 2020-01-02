<?php

namespace App\Http\Controllers;
use App\urls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class urlscontroller extends Controller
{
     public function create()
   {
   		return view('page.form');
   }
   public function store(Request $request)
   {
   			/*$url = $request->url;*/
		   	/*$url = request('url');*/
		   	$this->validate($request, ['url' => 'required|url']);
		   	$record = $this->getRecordForUrl($request->url);
		   	return view('page.resulta')->withShortened($record->shortened)->withUrl($record->url);

			/*Validator::make(compact('url'), ['url' => 'required|url'])->validate();

			$row = urls::whereUrl(request('url'))->first();

			if ($row) {
				return view('page.resulta')->withShortened($row->shortened)->withUrl($row->url);
			}
			$cree = urls::create([
				'url' => request('url'),
				'shortened' => urls::shorter()
			]);
			if ($cree) {
			return	view('page.resulta')->withShortened($cree->shortened)->withUrl($cree->url);
				
			}*/
			
   }
   public function show($shortened)
   {
   	
		$url = urls::whereShortened($shortened)->firstOrfail();
		/*if (!$url) {
			return redirect('/form');
		}*/

		return redirect($url->url);
	}
	private function getRecordForUrl($url)
	{


			/*$record = urls::whereUrl(request('url'))->first();

			if ($record) {
				return $record;
			}
			return urls::create([
				'url' => request('url'),
				'shortened' => urls::shorter()
			]);*/
			return urls::whereUrl(request('url'))->firstOrcreate([
				'url' => request('url'),
				'shortened' => urls::shorter()
			]);
	}
}
