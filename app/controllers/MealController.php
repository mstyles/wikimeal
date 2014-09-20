<?php

class MealController extends BaseController
{
    public function mealPicker()
    {
        $meal_ids = $name = DB::table('meals')->lists('id');
        // var_export($meal_ids); die();

        $meal_id = array_rand($meal_ids);

        $meal = Meal::findOrFail($meal_ids[$meal_id]);

        $meals = Meal::All();

        return View::make('meals')->with('meals', $meals);
    }

    public function add()
    {
        $name = Input::get('name');
        $meal = new Meal();
        $meal->name = $name;
        $meal->save();

        $meals = Meal::all();

        return View::make('add_meal')->with(array(
            'meals' => $meals,
        ));
    }
}
