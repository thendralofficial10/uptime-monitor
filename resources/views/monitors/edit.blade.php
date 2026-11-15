@extends('layout')

@section('content')
    <form method="POST" action="{{ route('monitors.update', $monitor) }}">
        @method('PUT')
        @include('monitors._form')
    </form>
@endsection