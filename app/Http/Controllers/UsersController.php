<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


// 'id','username','email','password'

// Route::get("users",[UsersController::class,'getAll']);
// Route::get("users/{id}",[UsersController::class,'getOne']);
// Route::get("users/{email}",[UsersController::class,'getOneByEmail']);
// Route::post("users",[UsersController::class,'create']);
// Route::put("users/{id}",[UsersController::class,'update']);
// Route::delete("users/{id}",[UsersController::class,'delete']);


class UsersController extends Controller
{

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required|string|max:191',
            'email' =>'required|string|max:191',
            'password' =>'required|string|max:191'
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->message()
            ],422);
        }

        $user = Users::create([
            'username' => $request->username,
            'email' =>$request->email,
            'password' =>$request->password
        ]);


        if(!$user){
            echo($user);
            return response()->json([
                "status"=> 500,
                "message"=>"Something Went Wrong"
            ],500);
        }

        return response()->json([
            "status"=> 200,
            "User"=> $user
        ],200);

    }

    public function getAll(){
        $users  = Users::all();
        if(!$users){
            return response()->json([
                "status"=> 400,
                "message"=>"No users found"
            ],400);
        }
        return response()->json([
            "status"=> 200,
            "data"=> $users
        ],200);
    }

    public function getOne($id){
        $user = Users::find($id);
        if(!$user){
            return response()->json([
                "status"=> 400,
                "message"=>"Users Not found"
            ],400);
        }
        return response()->json([
            "status"=> 200,
            "data"=> $user
        ],200);
    }

    public function getOneByEmail($email){

        $user = Users::where('email',$email)->get();
        if(!$user){
            return response()->json([
                "status"=> 400,
                "message"=>"Users Not found"
            ],400);
        }
        return response()->json([
            "status"=> 200,
            "data"=> $user
        ],200);

    }
    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'username' => 'required|string|max:191',
            'email' =>'required|string|max:191',
            'password' =>'required|string|max:191'
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => 422,
                "message" => $validator->message()
            ],422);
        }
        $user = Users::find($id);
        if(!$user){
            return response()->json([
                "status"=> 400,
                "message"=>"User Not Found"
            ],400);
        }

        $user -> update([
            'username' => $request->username,
            'email' =>$request->email,
            'password' =>$request->password
        ]);
            return response()->json([
                "status"=> 200,
                "message"=>"User Updated Successfully"
            ],200);


    }
    public function delete($id){
        $user = Users::find($id);
        if(!$user){
            return response()->json([
                "status"=> 400,
                "message"=>"User Not Found"
            ],400);
        }
        $user -> delete();
        return response()->json([
            "status"=> 200,
            "message"=>"User Deleted Successfully"
        ],200);

    }
}


