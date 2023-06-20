<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pizza = Pizza::All();

        return view('pages.pizza.index', compact('pizza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:pizza',
                'price' => 'required',
            ],
            [
                'name.required' => 'Il nome della pizza è obbligatorio',
                'name.unique' => 'La pizza è già nel menu',
                'price.required' => 'La pizza non può essere gratis',
            ]
        );

        $form_data = $request->all();
        $newPizza = new Pizza();
        $newPizza->fill($form_data);
        $newPizza->save();

        return redirect()->route('pizza.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza =  Pizza::findOrFail($id);
        return view('pages.pizza.show', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza =  Pizza::findOrFail($id);
        return view('pages.pizza.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $request->validate(
            [
                'name' => 'required|unique:pizza',
                'price' => 'required',
            ],
            [
                'name.required' => 'Il nome della pizza è obbligatorio',
                'name.unique' => 'La pizza è già nel menu',
                'price.required' => 'La pizza non può essere gratis',
            ]
        );

        $form_data = $request->all();
        $pizza->update($form_data);
        return redirect()->route('pizza.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
