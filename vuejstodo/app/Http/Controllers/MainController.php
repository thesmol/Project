<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class MainController extends Controller {

    public function home(){
        // $connection = pg_connect("host=127.0.0.1 dbname=laravel_example user=postgres password=postgres");
        // if($connection) {
        //     echo 'connected';
        // } else {
        //     echo 'there has been an error connecting';
        // }
        return view('home');
    }
    
    public function about(){
        return view('about');
    }

    public function review(){
        return view('review', ['data'=>ContactModel::all()]);
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);


        $review = new ContactModel();
        $review->email = $request->input(key: 'email');  
        $review->subject = $request->input(key: 'subject'); 
        $review->message = $request->input(key: 'message'); 

        $review->save();

        return redirect()->route(route: 'review');
    }

}
