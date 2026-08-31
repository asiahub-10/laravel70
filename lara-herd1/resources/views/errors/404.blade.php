@extends('layouts.single-page')

@section('content')
    <div class="text-center">
        <h1 class="text-danger display-1 fw-bold">404</h1>
        <h6 class="fs-2 mb-4">Page not found</h6>
        <x-btn href="/" class="btn-dark btn-sm">
            Back to Home Page
        </x-btn>
    </div>
@endsection
