<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\User\Entities\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return Student::paginate(25);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => 'required|min:2|max:50',
            "father_name" =>  'required|min:2|max:50',
            "grand_father_name" =>  'required|min:2|max:50',
            "gender" => 'required',
            "dob" => 'required',
            "admission_year" => 'required',
            "student_class_id" => 'required'
        ]);

        Student::create($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return Student::find($id);
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "first_name" => 'required|min:2|max:50',
            "father_name" =>  'required|min:2|max:50',
            "grand_father_name" =>  'required|min:2|max:50',
            "gender" => 'required',
            "dob" => 'required',
            "admission_year" => 'required',
            "student_class_id" => 'required'
        ]);
        return Student::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        return Student::find($id)->delete();
    }
}
