<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display all students and lecturers
        $students = Student::all();
        $lecturers = Lecturer::all();

        //Return the students and lecturers
        return response()->json([
            'students' => $students,
            'lecturers' => $lecturers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email|unique:students|unique:lecturers|unique:admins',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            return response([
                'statusCode' => 400,
                'message' => $validator->errors()
            ]);
        } else {

            //Check role and create user
            switch ($request->role) {
                case 'student':
                    $createUserModel = new Student();
                    break;
                case 'lecturer':
                    $createUserModel = new Lecturer();
                    break;
                case 'admin':
                    $createUserModel = new Admin();
                    break;
                default:
                    $createUserModel = null;
                    break;
            }

            //Check if model is set
            if ($createUserModel) {

                $createUserModel->name = $request->name;
                $createUserModel->surname = $request->surname;
                $createUserModel->email = $request->email;
            }
        }
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