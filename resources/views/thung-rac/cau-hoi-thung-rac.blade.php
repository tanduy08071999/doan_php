@extends('Admin')
@section('maincontent')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách Câu Hỏi</h4>
                <br>
                <table id="goi-credit-table" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Tên Lĩnh vực</th>
                            <th>Phương Án A</th>
                            <th>Phương Án B</th>
                            <th>Phương Án C</th>
                            <th>Phương Án D</th>
                            <th>Đáp Án</th>
                            <th></th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($listCauHoi as $ds)
                        <tr>
                            <td>{{ $ds->id }}</td>
                            <td>{{ $ds->noi_dung }}</td>
                            <td>{{ $ds->linh_vuc_id }}</td>
                            <td>{{ $ds->phuong_an_A }}</td>
                            <td>{{ $ds->phuong_an_B }}</td>
                            <td>{{ $ds->phuong_an_C }}</td>
                            <td>{{ $ds->phuong_an_D }}</td>
                            <td>{{ $ds->dap_an }}</td>
                            <td>
                                <a href="{{ route ('cau-hoi-trash.khoi-phuc',['id' => $ds->id]) }}" 
                                class="btn btn-success waves-effect waves-light">
                                <i class="mdi mdi-grease-pencil"></i></a>
                                
                                <a href="{{ route ('cau-hoi-trash.xoa',['id' => $ds->id]) }}" class="btn btn-danger waves-effect waves-light">
                                <i class="mdi mdi-trash-can-outline"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $("#goi-credit-table").DataTable({
            language:{
                paginate:{
                previous:"<i class='mdi mdi-chevron-left'>",
                next:"<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback:function(){
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });
    });
</script>
@endsection