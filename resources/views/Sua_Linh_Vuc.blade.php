@extends('Admin')
@section('maincontent')
<div class="col-lg-12">

                        <div class="card-box">
                            <h4 class="header-title">Sữa lĩnh vực</h4>
                            <p class="sub-header">
                                
                            </p>

                            <form action="{{Route('update-linhvuc',['id'=>$listlinhvuc->id])}}" class="parsley-examples" novalidate="" method="post">
                                {{ @csrf_field() }}
                                <div class="form-group">
                                    <label for="userName">User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="nick" value = "{{$listlinhvuc->ten_linh_vuc}}"parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
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
                                        Sửa
                                    </button>
                                    <a href="{{route('danh-sach')}}">
                                    <button type="button" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </a>
                                </div>

                            </form>
                        </div> <!-- end card-box -->
                    </div>
@endsection