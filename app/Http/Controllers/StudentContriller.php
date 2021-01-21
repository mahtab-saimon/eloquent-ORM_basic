<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentContriller extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));

    }

    public function create()
    {

        return view('student.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:students|max:25|min:4',
            'email' => 'required|unique:students|max:25|min:9',
            'phone' => 'required|unique:students',
        ]);
        $student = new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
            $notification=array(
                'messege'=>'Successfully Student Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

    }

    public function show($id){
        $student=Student::findorfail($id);
         return view('student.viewStudent', compact('student'));
    }

    public function edit($id){
        $student=Student::findorfail($id);
        return view('student.editStudent', compact('student'));
    }
    public function update(Request $request,$id)
    {
        $student=Student::findorfail($id);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->update();
        $notification=array(
            'messege'=>'Successfully Student Updated',
            'alert-type'=>'success'
        );
        return Redirect()->route('students.all')->with($notification);

    }
    public function destroy($id){
        $student=Student::findorfail($id);
        $student ->delete();
        $notification=array(
            'messege'=>'Successfully Student Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }


}
