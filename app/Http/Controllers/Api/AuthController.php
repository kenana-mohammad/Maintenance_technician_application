<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Services_pivot;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\maintenance_technicians;
use App\Models\category;
use App\Models\subcategory;

class AuthController extends Controller
{
    //Register 
    public function Register(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => 'required | max:191',
            'email' => 'required | unique:users',
            'password' => 'required ',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'location_latitude' => 'nullable|numeric',
            'location_longitude' => 'nullable|numeric',
            'bank' => 'nullable|string',
             'bank_account' => 'nullable|string',
              'location_image'  => 'mimes:jpg,bmp,png',
        
        
        
          ],
          ['name.required' => 'الاسم مطلوب',
          'email.unique' =>'الايميل موجود مسبقا',
        
        ]
      
      );
      
        if($validator->fails()){
          return $validator->errors();
        }
      else{  
        
       
            if($request -> hasFile('location_image')){
           
              $filename=time().'.'.$request->file('location_image')->getClientOriginalName();
              $path = $request->file('location_image')->storeAs('images',$filename,'public');
            }

            $subcategories = $request->input('subcategory_id');
            if (is_array($subcategories)) {
                $subcategoriesString = implode(',', $subcategories);
            } else {
                $subcategoriesString = $subcategories;
            }
        
            $user=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
                'api_token' => Str::random(60), 
                'phone'   => $request->phone,
                'city'    => $request->city,
                 'location_latitude' =>$request->location_latitude,
                  'location_longitude' =>$request->location_longitude,
                  'bank' => $request->bank,
                 
                  'bank_account' => $request->bank_account,
                  
                  'location_image' => $path,
              ]);
              $data=Services_pivot::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $subcategories,
                'user_id' => $user->id,
              ]);


              return response()->json([
                'message'=>'تم التسجيل بنجاح',
                     'data'=>$data,
                     'api_token' => Str::random(60), 
          
                ],201);
          
             
             


}
}
//login
public function Login(Request $request){
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
  
    if(auth()->attempt(['email'=>$request->input('email'),
    'password'=>$request->input('password')])){
     $user=auth()->user();
     $user->api_token = Str::random(60);
     if ($user->status == 'Acceptance') {
     $user->save;
     return response()->json([
       'user'=>$user,

  ],201);     }

  if ($user->status == 'pending') {
    return response()->json(['status' => 'تم استقبال طلبك يرجى الانتظار حتى تتم الموافقة'], 402);
}


  }

  return response()->json([
   'message'=>'Invaild credentils',
   ],401);   
}



}