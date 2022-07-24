<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Http\Traits\DeleteImage;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use DeleteImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();

        return view('slider.index', compact('sliders'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        toast('Slider Deleted Successfully', 'error')->autoClose(3000);
        return to_route('sliders.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request)
    {
        $slider = Slider::findOrFail($request->slider_id);
        $slider->status = $request->status;
        $slider->save();

        if ($slider->status == 1) {
            return response()->json([
                'message' => 'Slider Status Active.',
                'icon' => 'success'
            ]);
        } else {
            return response()->json([
                'message' => 'Slider Status Inactive.',
                'icon' => 'error'
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateSliderRequest $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $data = $request->safe()->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('sliders');
            $this->deleteImage($slider->image);
        }

        $slider->update($data);

        toast('Slider Updated Successfully', 'info')->autoClose(3000);
        return to_route('sliders.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSliderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {

        $slider = $request->safe()->except('image');
        $slider['status'] = 1;

        if ($request->hasFile('image')) {
            $slider['image'] = $request->image->store('sliders');
        }

        Slider::create($slider);

        toast('Slider Created Successfully', 'success')->autoClose(3000);
        return to_route('sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }
}
