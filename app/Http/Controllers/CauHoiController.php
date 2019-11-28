<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcauhoi = CauHoi::all();
        return View('Danh_Sach_Cau_Hoi',compact('listcauhoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listlinhvuc = LinhVuc::all();
        //$ls=CauHoi::all();
        return view('Them_Cau_Hoi',compact('listlinhvuc'));
 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $listcauhoi = new CauHoi();
        $listcauhoi->noi_dung = $request->input('noidung');
        $listcauhoi->linh_vuc_id = $request->input('linhvucid');
        $listcauhoi->phuong_an_a = $request->input('phuongana');
        $listcauhoi->phuong_an_b = $request->input('phuonganb');
        $listcauhoi->phuong_an_c = $request->input('phuonganc');
        $listcauhoi->phuong_an_d = $request->input('phuongand');
        $listcauhoi->dap_an = $request->input('dapan');
        $listcauhoi->save();

        return redirect('cau-hoi/them-cau-hoi');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listcauhoi = CauHoi::find($id);
        $listlinhvuc = LinhVuc::all();
        return view('Sua_Cau_Hoi',compact('listcauhoi','listlinhvuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $listcauhoi = CauHoi::find($id);
        $listcauhoi->noi_dung = $request->input('noidung');
        $listcauhoi->linh_vuc_id = $request->input('linhvucid');
        $listcauhoi->phuong_an_a = $request->input('phuongana');
        $listcauhoi->phuong_an_b = $request->input('phuonganb');
        $listcauhoi->phuong_an_c = $request->input('phuonganc');
        $listcauhoi->phuong_an_d = $request->input('phuongand');
        $listcauhoi->dap_an = $request->input('dapan');
        $listcauhoi->save();
        return redirect('cau-hoi/danh-sach-cau-hoi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listcauhoi = CauHoi::find($id);
        $listcauhoi -> delete();
        return redirect('cau-hoi/danh-sach-cau-hoi');
    }
}
