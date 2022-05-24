@extends('layouts.layout')

@section('detail')
    <div class="min-h-screen bg-white flex justify-center items-center bg-gradient-to-tr from-blue-400 to-amber-700 flex-col">
        <div class="text-5xl bg-blue-400 text-white px-5 py-3">Order Detail Page</div>
        <div class="my-5">
            <div class="text-5xl text-white">Ordered By - <span class="underline underline-offset-2 decoration-8 decoration-blue-600 ">{{$user->name}}</span></div>
            <div class="text-5xl text-white my-2">Base - <span class="underline underline-offset-2 decoration-8 decoration-blue-600">{{$user->base}}</span></div>
            <div class="text-5xl text-white">Type - <span class="underline underline-offset-2 decoration-8 decoration-blue-600">{{$user->type}}</span></div>
        </div>

        <a href="{{'./'}}" class="inline-block text-5xl bg-white px-3 py-2 ring-4 rounded-xl ring-red-500 hover:ring-amber-400 transition-all mt-10">Home</a>
    </div>
@endsection
