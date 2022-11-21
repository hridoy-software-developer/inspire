<?php

namespace Sirbizz\SoftwareLab;	

use Illuminate\Http\Request;

class SoftwareLabController {
	public function index(){
		$quote = "Cool Package Development 😊";
		return $quote;
	}
}