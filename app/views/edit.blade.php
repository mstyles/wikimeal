@extends('layout')

@section('content')
    <script>
        $(document).ready(function() {
            $('.remove').on('click', function(e){
                url = 'remove';
                $.post(url, {id : this.value});
                $(this).closest('tr').remove();
            });
        });
    </script>

    {{ Form::open(array('url' => 'add')) }}
        {{ Form::text('name') }}
    {{ Form::close() }}

    <table border="1" style="border-collapse: collapse">
    @foreach ($meals as $meal)
        <tr>
            <td><button type="button" class="remove" value="{{ $meal->id }}">Remove</button></td>
            <td>{{ $meal->name }} </td>
        </tr>
    @endforeach
    </table>
@stop
