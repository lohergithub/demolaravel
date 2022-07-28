<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(){

        $students = DB::table('students')
        ->orderBy('id', 'DESC')
        ->get();

        return view('users.index', compact('students'));
    }

    public function create(){

        return view('users.create');

    }
    
    public function store(Request $request){

        $validate = $request->validate([
            'firstname'=>'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:10'
        ]);

    
        $student = new Student;
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        $student->save();

        if($student->save()){
            DB::commit();
            return back()->with('success', "Enregistrement  effectué avec succès");
           
        } else {
            return back()->with('error', "Erreur lors de l'enregistrement! ");
        }
    }

    public function edit($id){
       $student = Student::find($id);
    
        return view('users.edit', compact('student'));
      
    }

    public function update(Request $request,$id){

            $student = Student::find($id);
            //$success = false;

            $validate = $request->validate([
                'firstname'=>'required',
                'lastname' => 'required',
                'email' => 'required|email|max:20|',
                'phone' => 'required|max:10|min:10'
            ]);

                if(!is_null($student))
                {
                    $student->firstname = $request->input('firstname');
                    $student->lastname = $request->input('lastname');
                    $student->email = $request->input('email');
                    $student->phone = $request->input('phone');

                    $student->update();
                    return back()->with('success', "Modification effectuée avec succès");
                } 
                else
                {
                    return back()->with('error', "Erreur! Etudiant inexistant!");
                } 
    }
    public function destroy($id){
        $student = Student::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        return back()->with('success', "Suppression effectuée avec succès");
    }
}
