
@extends('layouts.layout')

@section('welcome')
<title>HomePage</title>
<link rel="icon" type="image/x-icon" href="/public/logo.ico">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
{{--            @if (Route::has('login'))--}}
{{--                <div class="block fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="text-white text-5xl my-5">Welcome to the Home Page</div>
           <div class="bg-white mx-auto text-lg p-6 hover:rounded-2xl transition-all ">
               <a href="{{url('/testimonial')}}" class="">Testimonial Page</a>
           </div>
        </div>
{{--        <div class="absolute bottom-10 right-10 max-w-5xl text-white bg-gray-700 px-5 py-2">This is made with LARAVEL.</div>--}}
    </div>
</div>
@endsection
