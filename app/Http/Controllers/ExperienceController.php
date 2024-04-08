<?php

namespace App\Http\Controllers;


use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ExperienceController extends Controller
{
  /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $experiences = Experience::get();
        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    //    Skill::create($request->all());
    //    return redirect()->route('skills.index');
     $data = $request->validate(
        [
            'work_experience' => 'required',
            'date_hire' => 'required',
            'address' => 'required',
            'description' => 'required',
            
        ]
        );
        if($data){
            Experience::create($data);
            return redirect()->route('experience.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience): RedirectResponse
    {
        //
       $experience->update($request->all());

       return redirect()->route('experience.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience): RedirectResponse
    {
        //
        $experience->delete();

        return redirect()->route('experience.index');
    }
}