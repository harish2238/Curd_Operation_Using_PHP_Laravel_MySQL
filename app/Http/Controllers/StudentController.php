<?php

namespace App\Http\Controllers;

use App\Models\Student;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewStudent(){
        $data =Student::get();
        return view('student-list',compact('data'));
    }
    public function addStudent(){
      return view('add-student');
    }
    public function saveStudent(Request $req){
      $student =new Student();
      $student->name =$req->name;;
      $student->email = $req->email;
      $student->phone =$req->phone;
      $student->address = $req->address;
      $student->save();
      return redirect('/student-list');
    }

    public function editStudent($id){
      $data =Student::where('id','=',$id)->first();
      return view('edit-student',compact('data'));
    }
    public function updateStudent(Request $req){
      Student::where('id','=',$req->id)->update(['name'=>$req->name,'email'=>$req->email,'phone'=>$req->phone,'address'=>$req->address]);
      return redirect('/');
    }
    public function deleteStudent($id){
      $stu=Student::findorFail($id);
      $stu->delete();
      return redirect('/');
    }
    
}
