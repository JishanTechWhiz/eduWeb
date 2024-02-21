<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class ManageCourseController extends Controller
{
    public function coursePage(){
        return view('Auth.manageCourse');
    }

    public function singleCourse(String $id){
        
        $singleData = Courses::find($id);
        $coursez = compact('singleData');
        return view('Auth.SingleCourse',$coursez);
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());

        $course = new Courses;
        $course->course_name = $request['title'];
        $course->course_level = $request['clevel'];
        $course->course_duration = $request['duration'];
        $course->course_description = $request['description'];
        $course->price = $request['price'];
        $course->course_provider = $request['provider_name'];
        $course->course_category = $request['category_name'];
        $course->start_date = $request['start_date'];
        $course->end_date = $request['end_date'];
        

        
        $fileName = time() . '.' .$request->file('course_image')->extension();
        $request->file('course_image')->storeAs('public/images', $fileName);

        $course->image_path = $fileName;
        $course->course_rating = $request['course_rating'];
        
        $course->save();

        return redirect('/manageCourse')->with('message','Data Inserted SuccessFully');
    }

    public function show()
    {
        $courses = Courses::all();

         $data = compact('courses');
         return view('Auth.manageCourse')->with($data);
    }

    public function showCourse()
    {
        $courses = Courses::all();

         $data = compact('courses');
         return view('Auth.Course')->with($data);
    }

    public function update(Request $request, string $id)
    {
        $course = Courses::find($id);

        $course->course_name = $request['title'];
        $course->course_level = $request['clevel'];
        $course->course_duration = $request['duration'];
        $course->course_description = $request['description'];
        $course->price = $request['price'];
        $course->course_provider = $request['provider_name'];
        $course->course_category = $request['category_name'];
        $course->start_date = $request['start_date'];
        $course->end_date = $request['end_date'];
        

        $fileName = time() . '.' .$request->file('course_image')->extension();
        $request->file('course_image')->storeAs('public/images', $fileName);

        $course->image_path = $fileName;
        //$course->image_path = $request['course_image'];
        $course->course_rating = $request['course_rating'];
        
        $course->save();

        
       
        return redirect('/manageCourse')->with('message','Data Updated SuccessFully');
    }


    public function destroy(string $id)
    {
        $course = Courses::find($id);

        if(!is_null($course)){
            $course->delete();
        }
        return redirect('/manageCourse')->with('message','Data Deleted SuccessFully');
    }
}
