<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    $listNguoiChoi = NguoiChoi::all()->random(3);
    	$result = [
    		'success' => true,
    		'data' => $listNguoiChoi
    	];

    	return response()->json($result);
}
