<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnvironmentRequest;
use App\Models\Environment;

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
    public function store(StoreEnvironmentRequest $request)
    {
        $data = $request->validate();

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
    public function show(Environment $environment) // find or fail
    {
        return view("environments.show", compact("environment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Environment $environment)
    {
        // # findOrFail sul model creato, cerco la id che ho passato alla funzione?
        return view("environments.edit", compact("environment"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEnvironmentRequest $request, Environment $environment)
    {
        $data = $request->validate();
        // $environment->name = $data["name"];
        // $environment->element = $data["element"];
        // $environment->walking_speed = $data["walking_speed"];
        // $environment->image = $data["image"];
        // $environment->update();
        // $environment = Environment::create($data);

        $environment->update($data);

        return redirect()->route("environment.show", $environment->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Environment $environment)
    {
        $environment->delete();
        return redirect()->route("environment.index");
    }

    public function deletedIndex(){
        $environments = Environment::onlyTrashed()->get();
        // dd($environments);
        return view("environments.deleted-index", compact("environments"));
    }

    public function restore(string $id){
        $environment = Environment::onlyTrashed()->findOrFail($id);
        $environment->restore();

        return redirect()->route("environment.index");
    }

    public function permanentDelete(string $id){
        $environment = Environment::onlyTrashed()->findOrFail($id);
        $environment->forceDelete();

        return redirect()->route("environment.deleted-index");
    }
}
