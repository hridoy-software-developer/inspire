<?php

namespace Sirbizz\SoftwareLab\Controllers;	

use Illuminate\Http\Request;

class InspirationController {
	public function index(){
		$quote = "Cool Package Development 😊";
		return view('vue::index', compact('quote'));
	}
}

