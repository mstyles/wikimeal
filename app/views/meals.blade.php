@extends('layout')

@section('content')
    <script>
        var meals = JSON.parse('{{ $meals }}');
        var counter = 0;

        $(document).ready(function() {
            $('#pick').on('click', function(e){
                counter = 0;
                $('#meal').css('background-color', 'transparent');
                spinner(70, 1);
            });
        });

        function spinner(repeats, interval)
        {
            randomMeal();
            if (counter < repeats) {
                setTimeout(function() {spinner(repeats, interval)}, interval);
            } else {
                $('#meal').css('background-color', 'lightgreen');
            }
            interval *= 1.1;
            counter++;
        }

        function randomMeal()
        {
            var num = getRandomInt(0, meals.length);
            $('#meal').text(meals[num].name);
        }

        // Returns a random integer between min (included) and max (excluded)
        // Using Math.round() will give you a non-uniform distribution!
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
    </script>

    <button id="pick">Pick a Meal</button>
    <div id="meal"></div>
@stop
