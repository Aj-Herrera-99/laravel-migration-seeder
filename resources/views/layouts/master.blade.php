<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>@yield('title')</title>
</head>

<body>
    @include('partials.navbar')

    <div class="ml-[20%] relative">

        @include('partials.header')

        <main class="p-12">
            @yield('content')
        </main>

    </div>
</body>

</html>
