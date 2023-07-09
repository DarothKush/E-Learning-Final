<?php

namespace App\Http\Controllers;

use App\Models\myedu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class MyeduController extends Controller
{
    public function index(){
        $list = myedu::all();
        return view('layout.courses.courseview', compact('list'));
    }
    //
    public function index4(){
        $detail = myedu::all();
        return view('layout.courses.coursedetail', compact('detail'));
    }
    //
    public function viewForm(){
        $myedu = DB::table('course')->get();
        return view('courseadd',['course'=>$myedu]);
    }
    public function insert(Request $request){
        $request ->validate([
            'course_name' => 'required',
            'course_description' => 'required',
            'status' => 'required',
            'subject' => 'required',
            'teacher_name' => 'required',
            'price' => 'required',
            'course_img' => 'required',
        ]);

        $myedu = new myedu();
        
        $myedu->course_name = $request->input('course_name');
        $myedu->course_description = $request->input('course_description');
        $status = $request->input('status');
        if($status == "Physical") $myedu->status = 0;
        else $myedu->status = 1;
        $myedu->teacher_name = $request->input('teacher_name');
        $myedu->price = $request->input('price');
        $myedu->subject = $request->input('subject');
        $imagename = $request->file('course_img')->getClientOriginalName();
        $request->file('course_img')->move(public_path('assets/images'), $imagename);
        $myedu->course_img = $imagename;

        $myedu->save();
        if($myedu) 
            return redirect('admin/courseview');
        else 
            dd($myedu);
    }
    public function edit($course_id){
        $courseedit = myedu::where('course_id', $course_id)->get();
        return view('layout.courses.courseedit',['list'=>$courseedit]);
    }
    public function update(Request $request, $course_id){
        $courseupdate = myedu::where('course_id', $course_id)->update(['course_name'=> $request->input('course_name')]);
        $courseupdate = myedu::where('course_id', $course_id)->update(['course_description'=> $request->input('course_description')]);
        $courseupdate = myedu::where('course_id', $course_id)->update(['status'=> $request->input('status')]);
        $courseupdate = myedu::where('course_id', $course_id)->update(['teacher_name'=> $request->input('teacher_name')]);
        $courseupdate = myedu::where('course_id', $course_id)->update(['price'=> $request->input('price')]);

        return redirect('admin/courseview');
    }

    public function delete($course_id)
    {
        $coursedelete = myedu::findOrFail($course_id);
        $coursedelete->delete();

        return response()->json(['msg' => 'Deleted successfully']);
    }

}

