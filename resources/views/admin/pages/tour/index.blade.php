@extends('admin.layouts.master')
@section('title')
{{trans('language.list_tour')}}
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category tour</h6>
    </div>
    <div class="card-body">
        @include('Common.Error')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('language.name')}}</th>
                        <th>{{trans('language.place_from')}}</th>
                        <th>{{trans('language.place_to')}}</th>
                        <th>{{trans('language.duration')}}</th>
                        <th>{{trans('language.price')}}</th>
                        <th>{{trans('language.category')}}</th>
                        <th>{{trans('language.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $key => $tour)                  
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$tour->name}}</td>
                        <td>{{$tour->place_from}}</td>
                        <td>{{$tour->place_to}}</td>
                        <td>{{$tour->duration}}</td>
                        <td>{{$tour->price}}</td>
                        <td>{{$tour->category->name}}</td>
                        <td>
                            <a href="{{route('admin.tour.edit',$tour->tour_id)}}"><button class="btn btn-primary edit" ><i class="fas fa-edit"></i></button></a>
                            <form action="{{route('admin.tour.destroy',$tour->tour_id)}}" method="POST">
                                {{  csrf_field() }}
                                {{  method_field('DELETE')  }}
                                <button type = "submit" class="btn btn-danger delete"  ><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
