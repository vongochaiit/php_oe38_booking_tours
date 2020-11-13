@extends('admin.layouts.master')
@section('title')
Danh sach danh muc tour
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category tour</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $value)
                        
                  
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$value->name}}</td>
                        <td>
                            @if ($value->status==1)
                                {{"Hien thi"}}
                            @else
                                {{"Khong hien thi"}}
                            @endif
                        </td>
                        <td>
                        <button class="btn btn-primary edit" ><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger delete"  ><i class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
