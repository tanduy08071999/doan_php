@extends('Admin')
@section('maincontent')
<div class="row">
<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3 header-title">@if(isset($nguoiChoi)) Cập nhật @else Thêm @endif Người Chơi </h4>
            @if(isset($nguoiChoi))
            <form action="{{ route('nguoi-choi.xl-cap-nhat', ['id'=>$nguoiChoi->id]) }}" method="POST"> 
            @else
            <form action="{{ route('nguoi-choi.xl-them-moi') }}" method="POST"> 
            @endif
            	@csrf
                <div class="form-group">
                    <label for="ten_dang_nhap">Tên Đăng Nhập</label>
                    <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" @if(isset($nguoiChoi)) value="{{$nguoiChoi->ten_dang_nhap}}" @endif>
                    <label for="ten_dang_nhap">Mật Khẩu</label>
                    <input type="password" class="form-control" id="mat_khau" name="mat_khau" @if(isset($nguoiChoi)) value="{{$nguoiChoi->mat_khau}}" @endif>
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" @if(isset($nguoiChoi)) value="{{$nguoiChoi->email}}" @endif>
                    <label for="diem_cao_nhat">Điểm Cao Nhất</label>
                    <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" @if(isset($nguoiChoi)) value="{{$nguoiChoi->diem_cao_nhat}}" @endif>
                    <label for="credit">Credit</label>
                    
                    
                    
                    <input type="text" class="form-control" id="credit" name="credit" @if(isset($nguoiChoi)) value="{{$nguoiChoi->credit}}" @endif>

                </div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">@if(isset($nguoiChoi)) Cập nhật @else Thêm @endif</button>
            </form>

        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end col -->



</div>
<!-- end row -->
@endsection

