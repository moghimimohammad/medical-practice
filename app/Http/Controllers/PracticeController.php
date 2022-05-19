<?php

namespace App\Http\Controllers;

use App\Http\Requests\PracticeRequest;
use App\Models\Practice;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practices = Practice::latest()->paginate(10);
    
        return view('practice.index',compact('practices'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('practice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PracticeRequest $request)
    {
        
        $validated = $request->validated();
        $practice = new Practice($validated);
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/images');
            $practice->logo = $path;
        }

        $practice->save();

        return redirect()->route('practice.index')
            ->with('success', 'updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(Practice $practice)
    {
        $practice->load('employees');
        $practice->load('fields');
        // dd($practice);
        return view('practice.show',compact('practice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function edit(Practice $practice)
    {
        return view('practice.edit', compact('practice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(PracticeRequest $request, Practice $practice)
    {
        $validated = $request->validated();
        $practice->update($validated);

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/images');
            $practice->logo = $path;
            $practice->save();
        }
        return redirect()->route('practice.index')
            ->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practice $practice)
    {
        //
    }
}
