<?php

namespace App\Http\Controllers;

use App\PostJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index()
    {
        $jobs=PostJob::all();
//        dd($jobs);
       return view('index',compact('jobs'));
    }
    public function jobs()
    {
        $jobs=PostJob::all();
//        dd($jobs);
       return view('jobs',compact('jobs'));
    }


    public function show($id)
    {
        $job=PostJob::where('id',$id)->first();
        $user=User::where('id',$job->user_id)->first();



        return view('job',compact('job','user'));
    }

    public function postContact(Request $request)
    {

        $this->validate($request, [
                'message' => 'min:5',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|',

        ]);

        $data = array(
                'email' => $request->email,
                'recipient' => 'profmarketofficial@gmail.com',
                'name' => $request->name,
                'bodyMessage' => $request->message,

        );


        Mail::send('email', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('rentacaredi.bg@gmail.com');
            $message->subject($data['name']);
        });

        Session::flash('message', __('email_sent'));
        return redirect('/');
    }
}
