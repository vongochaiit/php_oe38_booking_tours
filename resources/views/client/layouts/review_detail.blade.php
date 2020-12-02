@extends('client.layouts.master')

@section('content')
  <div class="container">
    <!-- Card -->
    
    <div class="col-md-12 p-5">
      <h4>{{trans('language.review')}}: {{$review->tour->name}}</h4>
      <div class="content text-center p-5">
          <b>{{$review->title}}</b>
          <p class="text-justify">{{$review->content}}</p>
      </div>
      <div class="infor text-right">
          <p>{{$review->user->name}}</p>
          <p>{{$review->updated_at}}</p>
      </div>
      @can('update', $review)
        <div class="action text-right">
          <a href="#editReviewModal" data-toggle="modal"><button type="button" class="btn btn-success">{{trans('language.edit')}}</button></a>
          <form action="{{route('review.destroy', $review->cmr_id)}}" method="POST">
            {{  csrf_field()  }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">{{trans('language.delete')}}</button>
          </form>
        </div>
      @endcan
    </div>
    <div class="modal fade" id="editReviewModal">
      <div class="modal-dialog modal-lg">
        <form action="{{route('review.update', $review->cmr_id)}}" method="POST">
          {{  csrf_field()  }}
          {{ method_field('PUT') }}
          <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">{{trans('language.review_create')}}</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <div class="form-group">
                <label for="title">{{trans('language.title')}}</label>
                <input type="text" class="form-control" name="title" value="{{$review->title}}"/>
                <p class="text text-danger">{{ $errors->first('title') }}</p>

              </div>
              <div class="form-group">
                <label for="content">{{trans('language.content')}}</label>
                <textarea name="content" class="form-control" cols="30" rows="10">{{$review->content}}</textarea>
                <p class="text text-danger">{{ $errors->first('content') }}</p>
              </div>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">{{trans('language.edit')}}</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('language.close')}}</button>
            </div>
            
          </div>
        </form>
      </div>
    </div>
    <!-- Card -->
  </div>  
@endsection

