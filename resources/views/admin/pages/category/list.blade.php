@extends('admin.layouts.master')
@section('title')
{{trans('language.category_list')}}
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{trans('language.category_list')}}
        </h6>
    </div>
    <div class="card-body">
        @include('Common.Error')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('language.name')}}</th>
                        <th>{{trans('language.parent_category')}}</th>
                        <th>{{trans('language.action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->parent->name ?? trans('language.parent_category')}}</td>
                        <td>
                            <a href="{{route('admin.category.edit', $category->categories_id)}}"><button class="btn btn-primary edit"><i class="fas fa-edit"></i></button></a>
                            <form action="{{route('admin.category.destroy', $category->categories_id)}}" method="POST">
                                {{  csrf_field() }}
                                {{  method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>
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
