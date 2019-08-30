<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return User::paginate(25);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "first_name" => 'required',
            "father_name" => 'required',
            "grand_father_name" => 'required',
            "gender" => 'required',
            "dob" => 'required',
            "email" => 'required|unique:users',
            "phone" => 'required'
        ]);

        return User::create($request->except(["role"]))->addRole($request->role);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return User::find($id);
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
            "first_name" => 'required',
            "father_name" => 'required',
            "grand_father_name" => 'required',
            "gender" => 'required',
            "dob" => 'required',
            "email" => 'required|unique:users',
            "phone" => 'required'
        ]);
        return User::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        return User::find($id)->delete();
    }
}
