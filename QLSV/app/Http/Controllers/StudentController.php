<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all(); 
        $successMessage = session('success');
        return view('students.index',compact('students','successMessage')); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('students.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'phoneNumber' => 'required',
    ]);

    Student::create($request->all());

    return redirect()->route('students.index')->with('success', 'Student created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'phoneNumber' => 'required',
    ]);

    $data = $request->except('_token'); // Exclude the _token field from the data

    $student->update($data);

    return redirect()->route('students.index')
        ->with('success', 'Student updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete(); 
        return redirect() ->route('students.index')->with('succes', 'Student deleted successfully'); 

    }
}
