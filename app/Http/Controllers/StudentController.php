<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index',['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {

        // {{-- save.php --}}
        // {{-- 1. POST/GET pasiimdavo duomenis $_POST['input_laukelio_vardas'] --}}
        // {{-- 2. Sudedavome i uzklausa. INSERT INTO --}}
        // {{-- 3. uzklausa isiusdavom i duombaz --}}
        // {{-- 4. Jei sekmingai, grazinam i index.php --}}
        //|
        //V
        // 1. sukuriame nauja Studento objekta x
        // 2. su POST pasiimame duomenis. $request x
        // 3.Studento objekta uzpildome duomenis is $request x
        // 4. issaugome i duombaze x
        // 5. graziname i index kelia 

        $student = new Student; //naujas studento objektas pagal modeli. Iskarto perduodame duomenis modeliui
        // $_POST arba $_GET  -nesikreipia. $request
        // $student - asociatyvus masyvas
        // $student['name'] = $name;

        // request('name') ten kur neturime $request objekto
        // i vaizda tiesiai parodyti request kintamaji. $request objekto neturim, request('name')
        // greitaveikos ir saugumo
        $student->name = $request->name; //request('name')
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->project = $request->project;

        $student->save(); //issaugo i duombaze. INSERT INTO

        //header ('Location: index.php'); - nenaudojama,

        return redirect()->route('students.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
