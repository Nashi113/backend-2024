<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function index(){
        $students = Student::all();

        $data = [
            'message'=>'Get all Students',
            'data'=>$students,
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request) {
        $input = [
        'nama' => $request->nama,
        'nim' => $request->nim,
        'email' => $request->email,
        'jurusan' => $request->jurusan,
        ];

        $student = Student::create($input);

        $data = [
            'message' => 'Student is created succesfully',
            'data' => $student
        ];

        return response()->json($data, 201);
    }

    public function update(Request $request, Student $student){
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
            ];

        $student->update($input);

        $data = [
            'message' => 'Student is updated succesfully',
            'data' => $student
        ];

        return response()->json($data, 201);

    }

    public function destroy(Student $student) 
    {
        $student->delete();

        $data = [
            'message' => 'Student is deleted succesfully'
        ];

        return response()->json($data, 201);
    
    }

    

}


