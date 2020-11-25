@extends('admin.layouts.master')

@section('title')
    Admin
@endsection
	
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List user</title>
	<link href="{{ mix('css/client.css' )}}" rel="stylesheet">
    <link href="{{ mix('fonts/font-awe.css' )}}" rel="stylesheet">
    <base href="{{ asset('') }}">
	<script type="text/javascript" src="{{ mix('js/client.js') }}"></script>
</head>
<body>
    <div class="row container">
        <table class="table table-hover ">
            <thead style="text-align: center;">
                <tr class="table table-bordered table-danger">
                    <th>#</th>
                    <th>@lang('language.name')</th>
                    <th>@lang('language.username')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $key => $value)
                <tr class="table table-bordered ">
                    <td class="">{{ ++$key }}</td>
                    <td class="">{{ $value->name }}</td>
                    <td class="">{{ $value->username }}</td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
</body>
</html>	
<div class="d-flex justify-content-center">{{ $user->links() }}</div>
@endsection
