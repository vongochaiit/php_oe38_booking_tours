@extends('admin.layouts.master')
@section('title')
{{trans('language.category_list')}}
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </div>
    <div class="row" style="margin: 5px">
        <div class="col-lg-12">
            <form role="form" action="{{route('admin.category.store')}}" method="post">
                {{ csrf_field() }}
                <fieldset class="form-group">
                    <label>{{trans('language.category')}}</label>
                    <input class="form-control" name="name">
                </fieldset>
                <div class="form-group">
                    <label>{{trans('language.parent_category')}}</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">{{trans('language.parent_category')}}</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->categories_id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">{{trans('language.create')}}</button>
            </form>
        </div>
    </div>
</div>    
@endsection


