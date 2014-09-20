@extends('layout')

@section('content')
    <select id="meal">
        @foreach ($meals as $meal)
        <option value="{{ $meal->id }}">{{ $meal->name }}</option>
        @endforeach
    </select>
@stop
