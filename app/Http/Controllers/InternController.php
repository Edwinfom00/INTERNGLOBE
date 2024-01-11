<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InternFormRequest;
use App\Models\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Intern::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InternFormRequest $request)
    {
        $intern = new Intern();
        $intern->fill($request->all());
        $intern = Intern::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Intern::FindOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InternFormRequest $request, string $id)
    {
        $intern = Intern::FindOrFail($id);
        $intern->fill($request->all());
        $intern = Intern::update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}