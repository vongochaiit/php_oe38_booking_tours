<!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>{{trans('language.signin')}}</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <form action="{{route('login')}}" method="POST">
        {{ csrf_field() }}
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="text" name="username" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">{{trans('language.username')}}</label>
          <p class="help is-danger">{{ $errors->first('username') }}</p>
        </div>

        <div class="md-form pb-3">
          <input type="password" name="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">{{trans('language.password')}}</label>
          <p class="font-small blue-text d-flex justify-content-end">{{trans('language.forgot')}} <a href="#" class="blue-text ml-1">
            {{trans('language.password')}}?</a></p>
              <p class="help is-danger">{{ $errors->first('password') }}</p>
        </div>
        <div class="md-form pb-3">
          @include('Common.Error')
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" id="remember">
          <label class="custom-control-label" for="remember">{{trans('language.remember_me')}}</label>
        </div>
        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">{{trans('language.signin')}}</button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> {{trans('language.or_Sign_in_with')}}:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a">
            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary">Facebook</a>
          </button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a">
            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary">Google</a>
          </button>
        </div>
      </div>
      </form>
      <!--Footer-->

    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
