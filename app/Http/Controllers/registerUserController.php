<?php

namespace App\Http\Controllers;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;

class registerUserController extends Controller
{
    public function userView(){
        $userView = userModel::all();
        return view('layout.registeruser.user', compact('userView'));
    }
    public function edit($registerUser_id){
        $useredit = userModel::where('registerUser_id', $registerUser_id)->get();
        return view('layout.registeruser.useredit',['useredit'=>$useredit]);
    }
    public function update(Request $request, $registerUser_id){
        // $userupdate = userModel::findOrFail($registerUser_id);
        $userupdate = userModel::where('registerUser_id', $registerUser_id)->update(['registerUser_firstname'=> $request->input('registerUser_firstname')]);
        $userupdate = userModel::where('registerUser_id', $registerUser_id)->update(['registerUser_lastname'=> $request->input('registerUser_lastname')]);
        $userupdate = userModel::where('registerUser_id', $registerUser_id)->update(['email'=> $request->input('email')]);
        

        return redirect('admin/user');
    }
    public function delete($registerUser_id)
    {
        $userdelete = userModel::where('registerUser_id', '=',$registerUser_id)->delete();    
        return response()->json(['msg' => 'Deleted successfully']);
    }
    
}
