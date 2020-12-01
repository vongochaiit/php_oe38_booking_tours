<link href="{{ mix('css/client.css' )}}" rel="stylesheet">
<link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
<base href="{{ asset('') }}">
@include('client.layouts.header')
@include('client.layouts.dark')
<div class="container">
  <!-- Card -->
  <div class="card card-cascade wider reverse">
    <!-- Card image -->
    <div class="view view-cascade overlay">
      <img class="card-img-top" src="upload/{{$tour->image}}"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">
      <!-- Title -->
      <h4 class="card-title"><strong>{{$tour->name}}</strong></h4>
      <!-- Subtitle -->
      <h6 class="font-weight-bold indigo-text py-2"></h6>
      <!-- Text -->
      <p class="card-text">
        {{$tour->des}}
      </p>
      <button class="btn btn-success">{{trans('language.book_now')}}</button>
    </div>
  </div>
  <div class="col-md-12" >
    <div class="p-3 py-5">
        <div class="row mt-2">
            <div class="col-md-6">
              <label for="name"><b>{{trans('language.name')}}</b></label>
              <input type="text" class="form-control" value="{{$tour->name}}" readonly>
            </div>
            <div class="col-md-6">
              <label for="name"><b>{{trans('language.place_from')}}</b></label>
              <input type="text" class="form-control" value="{{$tour->place_from}}" readonly>
            </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-6">
            <label for="name"><b>{{trans('language.duration')}}</b></label>
            <input type="text" class="form-control" value="{{$tour->duration}}" readonly>
          </div>
          <div class="col-md-6">
            <label for="name"><b>{{trans('language.place_to')}}</b></label>
            <input type="text" class="form-control" value="{{$tour->place_to}}" readonly>
          </div>
      </div>
      <div class="row mt-2">
        <div class="col-md-6">
          <label for="name"><b>{{trans('language.price')}}</b></label>
          <input type="text" class="form-control" value="{{$tour->price}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="name"><b>{{trans('language.place_tobe')}}</b></label>
          <input type="text" class="form-control" value="{{$tour->place_tobe}}" readonly>
        </div>
      </div>
    </div>
</div>
  <!-- Card -->
</div>

@include('client.layouts.footer')
<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>
