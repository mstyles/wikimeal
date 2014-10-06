<?php

class MealController extends BaseController
{
    public function mealPicker()
    {
        $meal_ids = $name = DB::table('meals')->lists('id');

        $meal_id = array_rand($meal_ids);

        $meal = Meal::findOrFail($meal_ids[$meal_id]);

        $meals = Meal::All()->toJson();

        return View::make('meals')->with('meals', $meals);
    }

    public function add()
    {
        $name = Input::get('name');
        $meal = new Meal();
        $meal->name = $name;
        $meal->save();

        return $this->allMeals();
    }

    public function remove()
    {
        $id = Input::get('id');
        $meal = Meal::findOrFail($id);
        $meal->delete();

        return $this->allMeals();
    }

    private function allMeals()
    {
        $meals = Meal::all();

        return View::make('edit')->with(array(
            'meals' => $meals,
        ));
    }
}
