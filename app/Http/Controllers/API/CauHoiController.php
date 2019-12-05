<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;

class CauHoiController extends Controller
{
   public function layCauHoi($id)
    {
    	$cauHoi = CauHoi::where('linh_vuc_id', $id)->get()->random(1);
    	$result = [
    		'success' => true,
    		'data' => $cauHoi
    	];

    	return response()->json($result);
    }

    public function layCH($id)
    {
        $cauHoi = CauHoi::find($id);
        $result = [
            'success' => true,
            'data' => $cauHoi
        ];

        return response()->json($result);
    }

}
