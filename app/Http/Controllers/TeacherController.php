<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{//dd($teachers); // Esto detendrá la ejecución y mostrará los datos obtenidos

    public function index(){
        $teachers = Teacher::with('module')->get();
        return view('teachers.index',compact('teachers'));
    }

    public function create()
    {
        $modules = Module::all();
        return view('teachers.create', compact('modules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'document' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'module_id' => 'required|exists:modules,id',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function show(Teacher $teacher)
    {
        $teacher->load('module.students'); // Load the module and the students of the module
        return view('teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        $modules = Module::all();
        return view('teachers.edit', compact('teacher', 'modules'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'document' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'module_id' => 'required|exists:modules,id',
        ]);

        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }


}
