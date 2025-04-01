@extends('layouts.master')

@section('title', 'Treni in partenza')

@section('content')

    @if (!isset($is_chrono))
        <h4 class="uppercase text-red-600 text-xl">attenzione!</h4>
        <p class="mb-2">La seguente tabella non tiene l'ordine cronologico -> clicca <a href={{ route('page2') }}
                class="underline underline-offset-4 hover:text-amber-600">qui</a> per ottenere l'ordine corretto
        </p>
    @else
        <p class="mb-2">Clicca <a href="/" class="underline underline-offset-4 hover:text-amber-600">qui</a> per
            tornare alle impostazioni iniziali
        </p>
    @endif

    <table class="uppercase text-3xl w-full bg-[#1e2128] rounded-md overflow-hidden">
        <thead class="[&_th]:text-start">
            <tr>
                <th class="col-span-2 p-2">time</th>
                <th class="col-span-4 p-2">arrival station</th>
                <th class="col-span-3 p-2">train code</th>
                <th class="col-span-3 p-2">remark</th>
            </tr>
        </thead>
        <tbody class="[&_td]:px-2 [&_td]:py-1 [&_tr]:not-last:border-b text-xl">
            @foreach ($trains as $train)
                <x-train-card :train="$train" />
            @endforeach
        </tbody>
    </table>

@endsection
