<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $environments = Environment::all();
        return view("environments.index", compact("environments"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("environments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // $environment = new Environment();
        // $environment->name = $data["name"];
        // $environment->element = $data["element"];
        // $environment->walking_speed = $data["walking_speed"];
        // $environment->image = $data["image"];
        // $environment->save();

        $environment = Environment::create($data);

        return redirect()->route("environment.show", $environment->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $environment = Environment::findOrFail($id);

        return view("environments.show", compact("environment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Environment $environment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Environment $environment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Environment $environment)
    {
        //
    }

    public function metodoCheVoglio(){

    }
}
