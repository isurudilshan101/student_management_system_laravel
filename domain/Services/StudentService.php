<?php

namespace domain\Services;

use App\Models\Student;
use GuzzleHttp\Psr7\Request;

class StudentService
{
    protected $student;

    public function __construct()
    {
        $this->student=new Student();
    }

    public function store(Request $request)
    {
           // dd($request);
            $imageName=time(). ".".$request->image->extension();
            $request->image->move(public_path('image'),$imageName);

            Student::create([
                'name'=>$request->name,
                'image'=>$imageName,
                'age'=>$request->age,
                'status'=>$request->status
            ]);
          //  $this->student->create($request->all());

            return view('home');
    }


    public function student_list(Request $request)
    {

            $response['student']=$this->student->all();


            return view('student_list')->with($response);

    }

    public function delete_student($id)
    {

      $student=$this->student->find($id);
      $student->delete();

      return redirect()->back();

    }

    public function edit_student($id)
    {

        $data=Student::where('id','=',$id)->first();

        return view('edit_student',compact('data'));

    }

    public function update_student(Request $request, $id)
    {
       // dd($request);
       $imageName=time(). ".".$request->image->extension();
       $request->image->move(public_path('image'),$imageName);

      // $student = Student::find($id);

      // $student->fill($request->all());
      // $student->save();
        $name=$request->name;
        $imageName= $imageName;
        $age=$request->age;
        $status=$request->status;

      Student::where('id','=',$id)->update([
         'name'=>$name,
         'image'=>$imageName,
         'age'=>$age,
         'status'=>$status
      ]);

       return redirect()->route('student_list');
    }
}
