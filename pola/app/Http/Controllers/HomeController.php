<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users_doc = User::orderBy('scoure', 'DESC')->where('user_type',1)->get();
       
        $data = [];
        foreach ($users_doc as $users)
        {
            $data[] = [
                'label' => $users->first_name,
                'y' => (int)$users->scoure
            ];
        }
     
         return view('dash')->with('data', $data);    
               
    }

    public function add()
    {

         return view('dashboard')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
               ->with('cats', DB::select('select * from cat'))
               ->with('basicmanagements', DB::select('select * from basic_managements'))
               ->with('cvscurriculums', DB::select('select * from cvscurriculums'))
               ->with('diabetescurriculums', DB::select('select * from diabetescurriculums'))
               ->with('respiratorycurriculums', DB::select('select * from respiratorycurriculums'))
               ->with('miscellaneouscurriculums', DB::select('select * from miscellaneouscurriculums'))
               ->with('oncolcgycurriculums', DB::select('select * from oncolcgycurriculums'));
    } 

    public function redeemyourpoints()
    {
             
        $data[] = [
            'label' => Auth::user()->first_name,
            'y' => (int)Auth::user()->scoure
        ];
     
         return view('redeemyourpoints')->with('data', $data);
    }

    
    public function indextwo()
    {
        return view('profile')->with('user',Auth::user());
    }

    public function update(Request $request)
    {
    
        $this->validate($request, [ 
            "first_name"    => 'required|string|max:255',
            "email"  => 'required|string|email|max:255',
        ]);

        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->save();
       
    if ($request->has('password')) {
        
        if (Hash::check($request->password , $user->password)) { 
            
           $user->fill([
            'password' => bcrypt($request->new_password)
            ])->save();
        
        } else {
            return redirect()->back()->with('message', 'Check the old password');      
        }

    }
    return redirect()->back()->with('message', 'The data has been modified successfully');    
        
    }

  
}
