@if (Session::has('Error'))
    <div>
        <p class="text text-danger">{{ Session::get('Error') }}</p>
    </div>
@endif
