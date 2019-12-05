@extends('Admin')
@section('maincontent')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Key Data Table</h4>
                                <p class="text-muted font-13 mb-4">
                                    KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual
                                    cells, columns, rows or all cells.
                                </p>
                                <div class="form-group mb-4">
                                <a href="{{route('them-cauhoi')}}">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">Thêm Câu Hỏi</button>
                                 </a>
                           </div>
                                <table id="key-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nội Dung</th>
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
                                    		@foreach($listcauhoi as $ds)
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
                                                    <a href="{{route('sua-ch',['id'=>$ds->id])}}">
                                                    <button  type="button" class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-pencil"></i></button>
                                                    </a>
                                                    <a href="{{ route('xoa-ch',['id'=> $ds->id])}}">
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