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

    <div class="ml-[15%] relative">
        @include('partials.header')
        <main class="p-12">
            <table class="uppercase text-3xl font-semibold tracking-wider w-full bg-[#1e2128] rounded-md overflow-hidden">
                <thead class="[&_th]:text-start">
                    <tr>
                        <th class="col-span-2 p-2">time</th>
                        <th class="col-span-4 p-2">arrival station</th>
                        <th class="col-span-3 p-2">train code</th>
                        <th class="col-span-3 p-2">remark</th>
                    </tr>
                </thead>
                <tbody class="[&_td]:px-2 [&_td]:py-1 [&_tr]:not-last:border-b text-xl">
                    @yield('content')
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>
