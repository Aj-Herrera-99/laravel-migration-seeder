@extends('layouts.master')

@section('title', 'Treni in partenza')

@section('content')

    @foreach ($trains as $train)
        <x-train-card :train="$train" />
    @endforeach

@endsection
