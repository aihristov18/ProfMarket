<?php

namespace App\Http\Controllers;

use App\PostJob;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostJobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=(User::find(Auth::user())->first());
//dd($user->id);
        return view('home',compact('user'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [


                'title' => 'required',
                'salary' => 'required',
                'description' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'time' => 'required',
                'jobaddress' => 'required'
        ]);
        $user=(User::find(Auth::user())->first());
        if ($request->hasFile('img')){
            $imageName = time().'.'.$request->img->extension();
            $cover = $request->file('img');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        }
        $job=new PostJob();
        $job->user_id=$user->id;
        $job->title=$request->title;
        $job->salary=$request->salary;
        $job->description=$request->description;
        $job->time=$request->time;
        $job->jobaddress=$request->jobaddress;
        $job->mime = $cover->getClientMimeType();
        $job->original_filename = $cover->getClientOriginalName();
        $job->filename =  $imageName;

        $job->save();
       $request->img->move(public_path('img'), $imageName);
        return redirect('/')
                ->with('message','Job Offer added successfully...');
    }
}
