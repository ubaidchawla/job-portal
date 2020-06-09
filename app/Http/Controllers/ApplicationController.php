<?php

namespace App\Http\Controllers;

use Request;
use App\Application;
use App\Company;
use App\Student;
use App\Job;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::all();
        return view('applications.index', compact('applications')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $jobs = Job::all();
        $students = Student::all();
        return view('applications.create')
        ->with(compact('companies'))
        ->with(compact('jobs'))
        ->with(compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = new Application;
        $company = Company::find($request::input('company_id'));
        $job = Job::find($request::input('job_id'));
        $student = Student::find($request::input('student_id'));
        $company = $company->applications()->save($application);        
        $job = $job->applications()->save($application);
        $student = $student->applications()->save($application);
        $application->save();
        return redirect('/applications')->with('success', 'application is saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
