@extends('Admin')
@section('maincontent') 
  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Basic Data Table</h4>
                                <p class="text-muted font-13 mb-4">
                                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                    function:
                                    <code>$().DataTable();</code>.
                                </p>
                          <div class="form-group mb-4">
                                <a href="{{Route('them-moi')}}">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Thêm Lĩnh Vực</button>
                                 </a>
                           </div>

                                <table id="basic-datatable" class="table dt-responsive nowrap">

                                    <thead>

                                        <tr>
                                            <th>Id</th>
                                            <th>Tên Lĩnh Vực</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        @foreach($listLinhVuc as $ds)
                                        <tr>
                                            <td>{{ $ds->id }}</td>
                                            <td>{{ $ds->ten_linh_vuc }}</td>
                                            <td>
                                                    <a href="{{route('sua-lv',['id'=>$ds->id])}}">
                                                    <button  type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                                    </a>
                                                    <a href="{{ route('xoa-linh-vuc',['id' => $ds->id]) }} ">
                                                     <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                                                     </a>
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