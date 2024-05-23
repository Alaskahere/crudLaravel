<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Module;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Listar todos los estudiantes
    public function index()
    {
        //$students = Student::all();
        $students = Student::with('module')->get(); //consulta para recuperar todos los estudiantes
        return view('students.index', compact('students'));
    }

    //Mostrar formulario para crear nuevo Estudiante
    public function create()
    {
        $modules = Module::all();
        return view('students.create', compact('modules'));
    }

    //Guardar un nuevo estudiante en la BD
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'expedient' => 'required',
            'module_id' => 'required|exists:modules,id'
        ]);

        Student::create($request->all()); //crea estudiante
        return redirect()->route('students.index')->with('success', 'Registro Exitoso');
    }

    //Mostrar detalles de un estudiante
    public function show(Student $student)
    {
        $student->load('module');
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $modules = Module::all();
        return view('students.edit', compact('student', 'modules'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'expedient' => 'required',
            'module_id' => 'required|exists:modules,id'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Estudiante Editado satisfatoriamente');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante Eliminado satisfatoriamente');
    }
}
