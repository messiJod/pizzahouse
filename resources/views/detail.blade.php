@extends('layouts.layout')

@section('detail')
    <div class="min-h-screen bg-white flex justify-center items-center bg-green-700 flex-col">
        <div class="text-5xl bg-blue-400 text-white px-5 py-3">Detail Page</div>
        <div class="text-6xl text-white my-5">Testimonial Page/{{$id}}</div>
        <a href="{{'./'}}" class=" text-9xl bg-white px-3 ring-2 ring-red-500 hover:ring-amber-400 transition-all">Home</a>
    </div>
@endsection
