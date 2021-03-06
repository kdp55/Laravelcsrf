<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller{
    function home(){
        return view('pages.home');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function store(Request $request){
        $name = $request->name;
      //  dd($name);
        return redirect()->route('thanks',['name' => $name]);
    }
    //function thanks($name, Request $request){
      //  return view('pages.thankyou') -> with(compact('name'));}

    function thanks($name, Request $request){
        return view('pages.thankyou') ->with(compact('name'));
    }
}