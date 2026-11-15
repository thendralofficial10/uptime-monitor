@extends('layout')

@section('content')
    <form method="POST" action="{{ route('monitors.store') }}">
        @include('monitors._form')
    </form>
@endsection