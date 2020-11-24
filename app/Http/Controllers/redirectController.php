<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class redirectController extends Controller
{
    //

    public function index(Request $request, $shortner){
        if($shortner=='4542'){
           return redirect('https://www.youtube.com');
        }
        else{
            return redirect('http://www.facebook.com');
        }

    }


    public function send(){
        $details = [
            'name' => 'Dedar Alam',
            'email' => 'dedar3000@gmail.com'
        ];
        Mail::to('dedar3000@gmail.com')->send(new testMail($details));
    }
}
