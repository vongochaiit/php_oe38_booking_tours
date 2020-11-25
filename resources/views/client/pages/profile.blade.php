<link href="{{ mix('css/client.css' )}}" rel="stylesheet">
<link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
<base href="{{ asset('') }}">
@include('client.layouts.header')
<form enctype="multipart/form-data" method="post" action="{{route('user.update',$user->user_id)}}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="form-group">
                    <img  class="rounded-circle mt-5 profile" src="{!! (" /images/$user->image") !!}"  >
                    <input name="image" type="file" class="">
                    <div class="">@lang('language.image')</div>
                </div>
                <div class="input-group">
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <a href="{{route('home.index')}}">@lang('language.back')</a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" placeholder="Username" readonly value="{{( $user->username)}}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" required value="{{( $user->name)}}" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" readonly placeholder="Email" value="{{( $user->email)}}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" required placeholder="Phone" value="{{( $user->phone)}}">
                        </div>
                       
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="address" required placeholder="address" value="{{( $user->address)}}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="password" required placeholder="@lang('language.password')">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="new_pass" required placeholder="@lang('language.new_pass')" value="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="confim_pass" required placeholder="@lang('language.confim_pass')">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="@lang('language.update')">
            </div>
        </div>
    </div>
</form>
<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>
