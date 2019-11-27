<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LinhVuc;
use Illuminate\Support\Facades\Auth;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user();
        $listLinhVuc = LinhVuc::all();
        return view('linhvuc_content',compact('listLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLinhVuc = LinhVuc::all();
        return view('Them_Linh_Vuc',compact('listLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tenLinhVuc = new LinhVuc;
        $tenLinhVuc->ten_linh_vuc = $request->input('nick');
        $tenLinhVuc->save();
        
       return redirect('linh-vuc/danh-sach-linh-vuc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listlinhvuc = LinhVuc::find($id);
        return view('Sua_Linh_Vuc',compact('listlinhvuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
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
        $linhvuc = LinhVuc::find($id);
        $linhvuc->ten_linh_vuc = $request->input('nick');
        $linhvuc->save();

        return redirect('linh-vuc/danh-sach-linh-vuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();
        
        return redirect('linh-vuc/danh-sach-linh-vuc');
    }
}
