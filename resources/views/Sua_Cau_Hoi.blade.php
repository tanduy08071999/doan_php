@extends('Admin')
@section('maincontent')
	<div class="col-lg-12">

                        <div class="card-box">
                            <h4 class="header-title">Sữa Câu Hỏi</h4>
                            <p class="sub-header">
                                
                            </p>

                            <form action="{{route('sua-ch-xl',['id'=>$listcauhoi->id])}}" class="parsley-examples" novalidate="" method="post">
                            	{{ @csrf_field() }}
                                <div class="form-group">
                                    <label for="userName">Nội Dung<span class="text-danger">*</span></label>
                                    <input type="text" value="{{$listcauhoi->noi_dung}}" name="noidung" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                              
                                <div class="form-group mt-1 dropdown bootstrap-select">
                                   <label for="userName">Lĩnh Vực<span class="text-danger">*</span></label>
                                    <select  name= "linhvucid"  class="selectpicker col-12" data-style="btn-light">
                                        @foreach($listlinhvuc as $ds)
                                        <option value="{{$listlinhvuc->id}}" >{{$listlinhvuc->ten_linh_vuc}}</option>
                                        @endforeach
                                    </select>
                             	</div>
                  	           	<div>
                             		 <label for="userName">Phương án A<span class="text-danger">*</span></label>
                                    <input type="text"  value="{{$listcauhoi->phuong_an_a}}" name="phuongana" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                                    <label for="userName">Phương án B<span class="text-danger">*</span></label>
                                    <input type="text"  value="{{$listcauhoi->phuong_an_b}}" name="phuonganb" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                                    <label for="userName">Phương án C<span class="text-danger">*</span></label>
                                    <input type="text"  value="{{$listcauhoi->phuong_an_c}}" name="phuonganc" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                                    <label for="userName">Phương án D<span class="text-danger">*</span></label>
                                    <input type="text"  value="{{$listcauhoi->phuong_an_d}}" name="phuongand" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                                    <label for="userName">Đáp Án<span class="text-danger">*</span></label>
                                    <input type="text"  value="{{$listcauhoi->dap_an}}" name="dapan" parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                             	</div>
                                  


                               </div>
                           
                                <div class="form-group">
                                    <div class="checkbox checkbox-purple">
                                        <input id="checkbox6a" type="checkbox" data-parsley-multiple="checkbox6a">
                                        <label for="checkbox6a">
                                            Remember me
                                        </label>
                                    </div>

                                </div>

                                <div class="form-group text-left mb-0">
                                    
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Add
                                    </button>
                                   <a href="{{route('ds-cauhoi')}}">
                                    <button type="button" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </a>
                                </div>

                            </form>
                        </div> <!-- end card-box -->
                    </div>
@endsection