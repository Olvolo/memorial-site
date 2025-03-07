@extends('layouts.app')

@section('content-container-class', 'px-0 sm:px-0 md:px-0 lg:px-0 py-4 sm:py-6 md:py-8 max-w-none')

@section('content')
    <div class="overflow-x-auto w-full">
        @yield('table-content')
    </div>
@endsection
