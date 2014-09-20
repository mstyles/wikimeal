@extends('layout')

@section('content')
    <script>
        $(document).ready(function() {

            // page is now ready, initialize the calendar...

            $('#calendar').fullCalendar({
                // put your options and callbacks here
            })

        });
    </script>

    <div id="calendar"></div>

    {{ Form::open(array('url' => 'add')) }}
        {{ Form::text('name') }}
    {{ Form::close() }}
    @foreach ($meals as $meal)
        <p>{{ $meal->name }}</p>
    @endforeach
@stop
