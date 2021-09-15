<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;
use DB;


class userApiController extends Controller
{

    public $successStatus = 200;    
    public function register(Request $request, user $user)
    {

        $validator = Validator::make($request->all(), [
            "first_name"    => 'required|string|max:255',
            "email"  => 'required|string|email|max:255',
            "password" => 'required',
            'c_password' => 'required|same:password',
            'user_type' => 'required',
            'dr_id' => ['required', 'integer']
        ]);


        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],401);
        }
        
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $user->sendEmailVerificationNotification();
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->first_name;
        return response()->json(['success'=> $success], $this->successStatus);
        
    }

    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success, 'user' => $user], $this->successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function details()
    {
         //$user = Auth::user();
         $user = Auth::user()->user_type;
        return response()->json(['success'=> $user], $this->successStatus);
    }
    
    //name of D
    public function NameOfD()
    {
        $doctors = DB::select('select * from users where user_type =1');
        return response()->json($doctors);
    }
    
    //redeemyourpointsForUser
    public function redeemyourpointsForUser()
    {
      $data[] = [
            'label' => Auth::user()->first_name,
            'y' => (int)Auth::user()->scoure
        ];
     
       return response()->json($data);
    }
    
}
