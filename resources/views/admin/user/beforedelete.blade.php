@extends('layouts.app')

@section('content')
    <h1 class="mt-5 pt-5 text-center">{{ __('app.Remove this member ?') }}</h1>
    <div class="text-center mt-4 pt-4">
        <a type="button" class="btn btn-danger btn-lg mr-2"
           href="{{route('admin.user.softdelete', ['user' => $user])}}">{{ __('app.Yes') }}</a>
        <a type="button" class="btn btn-secondary btn-lg ml-2" href="{{ route('user.index') }}">{{ __('app.No') }}</a>
    </div>
@endsection