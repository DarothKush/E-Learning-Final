<?php

namespace App\Http\Controllers;

use App\Models\storemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function index2(){
        $storelist = storemodel::all();
        return view('layout.store.storeview', compact('storelist'));
    }
    public function viewForm(){
        $myedu = DB::table('course')->get();
        return view('courseadd',['course'=>$myedu]);
    }
    public function insert(Request $request){
        $request ->validate([
            'store_name' => 'required',
            'store_description' => 'required',
            'subject' => 'required',
            'status' => 'required',
            'teacher_name' => 'required',
            'store_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $storemodel = new storemodel();
        
        $storemodel->store_name = $request->input('store_name');
        $storemodel->store_description = $request->input('store_description');
        // $myedu->status = $request->input('status');
        $status = $request->input('status');
        if($status == "Physical") $storemodel->status = 0;
        else $storemodel->status = 1;
        //img
        $imagename = $request->file('store_img')->getClientOriginalName();
        $request->file('store_img')->move(public_path('assets/database/courses/images'), $imagename);
        $storemodel->store_img = $imagename;

        $storemodel->teacher_name = $request->input('teacher_name');
        $storemodel->subject = $request->input('subject');

        $storemodel->save();
        if($storemodel) 
            return redirect('admin/storeview');
        else 
            dd($storemodel);
        // return redirect()->route('layout.store');
    }
    public function edit($store_id){

        $storeedit = storemodel::where('store_id', $store_id)->get();
        // dd($storeedit);
        return view('layout.store.storeedit',['storelist'=>$storeedit]);
    }
    public function update(Request $request, $store_id){

        $storeupdate = storemodel::where('store_id', $store_id)->update(['store_name'=> $request->input('store_name')]);
        $storeupdate = storemodel::where('store_id', $store_id)->update(['store_description'=> $request->input('store_description')]);
        $storeupdate = storemodel::where('store_id', $store_id)->update(['subject'=> $request->input('subject')]);
        $storeupdate = storemodel::where('store_id', $store_id)->update(['teacher_name'=> $request->input('teacher_name')]);
        // $storeupdate = storemodel::where('store_id', $store_id)->update(['store_img'=> $request->input('store_img')]);
        $storeupdate = storemodel::where('store_id', $store_id)->update(['status'=> $request->input('status')]);
        return redirect('admin/storeview');
    }
    public function delete($store_id)
    {
        $storedelete = storemodel::findOrFail($store_id);
        $storedelete->delete();

        return response()->json(['msg' => 'Deleted successfully']);
    }
}
