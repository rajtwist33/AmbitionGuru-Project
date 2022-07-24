<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlacementRequest;
use App\Http\Requests\UpdatePlacementRequest;
use App\Models\Placement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placements = Placement::all();

        return view('placements.index', compact('placements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function edit(Placement $placement)
    {

        return view('placements.edit',compact('placement'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $placements = Placement::with('placement')->get();

        return view('placements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlacementRequest $request){
        $placement = $request->safe()->except('photo');

        if ($request->hasFile('photo')) {
            $placement['photo'] = $request->photo->store('placements');
        }

        Placement::create($placement);

        toast('Placement Created Successfully', 'success')->autoClose(3000);
        return to_route('placements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function show(Placement $placement)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlacementRequest $request, Placement $placement)
    {
        $data = $request->safe()->except('photo');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->photo->store('placements');
            if ($placement->photo!= null && Storage::disk('public')->exists($placement->photo)) {
                Storage::delete($placement->photo);
            }
        }

        $placement->update($data);

        toast('Placement updated successfully', 'success')->autoClose(3000);
        return to_route('placements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Placement $placement)
    {
        $placement->delete();

        toast('Placement Deleted Successfully', 'error')->autoClose(3000);
        return to_route('placements.index');
    }
}
