<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use App\Http\Traits\FetchCourses;
use App\Models\Certificate;

class CertificateController extends Controller
{
    use FetchCourses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::with('course')->get();

        return view('certificate.index', compact('certificates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCertificateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificateRequest $request)
    {
        Certificate::create($request->validated());

        toast('Certificate Created Successfully', 'success')->autoClose(3000);
        return to_route('certificates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = $this->fetchCourses();

        return view('certificate.create', compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        $courses = $this->fetchCourses();

        return view('certificate.edit', compact('courses', 'certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCertificateRequest $request
     * @param \App\Models\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $certificate->update($request->validated());

        toast('Certificate Updated Successfully', 'info')->autoClose(3000);
        return to_route('certificates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

        toast('Certificate Deleted Successfully', 'error')->autoClose(3000);
        return to_route('certificates.index');
    }
}
