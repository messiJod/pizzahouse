<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@php
$name="Jod";
@endphp
<div class="min-h-screen flex justify-center flex-col items-center bg-gray-800">
    <div class="bg-yellow-400 p-5 text-5xl rounded-md">This is the Testimonial page.</div>
    <div class="my-5">
        <a href="{{url("./")}}" class =" bg-yellow-400 px-5 py-2 rounded-sm hover:text-yellow-400 hover:bg-black transition-all text-3xl">HOME</a>
    </div>
    <div class="absolute bottom-10 right-10 max-w-5xl text-white bg-gray-700 px-5 py-2">This is made with LARAVEL.</div>

{{--        @for($i=0;$i<5;$i++)--}}
{{--           <p class="text-white text-4xl">--}}
{{--               {{$name}} {{$i}}--}}
{{--           </p>--}}
{{--        @endfor--}}

{{--    @for($i=0;$i<count($users);$i++)--}}
{{--        <p class="text-white text-3xl">{{$users[$i]['name']}}</p>--}}
{{--    @endfor--}}


{{--        @foreach($users as $user)--}}
{{--                <p class="text-white text-3xl bg-red-400 w-max text-center my-2 px-3 py-2"> {{$user['name']}} - {{$user['age']}}</p>--}}
{{--        @endforeach--}}

</div>
