<?php

use Illuminate\Database\Seeder;
use App\NguoiChoi;

class ThemNguoiChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themNguoiChoi = NguoiChoi::create(
        	['ten_dang_nhap'=> 'hangtanduy', 'mat_khau'=> '123456', 'email'=> 'duycuoi@gmail.com', 'hinh_dai_dien'=> 'null', 'diem_cao_nhat'=> 0, 'credit'=> 1000]
        );
        $themNguoiChoi = NguoiChoi::create(
        	['ten_dang_nhap'=> 'vothanhngoc', 'mat_khau'=> '123456789', 'email'=> 'ngoctrai@gmail.com', 'hinh_dai_dien'=> 'null', 'diem_cao_nhat'=> 0, 'credit'=> 2000]
        );
         $themNguoiChoi = NguoiChoi::create(
        	['ten_dang_nhap'=> 'nguyendanghoanganh', 'mat_khau'=> '12345678910', 'email'=> 'anhyeu@gmail.com', 'hinh_dai_dien'=> 'null', 'diem_cao_nhat'=> 0, 'credit'=> 3000]
        );

    }    
}