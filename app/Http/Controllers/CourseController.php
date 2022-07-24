<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Traits\DeleteImage;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use DeleteImage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {

        $course->delete();

        toast('Course deleted successfully', 'error')->autoClose(3000);
        return to_route('courses.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
        $course->status = $request->status;
        $course->save();

        if ($course->status == 1) {
            return response()->json([
                'message' => 'Course Status Active.',
                'icon'=> 'success'
                ]);
        } else {
            return response()->json([
                'message' => 'Course Status Inactive.',
                'icon'=>'error'
                ]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {

        $data = $request->safe()->except('cover_pic');

        if ($request->hasFile('cover_pic')) {
            $data['cover_pic'] = $request->cover_pic->store('courses');

            $this->deleteImage($course->cover_pic);
        }

        $course->update($data);

        toast('Course Updated Successfully', 'info')->autoClose(3000);
        return to_route('courses.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {

        $course = $request->safe()->except('cover_pic');
        $course['status'] = 1;

        if ($request->hasFile('cover_pic')) {
            $course['cover_pic'] = $request->cover_pic->store('courses');
        }

        Course::create($course);

        toast('Course Created Successfully', 'success')->autoClose(3000);
        return to_route('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

}
