<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class FormController extends Controller
{
    public function firstSubmit(Request $request) {

    	$superMarket = $request['superMarket'];
    	$visit = new Visit();
    	$visit->super_market = $superMarket;
    	$visit->telephone_no = 0752033023;
    	$visit->age = 22;
    	$visit->save();
    	echo $superMarket;

    	return view('2');
    }
}
