<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\User;
use App\redeem;
use DB;
use Redirect;
use App\Code;
use Session;

class PagesController extends Controller
{
    public function code()
    {
        return view('code');
    }

    public function register()
    {
        return view('auth.register')
        ->with('isCode', false);
    }

    public function codePa()
    {
        return view('codePa');
    }

    public function loginB()
    {
        if(!Auth::guest()){
            return view('dash');
        }else{
            return view('auth.login_p');
        }
        
    }

    public function registerB()
    {
        return view('auth.register_p')
        ->with('isCode', false);
    }

    public function gocode(Request $request)
    {

        $codes  = DB::select('select numbercode from codes where status	= 0');
        $code = array();
        foreach ($codes as $s) {
            array_push($code,$s->numbercode);
        };
            if (in_array($request->code,$code))
            {
                //Code::where('numbercode', $request->code)->update(array('status' => 1));
                return view('auth.register')
                ->with('isCode', true);
            }
            else
            {
                return Redirect::back()->with('msg', 'Your Code is Wrong');
            };
    }


    public function gocodePa(Request $request)
    {
   
        $codes  = DB::select('select numbercode from codes where status	= 0');
        $code = array();
        foreach ($codes as $s) {
            array_push($code,$s->numbercode);
        };
            if (in_array($request->code,$code))
            {
                //Code::where('numbercode', $request->code)->update(array('status' => 1));
                return view('auth.register_p')->with('doctors',User::all()->where('user_type',1))
                ->with('isCode', true);
            }
            else
            {
                return Redirect::back()->with('msg', 'Your Code is Wrong');
            };

    }

    
    public function create()
    {
        return view('contactus');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('info@egncda.com')->send(new ContactFormMail($data));
/*
        return redirect('/')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
*/
        Session::flash('success', 'Thanks for your message. We\'ll be in touch.');
        return view('contactus');
    }
    

    
}
