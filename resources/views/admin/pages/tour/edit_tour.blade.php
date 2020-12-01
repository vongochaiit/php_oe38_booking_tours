@extends('admin.layouts.master')
@section('title')
{{trans('language.list_tour')}}
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{trans('language.tour')}}</h6>
    </div>
    <div class="row" style="margin: 5px">
        <div class="col-lg-12">
            <form action="{{route('admin.tour.update',$tour->tour_id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="name">{{trans('language.name')}}:</label><br/>
                  <input type="text" class="form-control" value="{{ $tour->name }}" name="name">
                    <p class="text text-danger">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                  <label for="place_from">{{trans('language.place_from')}}:</label><br/>
                  <input type="text" class="form-control" value="{{ $tour->place_from }}" name="place_from">
                  <p class="text text-danger">{{ $errors->first('place_from') }}</p>

                </div>
                <div class="form-group">
                    <label for="place_to">{{trans('language.place_to')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->place_to }}" name="place_to">
                    <p class="text text-danger">{{ $errors->first('place_to') }}</p>
                </div>
                <div class="form-group">
                    <label for="place_tobe">{{trans('language.place_tobe')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->place_tobe }}" name="place_tobe">
                    <p class="text text-danger">{{ $errors->first('place_tobe') }}</p>
                </div>
                <div class="form-group">
                    <label for="duration">{{trans('language.duration')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->duration }}" name="duration">
                    <p class="text text-danger">{{ $errors->first('duration') }}</p>
                </div>
                <div class="form-group">
                    <label for="price">{{trans('language.price')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->price }}" name="price">
                    <p class="text text-danger">{{ $errors->first('price') }}</p>
                </div>
                <div class="form-group">
                    <label for="hotel_star">{{trans('language.hotel_star')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->hotel_star }}" name="hotel_star">
                    <p class="text text-danger">{{ $errors->first('hotel_star') }}</p>
                </div>
                <div class="form-group">
                    <label for="des">{{trans('language.des')}}:</label><br/>
                    <textarea name="des" rows="4" cols="50">{{ $tour->des }}</textarea>
                    <p class="text text-danger">{{ $errors->first('des') }}</p>
                </div>
                <div class="form-group">
                    <label for="quantity_people">{{trans('language.quantity_people')}}:</label><br/>
                    <input type="text" class="form-control" value="{{ $tour->quantity_people }}" name="quantity_people">
                    <p class="text text-danger">{{ $errors->first('quantity_people') }}</p>
                </div>
                <div class="form-group">
                    <label for="category">{{trans('language.category')}}:</label><br/>
                    <select name="category_id">
                        <option value="0">{{trans('language.parent_category')}}</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->categories_id}} "
                                @if ($category->categories_id == $tour->category_id)
                                    selected = "selected"
                                @endif
                                >{{$category->name}}</option>
                        @endforeach
                    </select>
                    <p class="text text-danger">{{ $errors->first('category_id') }}</p>
                </div>
                <div class="form-group">
                    <label for="image"> {{trans('language.image')}}:</label><br/>
                    <img src="/upload/{{ $tour->image ?? 'default.jpg' }}"/>
                    <input type="file" class="form-control" name="image">
                    <p class="text text-danger">{{ $errors->first('image') }}</p>
                </div>
                <button type="submit" class="btn btn-primary">{{trans('language.create')}}</button>
              </form>
        </div>
    </div>
</div>    
@endsection
