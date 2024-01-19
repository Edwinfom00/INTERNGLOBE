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

        // $user_id = auth()->user()->id;
        // $company = Company::where('user_id', $user_id)->first();
        // $company_id = $company->id;

        $intern::create([
            // 'user_id'=> $user_id,
            // 'company_id'=> $company_id,
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'description' => request('description'),
            'category_id' => request('category'),
            'position' => request('position'),
            'address' => request('address'),
            'gender' => request('gender'),
            'type' => request('type'),
            'last_date' => request('last_date'),
        ]);

        return redirect()->back()->with('success', 'Intern posted Successfully.');
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
         $intern = Intern::findOrFail($id);
        $intern->update($request->all());

        return redirect()->back()->with('success', 'Intern updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}