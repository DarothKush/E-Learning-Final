<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
class teachercontroller extends Controller
{
    public function index(){
        $list = courses::all();
        return view('teacher.myclass', compact('list'));
    }
    public function viewForm(){
        $myedu = DB::table('course')->get();
        return view('createcourse',['course'=>$myedu]);
    }
    public function insert(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'status' => 'required',
            'subject' => 'required',
            'teacher_name' => 'required',
            'price' => 'required',
            'course_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $myedu = new courses();
    
        $myedu->course_name = $request->input('course_name');
        $myedu->course_description = $request->input('course_description');
        $myedu->status = $request->input('status') === 'Physical' ? 0 : 1;
        $myedu->teacher_name = $request->input('teacher_name');
        $myedu->price = $request->input('price');
        $myedu->subject = $request->input('subject');
    
        if ($request->hasFile('course_img')) {
            $image = $request->file('course_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
            // Store the image file in the specified directory
            $image->storeAs('public/assets/images', $imageName);
    
            $myedu->course_img = $imageName;
        }
    
        $myedu->save();
    
        return redirect('t-myclass');
    }
    public function edit($course_id){
        // $courseedit = myedu::find($course_id);
        // return view('edit',['courseedit'=>$courseedit]);
        $courseedit = courses::where('course_id', $course_id)->get();
        return view('teacher.courseedit',['list'=>$courseedit]);
        // dd($courseedit);

        // $courseedit = myedu::find($course_id);
        // return view('layout.courses.courseedit', compact('list'));
    }
    // public function update(Request $request, $course_id){
    //     $courseupdate = courses::findOrFail($course_id);
    //     // $courseupdate = myedu::where('course_id', $course_id)->get();
    //     $courseupdate->course_name = $request->input('course_name') ?? $courseupdate->course_name;
    //     $courseupdate->course_description = $request->input('course_description')?? $courseupdate->course_description;
    //     $courseupdate->status = $request->input('status')?? $courseupdate->status;
    //     $courseupdate->teacher_name = $request->input('teacher_name')?? $courseupdate->teacher_name;
    //     $courseupdate->price = $request->input('price')?? $courseupdate->price;
    //     if ($request->hasfile('course_image'))
    //     {
    //         $destination = 'assets/images/'.$courseupdate->course_image;
    //         if(File::exists($destination))
    //         {
    //             File::delete($destination);
    //         }
    //         $file = $request->file('course_image');
    //         $extension  = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('assets/images/',$filename);
    //         $images-> image = $filename;      
    //     } else{
    //         return $request;
    //         $images -> image =  ' ';
    //     }
    //     $courseupdate->save();

    //     return redirect('t-myclass');
    // }
    public function update(Request $request, $course_id)
{
    $courseupdate = courses::findOrFail($course_id);
    $courseupdate->course_name = $request->input('course_name') ?? $courseupdate->course_name;
    $courseupdate->course_description = $request->input('course_description') ?? $courseupdate->course_description;
    $courseupdate->status = $request->input('status') ?? $courseupdate->status;
    $courseupdate->teacher_name = $request->input('teacher_name') ?? $courseupdate->teacher_name;
    $courseupdate->price = $request->input('price') ?? $courseupdate->price;
    
    if ($request->hasFile('course_img')) {
        $file = $request->file('course_img');
        $destination = 'assets/images/';
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move($destination, $filename);
        
        // Delete the old image file if it exists
        if ($courseupdate->course_image && file_exists($destination . $courseupdate->course_image)) {
            unlink($destination . $courseupdate->course_img);
        }
        
        $courseupdate->course_img = $filename;
    }
    
    $courseupdate->save();
    
    return redirect('t-myclass');
}

    public function delete($course_id)
    {
        $myedu = courses::find($course_id);
        $myedu->delete();

        return redirect()->back();
        
    }

}

