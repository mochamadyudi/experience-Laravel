@extends('components/header/header-default')
@section('title', $title)

@section('container')
    <div class="w-full h-full border border-red-500">
        {{$heading}}
    </div>
@endsection

