<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){
        return view('backend.layout.master');
    }


    // function to Acceptance or pending
    public function active(Request $request ,$id){
        if($request->get('action')=='Acceptance'){
        $status=User::find($id);
        $text='Acceptance';
        $status->status=$text;
        $status->save();
      }
      if($request->get('action')=='pending'){
        $status=User::find($id);
        $text='pending';
        $status->status=$text;
        $status->save();
      
       
      
      }
      return redirect()->route('users');
      }
}
