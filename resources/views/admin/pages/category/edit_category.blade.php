@extends('admin.layouts.master')
@section('title')
{{trans('language.category_edit')}}
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{trans('language.category_edit')}}
        </h6>
    </div>
    <div class="card-body">
        <form action="{{route('admin.category.update',[$cate->categories_id])}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="name">{{trans('language.name')}}</label><br/>
            <input type="text" name="name" value="{{$cate->name}}"><br/>
            <p class="help is-danger">{{ $errors->first('name') }}</p>
            <label for="category">{{trans('language.parent_category')}}</label><br/>
            <select name="parent_id">
                <option value="0" @if ($cate->parent_id == 0)
                    selected = "selected"
                @endif>{{trans('language.parent_category')}}</option>
                @foreach ($categories as $category)
                    <option value="{{$category->categories_id}}" @if ($category->categories_id == $cate->parent_id)
                        selected = "selected"
                    @endif>{{$category->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Update">
        </form>
    </div>
</div>
@endsection
