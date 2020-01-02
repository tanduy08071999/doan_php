<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Session;
use illuminate\support\Facades\Validator;
use App\GoiCredit;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listGoiCredit = GoiCredit::all();
        return view('goicredit', compact('listGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listGoiCredit = GoiCredit::all();
        return view('formcredit',compact('listGoiCredit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goiCredit = new GoiCredit;
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goiCredit = GoiCredit::find($id);
        return view('goi-credit.formcredit', compact('goiCredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $goiCredit = GoiCredit::find($id);
        return view('formcredit', compact('goiCredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();

        return redirect()->route('goi-credit.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();

        return redirect()->route('goi-credit.danh-sach');
    }
    public function forceDelete($id)
    {
        $goiCredit = GoiCredit::onlyTrashed()->find($id);
        $goiCredit->forceDelete();
        return redirect()->route('goi-credit-trash.danh-sach');
    }
    public function restore($id)
    {
        $goiCredit = GoiCredit::onlyTrashed()->get()->find($id);
        $goiCredit->restore();
        return redirect()->route('goi-credit-trash.danh-sach');
    }
    public function onlyTrashed()
    {
        $listGoiCredit = GoiCredit::onlyTrashed()->get();
        return view('thung-rac.credit-thung-rac', compact('listGoiCredit'));
    }
}
