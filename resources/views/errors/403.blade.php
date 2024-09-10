@extends('layouts.app')
@section('meta_title', isset($title) ? $title : '403')
@section('content')
<main>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Image -->
                    <img src="{{ static_asset('assets/images/element/error-403.jpeg')}}" class="h-200px h-md-400px mb-4" alt="">
                    <!-- Title -->
                    <h1 class="display-1 text-danger mb-0">403</h1>
                    <!-- Subtitle -->
                    <h2>Oh no, something went wrong!</h2>
                    <!-- info -->
                    <p class="mb-4">Either something went wrong or this page doesn't exist anymore.</p>
                    <!-- Button -->
                    <a href="{{url('/')}}" class="btn btn-primary mb-0">Take me to Homepage</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection