<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditController extends Controller
{
	public function layDanhSach(){
		$listGoiCredit = GoiCredit::all()->random(3);
    	$result = [
    		'success' => true,
    		'data' => $listGoiCredit
    	];

    	return response()->json($result);
	}
}
