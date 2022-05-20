<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://cdn.shopify.com/s/files/1/0593/9347/4758/files/favicon.png?v=1653025649">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @yield('welcome')
    @yield('testimonial')
    <div class="absolute bottom-10 right-10 max-w-5xl text-white bg-gray-700 px-5 py-2">This is made with LARAVEL.</div>
</body>
</html>
