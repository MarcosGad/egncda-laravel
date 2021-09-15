<?php

namespace App\Http\Controllers;

use App\Flight;
use App\redeem;
use App\Code;
use App\User;
use App\comment_eams;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }
    
    public function add(Request $request)
    {
      
      
        $this->validate($request,[
            "name_book"=>"required",
            "pre_book"=>"required",
            "photo_book" => "required|image",
            "pdf_book"=>"required|mimes:pdf",
            "cat_id"=>"required",
            "categoriesofdoctors_id"=>"required",
        ]);

        $photo_book = $request->photo_book; 
        $photo_book_new_name = time().$photo_book->getClientOriginalName(); 
        $photo_book->move('uploads/',$photo_book_new_name); 

        $pdf_book = $request->pdf_book; 
        $pdf_book_new_name = time().$pdf_book->getClientOriginalName(); 
        $pdf_book->move('uploads/',$pdf_book_new_name); 
         

        $add = Flight::create([
            "name_book"      => $request->name_book,
            "pre_book"    => $request->pre_book,
            "photo_book"   => 'uploads/'.$photo_book_new_name,
            "pdf_book"   => 'uploads/'.$pdf_book_new_name,
            "desc"    => $request->desc,
            "cat_id"    => $request->cat_id,
            "categoriesofdoctors_id"    => $request->categoriesofdoctors_id,
            "basicmanagements_id"  => $request->basicmanagements_id,
            "cvscurriculums_id" => $request->cvscurriculums_id,
            "diabetescurriculums_id" => $request->diabetescurriculums_id,
            "respiratorycurriculums_id" => $request->respiratorycurriculums_id,
            "oncolcgycurriculums_id" => $request->oncolcgycurriculums_id,
            "miscellaneouscurriculums_id" => $request->miscellaneouscurriculums_id,
            
        ]);
        return redirect()->route('home');
        
    }

    public function exm()
    {
        $questionnaires = \App\Questionnaire::all();
        return view('exm', compact('questionnaires'));
    }

    /*public function exmcvs()
    {
        $questionnaires = \App\Questionnaire::all();
        return view('exmcvs', compact('questionnaires'));
    }*/

    public function comment()
    {
        return view('comment')->with('comment_eams',comment_eams::all());
    }

    public function index()
    {
        return view('confer')->with('redeems',redeem::all());
    }   


    public function users()
    {
        return view('users')->with('users',user::all()->where('admin','=','0'));
    }  

    public function addCodes()
    {
        for ($x = 0; $x <= 10; $x++) {
            $code = Code::create([
                "numbercode"      => Str::random(6) . rand(0,100),
            ]);
        }
        echo 'Add Done';
    }

    public function destroy($id)
    {
        $redeem=redeem::find($id);
        $redeem->destroy($id);
        return redirect()->route('confer');
    }

    public function destroyComment($id)
    {
        $comment_eams=comment_eams::find($id);
        $comment_eams->destroy($id);
        return redirect()->route('comment');
    }

}
