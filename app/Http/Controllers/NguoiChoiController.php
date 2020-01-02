<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Session;
use illuminate\support\Facades\Validator;
use App\NguoiChoi;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$xoa = 0;
        $listNguoiChoi = NguoiChoi::all();
        //return view('LinhVuc.ds_linh_vuc',compact('linhVuc'); 

        return view('Danh_Sach_Nguoi_Choi', compact('listNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$thongBao = 0;
        //return view('LinhVuc.them-moi-linh-vuc',compact('thongBao'));
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoiChoi = new NguoiChoi;
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->email = $request->email;
        $nguoiChoi->mat_khau = $request->mat_khau;
        $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        $nguoiChoi->credit = $request->credit;
        $nguoiChoi->hinh_dai_dien = 'avarta.jpg';
        $nguoiChoi->save();
        return redirect()->route('nguoi-choi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        return view('form', compact('nguoiChoi'));
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
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = $request->mat_khau;
        $nguoiChoi->email = $request->email;
        $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        $nguoiChoi->credit = $request->credit;
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->delete();
        
        return redirect()->route('nguoi-choi.danh-sach');
    }
    
    public function forceDelete($id)
    {
        $nguoiChoi = NguoiChoi::onlyTrashed()->find($id);
        $nguoiChoi->forceDelete();
        return redirect()->route('nguoi-choi-trash.danh-sach');
    }
    public function restore($id)
    {
        $nguoiChoi = NguoiChoi::onlyTrashed()->get()->find($id);
        $nguoiChoi->restore();
        return redirect()->route('nguoi-choi-trash.danh-sach');
    }
    public function onlyTrashed()
    {
        $listNguoiChoi = NguoiChoi::onlyTrashed()->get();
        return view('thung-rac.thung-rac-nguoi-choi', compact('listNguoiChoi'));
    }
}